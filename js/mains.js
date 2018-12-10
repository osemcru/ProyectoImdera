
jQuery(document).on('submit','#formLg',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'../DAO/proceso.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  $('.botonlg').val('Validando....');
                }
              })
              .done(function(respuesta){
                console.log(respuesta);
                if (!respuesta.error) {
                  if ((respuesta.tipo=='Promotor') || (respuesta.tipo=='promotor')){
                     location='index.php';
                  }else if ((respuesta.tipo=='Coordinador') || (respuesta.tipo=='coordinador')) {
                   location='index.php';
                  }else if((respuesta.tipo=='Administrador') || (respuesta.tipo=='administrador')){
                     location='index.php'; 
                  }
                }else {
                  $('.error').slideDown('slow');
                  setTimeout(function(){
                  $('.error').slideUp('slow');
                },3000);
                $('.botonlg').val('Iniciar Sesion');
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
