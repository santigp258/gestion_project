$(document).ready(function () {
    //Change important
    var baseURL = "http://localhost/gestion_proyect/";
    var inputObj = $("#formEdit input");
    $("#formEdit").submit(function (e) {
      e.preventDefault();
        let nombreAfi = inputObj[0].value;
        let cedulaAfi = inputObj[1].value;
        let telAfi = inputObj[2].value;
        let ciudadAfi = inputObj[3].value;
        let emailAfi = inputObj[4].value;
        let fechaAfi = inputObj[5].value;
  
        $.ajax({
          type: "post",
          url: $('#formEdit').attr('action'),
          data: {
            nombreAfi: nombreAfi,
            cedulaAfi: cedulaAfi,
            telAfi: telAfi,
            ciudadAfi: ciudadAfi,
            emailAfi: emailAfi,
            fechaAfi: fechaAfi,
            editAfiSubmit: " ",
          },
          success: function (response) {
            if (response.trim() == "updated") {
              $('#submitEdit').attr("disabled", "disabled");
              let title = "¡Afiliación editada!";
              toastr["success"](title);
              toastr.options = {
                closeButton: true,
                progressBar: true,
              };
              setTimeout(()=>{
                 window.location.replace(baseURL + "login/administrator.php");
              }, 2000); 
            }else{
              let title = "¡Verique los campos!";
              let message = "Verifique lo campos, por favor. Estos cumplen con las mismas condiciones del formulario para crear una nueva afiliación."
              toastr["warning"](message, title);
              toastr.options = {
                closeButton: true,
                progressBar: true,
              };
            }
          },
        });
        return false;
     
    });
  });
  