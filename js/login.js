$(document).ready(function(){
    $('#loginUsuario').on('click',function(){
        loginUsuario();
    });
    $('#loginEstudiante').on('click',function(){
        loginEstudiante();
    });
})

function loginUsuario() {
    var login = $('#usuario').val();
    var pass = $('#pass').val();

    $.ajax({
        url: './includes/loginUsuario.php',
        method: 'POST',
        data: {
            login:login,
            pass:pass
        },
        success: function(data) {
            $('#messageUsuario').html(data);

            if(data.indexOf('Redirecting') >= 0) {
                window.location = 'administrador/';
            }
        }
    })
}

function loginEstudiante() {
    var loginEstudiante = $('#usuarioEstudiante').val();
    var passEstudiante = $('#passEstudiante').val();

    $.ajax({
        url: './includes/loginEstudiante.php',
        method: 'POST',
        data: {
            loginEstudiante:loginEstudiante,
            passEstudiante:passEstudiante
        },
        success: function(data) {
            $('#messageEstudiante').html(data);

            if(data.indexOf('Redirecting') >= 0) {
                window.location = 'estudiante/';
            }
        }
    })
}