$("#contact").submit(function(){
    if ($("input[name='entry.129489804']").val() == '') {
      alert('正しいメールアドレスを入力してください');
      return false;
    } else {
      $("#contact").submit();
    }
  });