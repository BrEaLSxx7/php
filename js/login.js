$(document).ready(function(){
  $("#iniciar").click(function(){
    var email = $("#defaultForm-email").val();
    var contrasena = $("#defaultForm-pass").val();
    //console.log(email,contrasena);
    $.ajax({
      method: "POST",
      dataType: 'json',
      url: "includes/LoginAjax.php",
      data: {email,contrasena},
      // success: function (response){
      //   if(response.respuesta===true){
      //     $('#mensaje').html(response.mensaje);
      //     window.location='principal.php';
      //   }else{
      //     $('#mensaje').html(response.mensaje);
      //   }
      // }
    }, (reponse) => {
      if (response.respuesta === true) {
        $('#mensaje').html(response.mensaje);
          window.location='principal.php';
        }else{
          $('#mensaje').html(response.mensaje);
        }
    }, (error) => console.error(error));
  });
});