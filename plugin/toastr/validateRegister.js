$(document).ready(function () {
  var inputObj = $("form input");
  const input = [inputObj[0], inputObj[1], inputObj[2]]
  const expressions = {
    usernameReg: /^[A-Za-z0-9_]{3,20}$/,
    emailReg: /^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    passwordReg: /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/,
  };

  const fields = {
    usernameReg: false,
    emailReg: false,
    passwordReg: false,
  };

  const validateForm = (e) => {
    switch (e.target.name) {
      case "usernameReg":
        validateFields(expressions.usernameReg, e.target, "usernameReg");
        break;
      case "emailReg":
        validateFields(expressions.emailReg, e.target, "emailReg");
        break;
      case "passwordReg":
        validateFields(expressions.passwordReg, e.target, "passwordReg");
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
    if (fields.usernameReg && fields.emailReg && fields.passwordReg) {
      let username = inputObj[0].value;
      let email = inputObj[1].value;
      let password = inputObj[2].value;
      $.ajax({
        type: 'post',
        url: 'http://localhost/gestion_proyect/login/registerValidation.php',
        data: {
          usernameReg: username, 
          emailReg: email,
          passwordReg: password,
          signupSubmit: ' '
        },
      }).done(function(resp){
        $(document.body).append(resp);
      })
      return true;
  
    } else {
      if (fields.usernameReg == false) {
        let message =
        "Verifique que esté ingresando caracteres validos. También debe contener de 3 a 20 caracteres.";
        let title = '¡Campo "usuario" incorrecto!';
        toastr["warning"](message, title);
        toastr.options = {
          closeButton: true,
          progressBar: true,
        };
        e.preventDefault();
      } else if (fields.emailReg == false) {
        let message =
        "Verifique que esté ingresando caracteres validos. Este campo debe ser de tipo email.";
        let title = '¡Campo "email" incorrecto!';
        toastr["warning"](message, title);
        toastr.options = {
          closeButton: true,
          progressBar: true,
        };
        e.preventDefault();
      }else if (fields.passwordReg == false) {
        let message =
          "Verifique que esté ingresando caracteres validos. Puede ingresar caracteres alfanumericos y simbolos. También debe contener de 6 a 20 caracteres.";
        let title = '¡Campo "contraseña" incorrecto!';
        toastr["warning"](message, title);
        toastr.options = {
          closeButton: true,
          progressBar: true,
        };
        e.preventDefault();
      }else{
        return true;
      }
    }
  });
});
