/*
author : huangyifan
version : 1.0
date : 2016.7.8
descriptioin : 公有js
*/
$(function(){
// 搜索点击	
$(".guide span").click(function(){
	var index = $(this).index();
	$(".guide span:eq("+index+")").addClass("guide-active");
})

})


