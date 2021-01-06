 function deleting(){
        var form = $(".delete");
        var baseURL = "http://localhost/gestion_proyect/";
        var script = "<script src='" +
        baseURL +
        "plugin/bootbox/delete.js'></script>";
        $.each(form, function (indexInArray, valueOfElement) {
          var that = $(this);
          that.submit(function (e) {
             bootbox.confirm({
              title: "Eliminar datos afiliación.",
              message: "¿Está usted seguro?",
              buttons: {
                cancel: {
                  label: '<i class="fa fa-times"></i> Cancelar',
                },
                confirm: {
                  label: '<i class="fa fa-check"></i> Confirmar',
                },
              }, 
              callback: function (result) {
                if (result) {
                  let id = that[0].lastElementChild.value;
                  var index = $('#index').val();
                      $.ajax({
                        type: "post",
                        url: that.attr("action"),
                        data: {
                          id: id, index: index
                        },
                      }).done(function (res) {
                          let title = "¡Se ha eliminado correctamente!";
                          toastr["info"](title);
                          toastr.options = {
                              closeButton: true,
                              progressBar: true,
                          };
                          if(res.length == 0){
                              window.location.replace(baseURL + "login/administrator.php")
                          }else{
                              $('#tbody').html(res + script);
                          }
                      });
                }
              },
            });
            return false; 
          });
        });
    }
deleting();
/**/
