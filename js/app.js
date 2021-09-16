$(function () {
  // 送信ボタンを無効化
  $('#submit').prop("disabled", true);

  // 必須項目チェック
  $('.q-valid').change(function () {
      let flag = true;

      // 値が間違っている場合はフラグをfalseにする
      $('.q-valid').each(function (e) {
          if ($('.q-required').val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)){
              flag = false;
          }
      });

      // フラグがtrueの場合は送信ボタン有効
      if (flag) {
          $('#submit').prop("disabled", false);

          $('#submit').on("click", function() {
              window.location.href = "thanks.html";
          });

      } else {
          $('#submit').prop("disabled", true);
      }
  });
});


$('#submit').on('click', function() {
  window.location='thanks.html';
});

$(function(){//smooth scroll
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});