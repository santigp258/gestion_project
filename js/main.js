$(document).ready(function () {
  $('#form').submit(function (e) { 
    e.preventDefault();
    
  });
  var form = $(".delete"); //array forms
   var baseURL = "http://localhost/gestion_project/";
   var script = "<script src='" +
   baseURL +
   "plugin/bootbox/delete.js'></script>";
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
        $.each(form, function (indexInArray, valueOfElement) { 
          var that = $(this);
          let ids = that[0].lastElementChild.value;
          if(ids != undefined){
        $.ajax({
          type: "post",
          url: "../login/search.php",
          data: {data: value, ids: ids},
          dataType: "html",
          success: function (response) {
            $('#tbody').html(response + script);
            $('#div_pagination').hide();
          }
        });
      }
      });
      }
       
    } else { 
     var index = $('#index').val();
      $.each(form, function (indexInArray, valueOfElement) { 
        var that = $(this);
        let id = that[0].lastElementChild.value;
       if(id != undefined){
         $.ajax({
           type: "post",
           url: "../login/search.php",
           data: {dataShow: '', index: index, id: id },
           dataType: "html",
           success: function (response) {
            $('#tbody').html(response + script);
            $('#div_pagination').show();
           }
         });      
        } 
      });
	};
};
$('#search').keyup(Search);

});
