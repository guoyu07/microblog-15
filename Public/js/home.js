(function() {
  var __indexOf = [].indexOf || function(item) { for (var i = 0, l = this.length; i < l; i++) { if (i in this && this[i] === item) return i; } return -1; };

  $(function() {
    $("#blog_area").click(function() {
      $(this).hide();
      $("#blog_textarea").show();
      $("#content").focus();
      return false;
    });
    $("body").click(function(e) {
      var array, id;
      id = e.target.id;
      array = ["camera", "no_position", "send", "content"];
      if (__indexOf.call(array, id) >= 0) {
        return true;
      }
      if ($("#blog_textarea").is(":visible")) {
        $("#blog_textarea").hide();
        return $("#blog_area").show();
      }
    });
    $(".send").click(function() {
      var content;
      content = $(".container").val();
      return $.post("/index.php/home/index/add_article", {
        content: content
      }, function(data) {
        var html;
        if (data.status === 1) {
          html = "<div class='form-group jiangefu' style='display: none'> <div class='col-sm-2 control-label'><img class='avatar size32' src='./Public/images/Koala.jpg'></div> <div class='textbox_author' id='author' name='author'>作者:<a href='#'>黄</a></div> <div class='textbox_time' id='time' name='time'>时间:[" + data.time + "]</div> <div class='textbox_content' id='content' name='content'>" + content + "</div> <div class='textbox_reply'> <a href='javascript: void 0;'><span class='glyphicon glyphicon-share-alt'></span></a> <!--回复-->&nbsp;&nbsp;&nbsp;&nbsp; <a href='javascript: void 0;'><span class='glyphicon glyphicon-thumbs-up'></span></a> <!--点赞-->&nbsp;&nbsp;&nbsp;&nbsp; <a href='javascript: void 0;'><span class='glyphicon glyphicon-retweet'></span></a> <!--转推-->&nbsp;&nbsp;&nbsp;&nbsp; <a href='javascript: void 0;'><span class='glyphicon glyphicon-star'></span></a> <!--收藏--> </div> </div>";
          $(html).prependTo(".content_blog").fadeIn("800");
          return $("#content").val("");
        }
      });
    });
    return $(".good").click(function() {
      var good, good_val, id;
      good = $(this).children("span").eq(1);
      good_val = parseInt(good.text());
      id = $(this).parent().attr("data-id");
      $.post("/index.php/home/index/good", {
        id: id
      }, function(data) {
        var new_val;
        console.log(data);
        new_val = good_val + 1;
        return good.text(new_val);
      });
      return false;
    });
  });

}).call(this);
