#中间内容头部js

$ ->
  $("#blog_area").click ->
    $(this).hide()
    $("#blog_textarea").show()
    $("#content").focus()
    false

  $("body").click (e) ->
    id = e.target.id
    array = ["camera", "no_position", "send", "content"]
    if id in array
      return true

    if($("#blog_textarea").is(":visible"))
      $("#blog_textarea").hide()
      $("#blog_area").show()

    #发推内容提交的ajax请求
  $(".send").click ->
    content = $(".container").val()
    $.post "/index.php/home/index/add_article",{
      content:content
    },(data) ->
      if data.status is 1
        html = "<div class='form-group jiangefu' style='display: none'>
        <div class='col-sm-2 control-label'><img class='avatar size32' src='./Public/images/Koala.jpg'></div>
                    <div class='textbox_author' id='author' name='author'>作者:<a href='#'>黄</a></div>
                    <div class='textbox_time' id='time' name='time'>时间:[#{data.time}]</div>
        <div class='textbox_content' id='content' name='content'>#{content}</div>
                    <div class='textbox_reply'>
                        <a href='javascript: void 0;'><span class='glyphicon glyphicon-share-alt'></span></a> <!--回复-->&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href='javascript: void 0;'><span class='glyphicon glyphicon-thumbs-up'></span></a> <!--点赞-->&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href='javascript: void 0;'><span class='glyphicon glyphicon-retweet'></span></a> <!--转推-->&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href='javascript: void 0;'><span class='glyphicon glyphicon-star'></span></a> <!--收藏-->
                    </div>
        </div>"
        $(html).prependTo(".content_blog").fadeIn "800"
        $("#content").val ""  #清空表单值

  #点赞
  $(".good").click ->
    good = $(this).children("span").eq 1
    good_val = parseInt good.text()

    id = $(this).parent().attr "data-id"
    $.post "/index.php/home/index/good", {id:id},(data) ->
      console.log data
      new_val = good_val+1
      good.text new_val
    false

