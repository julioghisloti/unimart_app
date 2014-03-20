$(function (){

	//Media de likes
	var likes = $("#likes").val();
	if(likes == 0){
		$(".status").width("0px");
	}else if(likes <=1){
		$(".status").width("40px");
	}else if(likes <=2.5){
		$(".status").width("80px");
	}else if(likes <=3.5){
		$(".status").width("116px");
	}else if(likes <=4.5){
		$(".status").width("153px");
	}else{
		$(".status").width("193px");
	}

	//Like 1
	$("#like-1").click(function(){
		$(".status").width("40px");
		$("#likes").val(1);
		//$("#form").submit();
	});

	//Like 2
	$("#like-2").click(function(){
		$(".status").width("80px");
		$("#likes").val(2);
		//$("#form").submit();
	});

	//Like 3
	$("#like-3").click(function(){
		$(".status").width("118px");
		$("#likes").val(3);
		//$("#form").submit();
	});

	//Like 4
	$("#like-4").click(function(){
		$(".status").width("153px");
		$("#likes").val(4);
		//$("#form").submit();
	});

	//Like 5
	$("#like-5").click(function(){
		$(".status").width("190px");
		$("#likes").val(5);
		//$("#form").submit();
	});


});