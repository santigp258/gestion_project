$(document).ready(function () {
  //Change important
  var baseURL = "http://localhost/gestion_project/";
  var inputObj = $("#formCreate input");
  const input = [
    inputObj[0],
    inputObj[1],
    inputObj[2],
    inputObj[3],
    inputObj[4],
  ];
  const expressions = {
    nombreAfi: /[A-Za-z]{3,40}/,
    cedulaAfi: /^([0-9]){4,15}$/,
    telAfi: /^([0-9]){8,15}$/,
    ciudadAfi: /[A-Za-z]{3,40}/,
    emailAfi: /^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  };

  const fields = {
    nombreAfi: false,
    cedulaAfi: false,
    telAfi: false,
    ciudadAfi: false,
    emailAfi: false,
  };

  const validateForm = (e) => {
    switch (e.target.name) {
      case "nombreAfi":
        validateFields(expressions.nombreAfi, e.target, "nombreAfi");
        break;
      case "cedulaAfi":
        validateFields(expressions.cedulaAfi, e.target, "cedulaAfi");
        break;
      case "telAfi":
        validateFields(expressions.telAfi, e.target, "telAfi");
        break;
      case "ciudadAfi":
        validateFields(expressions.ciudadAfi, e.target, "ciudadAfi");
        break;
      case "emailAfi":
        validateFields(expressions.emailAfi, e.target, "emailAfi");
        break;
    }
  };

  const validateFields = (expression, inputs, field) => {
    if (expression.test(inputs.value)) {
      fields[field] = true;
    } else {
      fields[field] = false;
    }
  };

  $.each(input, function (input) {
    $(this).keyup(validateForm);
  });

  $("#formCreate").submit(function (e) {
    e.preventDefault();
    if (
      fields.nombreAfi &&
      fields.cedulaAfi &&
      fields.telAfi &&
      fields.ciudadAfi &&
      fields.emailAfi
    ) {
      let nombreAfi = inputObj[0].value;
      let cedulaAfi = inputObj[1].value;
      let telAfi = inputObj[2].value;
      let ciudadAfi = inputObj[3].value;
      let emailAfi = inputObj[4].value;
      let fechaAfi = inputObj[5].value;

      $.ajax({
        type: "post",
        url: baseURL + "login/crud/sendCreate.php",
        data: {
          nombreAfi: nombreAfi,
          cedulaAfi: cedulaAfi,
          telAfi: telAfi,
          ciudadAfi: ciudadAfi,
          emailAfi: emailAfi,
          fechaAfi: fechaAfi,
          createAfiSubmit: " ",
        },
        success: function (response) {
          if (response.trim() == "created") {
            $('#submitCreate').attr("disabled", "disabled");
            let title = "¡Afiliación creada!";
            toastr["success"](title);
            toastr.options = {
              closeButton: true,
              progressBar: true,
            };
            setTimeout(()=>{
               window.location.replace(baseURL + "login/administrator.php");
            }, 2000);
          }
        },
      });
      return false;
    } else {
      if (!fields.nombreAfi) {
        let message =
          "Verifique que esté ingresando caracteres validos. No se admiten números y símbolos. También debe contener de 3 a 40 caracteres.";
        let title = "¡Campo nombre incorrecto!";
        toastr["error"](message, title);
        toastr.options = {
          closeButton: true,
          progressBar: true,
        };
      } else if (!fields.cedulaAfi) {
        let message =
          "Por favor, ingrese sólo caracteres numéricos sin puntos u otros símbolos. La longitud del campo debe ser valida a una cédula";
        let title = "¡Campo cedula incorrecto!";
        toastr["error"](message, title);
        toastr.options = {
          closeButton: true,
          progressBar: true,
        };
      } else if (!fields.telAfi) {
        let message =
          "Por favor, ingrese sólo caracteres numéricos sin puntos u otros símbolos. La longitud del campo debe ser valida a un número telefónico";
        let title = "¡Campo teléfono incorrecto!";
        toastr["error"](message, title);
        toastr.options = {
          closeButton: true,
          progressBar: true,
        };
      } else if (!fields.ciudadAfi) {
        let message =
          "Verifique que esté ingresando caracteres validos. No se admiten números y símbolos. También debe contener de 3 a 20 caracteres.";
        let title = "¡Campo ciudad incorrecto!";
        toastr["error"](message, title);
        toastr.options = {
          closeButton: true,
          progressBar: true,
        };
      } else if (!fields.emailAfi) {
        let message =
        "Verifique que esté ingresando caracteres validos. Este campo debe ser de tipo email. Debe tener @ y un dominio. Ejemplo '.com'";
        let title = "¡Campo email incorrecto!";
        toastr["error"](message, title);
        toastr.options = {
          closeButton: true,
          progressBar: true,
        };
      }
    }
  });
});
