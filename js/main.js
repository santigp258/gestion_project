$(document).ready(function () {
   var baseURL = "http://localhost/gestion_proyect/";
  function Search() {
    var value = $("#search").val();
    if (value != "") {
       $.ajax({
         type: "post",
         url: "../login/search.php",
         data: {data: value},
         dataType: "html",
         success: function (response) {
           $('#tbody').html(response);
         }
       });
    } else { 
      index = $('#index').val();
      $.ajax({
        type: "post",
        url: "../login/search.php",
        data: {dataShow: '', index: index },
        dataType: "html",
        success: function (response) {
         $('#tbody').html(response);
        }
      });
	};
};
$('#search').keyup(Search);

});
