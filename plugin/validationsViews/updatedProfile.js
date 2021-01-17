$(document).ready(function () {
    //Change important
    var baseURL = "http://localhost/gestion_project/";
    var inputObj = $("form input");
    const input = [inputObj[2]];
    const expressions = {
      passwordPro: /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/,
    };
  
    const fields = {
      passwordPro: false,
    };
  
    const validateForm = (e) => {
      switch (e.target.name) {
        case "passwordPro":
          validateFields(expressions.passwordPro, e.target, "passwordPro");
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
  
    $("form").submit(function (e) {
        e.preventDefault()
      if (fields.passwordPro) {
        let username = inputObj[0].value;
        let email = inputObj[1].value;
        let password = inputObj[2].value;
         $.ajax({
          type: "post",
          url: $("form").attr("action"),
          data: {
            usernamePro: username,
            emailPro: email,
            passwordPro: password,
            signupSubmit: " ",
          },
        }).done(function (resp) {
         if (resp === "send") {
            $('#signupSubmit').attr("disabled", "disabled");
            var success =
              "<script src='" +
              baseURL +
              "plugin/toastr/infoRegister.js'></script>";
            $(document.body).append(success);
            setTimeout(() => {
              window.location.replace(baseURL + "login/dashboard.php");
            }, 3000);
          }else{
              console.log('error');
          }
        }); 
        return false;
      } else {
        if (!fields.passwordPro) {
          let message =
            "Verifique que esté ingresando caracteres validos. Puede ingresar caracteres alfanumericos y simbolos. También debe contener de 6 a 20 caracteres.";
          let title = "¡Campo contraseña incorrecto!";
          toastr["error"](message, title)
          toastr.options = {
            closeButton: true,
            progressBar: true,
          };
          e.preventDefault();
        } else {
         return true;
        }
      }
    });
  });
  