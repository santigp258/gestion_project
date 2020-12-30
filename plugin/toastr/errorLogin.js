$(document).ready(function () {
  toastr["error"](
    "Verifique su información, por favor.",
    "Email o Contraseña incorrecta"
  )

  toastr.options = {
    closeButton: true,
    progressBar: true,
  };
});
