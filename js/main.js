$(document).ready(function () {
  function Search() {
    var value = $("#search").val();
	
    if (value != "") {
       $.ajax({
         type: "post",
         url: "http://localhost/gestion_proyect/login/search.php",
         data: {data: value},
         dataType: "html",
         success: function (response) {
           $('#tbody').html(response);
         }
       });
    } else { 
       // ("#tbody").html('no results');
       console.log('field vacio');
	};
};
$('#search').keyup(Search);

});

/* $(searchData());

function searchData(query) {
  var baseURL = "http://localhost/gestion_proyect/";
  $.ajax({
    type: 'post',
    url: baseURL + "login/search.php",
    data: {query: query},
    dataType: "html"
  })
  .done(function (response) { 
    console.log(response);
   }).fail(function () { 
     console.log('error');
    });
}

$(document).on('keyup', '#search' , function () {
  var value = $(this).val();
  if(value != ""){
    searchData(value);
    console.log(value);
    }else{
      searchData();
    }
  }); */