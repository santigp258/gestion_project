$(document).ready(function () {
  $('#form').submit(function (e) { 
    e.preventDefault();
    
  });
   var baseURL = "http://localhost/gestion_proyect/";
  function Search() {
    var value = $("#search").val();
    if (value != "" ) { 

      if( value.indexOf("'") >= 0){ //prevent quotation marks
        let message =
        "Verifique que esté ingresando caracteres validos. Realice su busqueda sin simbolos o comillas, por favor.";
      let title = "¡Error en la busqueda!";
      toastr["error"](message, title);
      toastr.options = {
        closeButton: true,
        progressBar: true,
      };
      }else{
        $.ajax({
          type: "post",
          url: "../login/search.php",
          data: {data: value},
          dataType: "html",
          success: function (response) {
            $('#tbody').html(response);
            $('#div_pagination').hide();
          }
        });
      }
       
    } else { 
      index = $('#index').val();
      $.ajax({
        type: "post",
        url: "../login/search.php",
        data: {dataShow: '', index: index },
        dataType: "html",
        success: function (response) {
         $('#tbody').html(response);
         $('#div_pagination').show();
        }
      });
	};
};
$('#search').keyup(Search);

});
