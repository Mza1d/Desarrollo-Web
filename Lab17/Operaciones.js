$(document).ready(function(){
	console.log('Cargado...');
	leer();
	
	var formu = $('#enviar');
	
	formu.submit(function(e){
		e.preventDefault();
		$.ajax({
			type:formu.attr('method'),
            url: 'http://localhost/sis256/Lab17/Insertar.php?operacion=n',
			data: formu.serialize(),
			success: function(respuesta){
				console.log(respuesta);
				window.location.href='http://localhost/sis256/Lab17/Listar.php';
			},
			error:function(){
				console.log('Error al introducir datos');
			}
		});
	});
});

function leer(){
	console.log('Leer');
	$.ajax({
		url: 'http://localhost/sis256/Lab17/Insertar.php?operacion=r',
		success: function(respuesta){
            $('#datos').append('<h2 style="color: red; text-align:center;">DATOS DEL CLIENTE <br><h2>');
            $('#datos').append('<p style="color: blue;">');
			for(var i=0;i<respuesta.length;i++){
				var el = respuesta[i];
				$('#datos').append('<p style="margin-left:50px;">Ci: '+el.Ci+'<br>'+
                                    'Apellidos: '+el.Apellidos+'<br>'+
									'Nombres: '+el.Nombres+'<br>'+
									'Direccion: '+el.Direccion+'<br>'+
									'Celular: '+el.Celular+'<br>'+
                                    'Email: '+el.Email+'<br><br></p>');
			}
		},
		error:function(){
			console.log('Ocurrio un error');
		}
	});
}