$(document).ready(function () {
  var show = $('.show');
  var hide = $('.hide');
  var inputPassword = $('#passwordPro')
  show.hide();
  hide.click(function (e) { 
    inputPassword.attr("type", "text");
    show.show();
    hide.hide();
  });

  show.click(function (e) { 
    inputPassword.attr("type", "password");
    show.hide();
    hide.show();
  });
});