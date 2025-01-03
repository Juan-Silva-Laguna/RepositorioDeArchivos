$(document).ready(function(){      
    $('#formLogin').submit(function (e) {
        e.preventDefault();
        let datos = {
                correo: $('#correo').val(),
                pass: $('#pass').val(),
                operacion: 'Ingresar'
            };
        
        $.post('../Controlador/login.controlador.php', datos, function (respuesta) {
            switch (JSON.parse(respuesta)) {
                case 'aprendiz':
                    window.location.href = "Aprendiz/proyectos.php";                
                    break;
                case 'instructor':
                    window.location.href = "Instructor/fichasAsignadas.php";
                    break;
                case 'admin':
                    window.location.href = "Admin/ficha.php";
                    break;
                default:
                    alert(respuesta);
                    $('#correo').val('');
                    $('#pass').val('');
                    break;
            }
        });
    });
    
    $('#formCambiar').submit(function (e) {
        e.preventDefault();
        if ($('#passAntigua').val() != '' && $('#passNueva').val() != '') {
            let datos = {
                id: $('#idUser').val(),
                antigua: $('#passAntigua').val(),
                nueva: $('#passNueva').val(),
                operacion: 'Cambiar'
            };
        
            $.post('../../Controlador/login.controlador.php', datos, function (respuesta) {
                alert(respuesta);
            });
        }
        else{
            alert('Ambos campos son obligatorios');
        }
        $('#exampleModal').modal('hide');
     
    });

    
});