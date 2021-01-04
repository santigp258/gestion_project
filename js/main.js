$(document).ready(function () {
   var baseURL = "http://localhost/gestion_proyect/";
  function Search() {
    var value = $("#search").val();
    var index = $("#index").val();
    if (value != "") {
       $.ajax({
         type: "post",
         url: "../login/search.php",
         data: {data: value, index: index},
         dataType: "html",
         success: function (response) {
           $('#tbody').html(response);
         }
       });
    } else { 
     var template ;
	};
};
$('#search').keyup(Search);

});
