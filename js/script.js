 $(function () {		
    $("#mybook").booklet();
});

 $('.menu').click(function(){
 	var firstPage = $("#firstPage");
 	var secondPage = $("#secondPage");
 	var thirdPage = $("#thirdPage");
 	var fourthPage = $("#fourthPage");
 	var dataId = $(this).attr("data-id");
 	if(dataId == 2){
 		firstPage.html('<img title = "first page" src="books/boek2voorkant.jpg" height="100%" width="100%">');
 		secondPage.html('<img title = "second page" src="books/boek2page1.jpg" height="100%" width="100%">');
 		thirdPage.html('<img title = "third page" src="books/boek2page2.jpg" height="100%" width="100%">');
 		fourthPage.html('<img title = "fourth page" src="books/boek2page3.jpg" height="100%" width="100%">');
 	}
 	if(dataId == 3){
 		firstPage.html('<img title = "first page" src="books/boek3voorkant.jpg" height="100%" width="100%">');
 		secondPage.html('<img title = "second page" src="books/boek3page1.jpg" height="100%" width="100%">');
 		thirdPage.html('<img title = "third page" src="books/boek3page2.jpg" height="100%" width="100%">');
 		fourthPage.html('<img title = "fourth page" src="books/boek3page3.jpg" height="100%" width="100%">');
 	}
 });