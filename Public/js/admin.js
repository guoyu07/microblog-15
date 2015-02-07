/**
 * Created by hdj on 2015/1/30.
 */

$(function(){
    //点击左边第一个栏目使下面的栏目隐藏
    $(".first").click(function(){
        $(this).next().slideToggle(300);
    })
    //调整浏览器窗口大小
    $(window).resize(function(){
       var width = $(document).width();
        console.log(width);
        if(width >= 992) {
            $(".left_menu_child").show();
        } else {
            $(".left_menu_child").hide();
        }
    })
    //管理日志下面的导航栏JS
    $(".form-group ul li").click(function(){
    	$(this).addClass("active").siblings().removeClass("active");
    	var index = $(this).index();
       // console.log($(".text>div").eq(index).html());
    	$(".text>div").eq(index).removeClass("hide").siblings().addClass("hide");
    });
})