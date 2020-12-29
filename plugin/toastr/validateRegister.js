$(document).ready(function () {
  const input = $("form input");

  const expressions = {
    usernameReg: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    emailReg: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    passwordReg: /^.{4,12}$/,
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
      return true;
    } else {
      if (fields.usernameReg == false) {
        let message =
        "Verifique que esté ingresando caracteres validos. También debe contener de 5 a 40 caracteres.";
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
