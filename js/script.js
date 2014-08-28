 $(function () {		
    $("#mybook").booklet();
});
 $('#Container ul li span').hover(function(e){
 	var parent = $(this).parent().children('ul');
 	parent.css('display', 'block');
 },function(){
 	var parent = $(this).parent().children('ul');
 	parent.css('display', 'none');
 });

  $('#Container ul li ul').hover(function(e){
 	var parent = $(this);
 	parent.css('display', 'block');
 },function(){
 	var parent = $(this);
 	parent.css('display', 'none');
 });

 $('.menu').click(function(){
 	var firstPage = $("#firstPage");
 	var secondPage = $("#secondPage");
 	var thirdPage = $("#thirdPage");
 	var fourthPage = $("#fourthPage");
 	var dataId = $(this).attr("data-id");
 	if(dataId == 2){
 		firstPage.html('<img class="animated fadeIn" title = "first page" src="books/boek2voorkant.jpg" height="100%" width="100%">');
 		secondPage.html('<img class="animated fadeIn" title = "second page" src="books/boek2page1.jpg" height="100%" width="100%">');
 		thirdPage.html('<img class="animated fadeIn" title = "third page" src="books/boek2page2.jpg" height="100%" width="100%">');
 		fourthPage.html('<img class="animated fadeIn" title = "fourth page" src="books/boek2page3.jpg" height="100%" width="100%">');
 	}
 	if(dataId == 3){
 		firstPage.html('<img class="animated fadeIn" title = "first page" src="books/boek3voorkant.jpg" height="100%" width="100%">');
 		secondPage.html('<img class="animated fadeIn" title = "second page" src="books/boek3page1.jpg" height="100%" width="100%">');
 		thirdPage.html('<img class="animated fadeIn" title = "third page" src="books/boek3page2.jpg" height="100%" width="100%">');
 		fourthPage.html('<img class="animated fadeIn" title = "fourth page" src="books/boek3page3.jpg" height="100%" width="100%">');
 	}
 });