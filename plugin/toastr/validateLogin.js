$(document).ready(function () {
  //Change important
  var baseURL = "http://localhost/gestion_proyect/";
  var inputObj = $("form input");
  const input = [inputObj[0], inputObj[1]];
  const expressions = {
    usernameEmail: /^[A-Za-z0-9_]{1,20}$/,
    password: /^[A-Za-z0-9!@#$%^&*()_]{1,20}$/,
  };

  const fields = {
    usernameEmail: false,
    password: false,
  };

  const validateForm = (e) => {
    switch (e.target.name) {
      case "usernameEmail":
        validateFields(expressions.usernameEmail, e.target, "usernameEmail");
        break;
      case "password":
        validateFields(expressions.password, e.target, "password");
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
    if (fields.usernameEmail && fields.password) {
      let username = inputObj[0].value;
      let password = inputObj[1].value;
      $.ajax({
        type: "post",
        url: $("form").attr("action"),
        data: {
          usernameEmail: username,
          password: password,
          loginSubmit: " ",
        },
      }).done(function (resp) {
        if (resp === "done") {
          var success =
            "<script src='" + baseURL + "plugin/toastr/infoLogin.js'></script>";
          $(document.body).append(success);
          setTimeout(() => {
            window.location.replace(baseURL + "login/dashboard.php");
          }, 2000);
        } else {
          var error =
            "<script src='" +
            baseURL +
            "plugin/toastr/errorLogin.js'></script>";
          $(document.body).append(error);
        }
      });
    } else {
      toastr["warning"](
        "No se admiten campos vacios, por favor verifique los campos.",
        "¡Envio de datos incorrecto!"
      )

      toastr.options = {
        closeButton: true,
        progressBar: true,
      };
    }

    return false;
  });
});
