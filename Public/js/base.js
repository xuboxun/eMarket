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
		$(".guide span").removeClass("guide-active");
		$(".guide span:eq("+index+")").addClass("guide-active");
	})

	// 即时搜索
	var timer = setInterval(function(){
		var search = $.trim(document.getElementById('searchValue').value);
		if(search != null && search != ""){
			// 向服务器传数据
			$.post('url',{
				search:search
			},function(){
				$(".search-answer-left .search-ul li").html(search);
			})
			$(".search-answer").show();
		}else{
			$(".search-answer").hide();
		}
	},500)
	

})


