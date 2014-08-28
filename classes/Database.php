<?php

/**
*@method {__construct} constructs the model class and creates a new PDO
*@method {query} prepares a query
*@method {bind} binds values to the wildcards in the prepared query and determines datatype
*@method {execute} executes the query on the database
*@method {resultSet} returns the resultset of the executed query
*@method {single} returns a single result from the database
*@method {rowCount} returns an integer (counted rows in database
*@method {lastInsertId} returns the id of the last inserted row
*@method {beginTransaction} begins a transaction to run mutliple query's
*@method {endTransaction} ends a transaction if successfull
*@method {cancelTransaction} cancels a transaction and rollbacks all the changes
*@method {debugDumpParams} returns all the given params of the statement property in the prepare method
*@string {host} : Database Host
*@string {user} : Database User
*@string {pass} : Database Password
*@string {dbname} : Database Name
*@property {database_handler} PDO handler of the database
*@array {error} Array of all the generated errors
*@property {statement} property to bind and execute queries
*@array {options} Array of the PDO options
**/


class Database {
		
		private $database_handler;
		private $error;
		
		private $statement;
		private static $instance;

		
		/**
		 * __construct function.
		 * 
		 * @access public
		 * @param mixed $host
		 * @param mixed $user
		 * @param mixed $pass
		 * @param mixed $dbname
		 * @return void
		 */
		 public function __construct($host, $user, $pass, $dbname){
		//Database server name
			$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
			
			$options = array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);
			
			try {
				$this->database_handler = new PDO($dsn, $user, $pass, $options);
			}
			//Catch eventuele errors
			catch (PDOException $e) {
				$this->error = $e->getMessage();
			}
		}
		public static function getInstance(){
			if(!self::$instance){
				self::$instance = new Database('localhost', 'root', 'Grownedevelopment2014', 'growne');
			}
			return self::$instance;
		}
		/**
		 * query function.
		 * 
		 * @access public
		 * @param mixed $query
		 * @return void
		 */
		public function query($query)
		{
			$this->statement = $this->database_handler->prepare($query);
		}
		
		/**
		 * bind function.
		 * 
		 * @access public
		 * @param mixed $param
		 * @param mixed $value
		 * @param mixed $type (default: null)
		 * @return void
		 */
		public function bind($param, $value, $type = null){
		
			if(is_null($type))
			{
				switch(true) {
					case is_int($value):
					$type = PDO::PARAM_INT;
					break;
					case is_bool($value):
				    $type = PDO::PARAM_BOOL;
				    break;
				    case is_null($value):
				    $type = PDO::PARAM_NULL;
				    break;
				    default:
				    $type = PDO::PARAM_STR;
				}
			}
			
			$this->statement->bindValue($param, $value, $type);
		}
		
		/**
		 * execute function.
		 * 
		 * @access public
		 * @return void
		 */
		public function execute(){
			return $this->statement->execute();
		}
		
		/**
		 * resultset function.
		 * 
		 * @access public
		 * @return void
		 */
		public function resultset(){
			$this->execute();
			return $this->statement->fetchAll(PDO::FETCH_ASSOC);
		}
		
		/**
		 * single function.
		 * 
		 * @access public
		 * @return void
		 */
		public function single(){
			$this->execute();
			return $this->statement->fetch(PDO::FETCH_ASSOC);
		}
		
		public function rowCount(){
			return $this->statement->rowCount();
		}
		
		public function lastInsertId(){
			return $this->database_handler->lastInsertId();
		}
		
		public function beginTransaction(){
			return $this->database_handler->beginTransaction();
		}
		
		public function endTransaction(){
			return $this->database_handler->commit();
		}
		
		public function cancelTransaction(){
			return $this->database_handler->rollBack();
		}
		
		public function debugDumpParams(){
			return $this->statement->debugDumpParams();
		}
}
