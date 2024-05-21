$('#tableCursos').DataTable();
var tableCursos;

document.addEventListener('DOMContentLoaded', function() {
    tableCursos = $('#tableCursos').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": "./models/cursos/table_cursos.php",
            "dataSrc":""
        },
        "columns": [
            {"data":"acciones"},
            {"data":"cursos_id"}, // Corregido aquí
            {"data":"nombre"},
            {"data":"autor"},
            {"data":"imagen"},
            {"data":"video"},
            {"data":"categoria_id"},
            {"data":"nivel_id"},
            {"data":"estado"} // Corregido aquí
        ],         
        "dom": "lBfrtip",
        "buttons": [
            {
                "extend": "copyHtml5",
                "text": "<i class='far fa-copy'></i> Copiar",
                "titleAttr": "Copiar",
                "className": "btn btn-secondary"
            },{
                "extend": "excelHtml5",
                "text": "<i class='fas fa-file-excel'></i> Excel",
                "titleAttr": "Exportar a excel",
                "className": "btn btn-success"
            },{
                "extend": "pdfHtml5",
                "text": "<i class='fas fa-pdf'></i> PDF",
                "titleAttr": "Exportar a PDF",
                "className": "btn btn-danger",
                "exportOptions": {
                    "columns": [ 1, 2, 3, 4, 5, 6, 7, 8 ]
                }
            },{
                "extend": "csvHtml5",
                "text": "<i class='far fa-csv'></i> CSV",
                "titleAttr": "Exportar a CSV",
                "className": "btn btn-info"
            }
        ],
        "responsive": true,
        "bDestroy": true,
        "iDisplayLength": 10,
        "order": [[0,"asc"]]
    });

    var formCurso = document.querySelector('#formCurso');
    formCurso.onsubmit = function(e) {
        e.preventDefault();
    
        var cursos_id = document.querySelector('#cursos_id').value;
        var nombre = document.querySelector('#nombre').value;
        var autor = document.querySelector('#autor').value;
        var imagen = document.querySelector('#imagen').files[0];
        var video = document.querySelector('#video').files[0]; 
        var listCategoria = document.querySelector('#listCategoria').value;
        var listNivel = document.querySelector('#listNivel').value;
        var estado = document.querySelector('#listEstado').value; // Asegúrate de que este selector sea correcto
    
        if(nombre == '' || autor == '' || imagen == '' || video == '' || listCategoria == '' || listNivel == '' ) { // Agrega la validación para el campo estado
    
            swal('Atencion','Todos los campos son necesarios','error');
            return false;
        }

        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var url = './models/cursos/ajax-cursos.php';
        var form = new FormData(formCurso);
        request.open('POST',url,true);
        request.send(form);
        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                try {
                    var data = JSON.parse(request.responseText);
                    if(data.status) {
                        $('#modalCurso').modal('hide');
                        formCurso.reset();
                        swal('Cursos',data.msg,'success');
                        tableCursos.ajax.reload();
                    } else {
                        swal('Atencion',data.msg,'error');
                        console.error("Error parsing JSON:", request.responseText);
                    }
                } catch(error) {
                    console.error("Error parsing JSON:", error);
                }
            }
        }
        
        
    }
})


function openModalCurs() {
    document.querySelector('#cursos_id').value = "";
    document.querySelector('#tituloModal').innerHTML = 'Nuevo curs';
    document.querySelector('#action').innerHTML = 'Guardar';
    document.querySelector('#formCurso').reset();
    $('#modalCurso').modal('show');
}

function editarCurso(idCurso) {
    var idCursoActual = idCurso;

    document.querySelector('#tituloModal').innerHTML = 'Actualizar Curso';
    document.querySelector('#action').innerHTML = 'Actualizar';

    var request = (window.XMLHttpRequest)? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var url = './models/cursos/edit-curso.php?idCurso=' + idCursoActual;
    request.open('GET', url, true);
    request.send();
    request.onreadystatechange = function() {
        if(request.readyState == 4 && request.status == 200) {
            var data = JSON.parse(request.responseText);
            if(data.status) {
                document.querySelector('#cursos_id').value = data.data.cursos_id;
                document.querySelector('#nombre').value = data.data.nombre;
                document.querySelector('#autor').value = data.data.autor;
                document.querySelector('#imagen').value = ''; // Asumiendo que quieres resetear el input de imagen
                document.querySelector('#video').value = ''; // Asumiendo que quieres resetear el input de video
                document.querySelector('#listCategoria').value = data.data.categoria_id;
                document.querySelector('#listNivel').value = data.data.nivel_id;
                document.querySelector('#listEstado').value = data.data.estado;

                $('#modalCurso').modal('show');
            } else {
                swal('Atención', data.msg, 'error');
            }
        }
    }
}

function eliminarCurso(idCurso) {
    var idCursoActual = idCurso;

    swal({
        title: "Eliminar curso",
        text: "¿Realmente desea eliminar el curso?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "No, cancelar",
        closeOnConfirm: false,
        closeOnCancel: true
    }, function(confirm) {
        if(confirm) {
            var request = (window.XMLHttpRequest)? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var url = './models/cursos/delete-curso.php'; // Asegúrate de que esta URL es correcta
            request.open('POST', url, true);
            var strData = "idCurso=" + idCursoActual;
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send(strData);
            request.onreadystatechange = function() {
                if(request.readyState == 4 && request.status == 200) {
                    var data = JSON.parse(request.responseText);
                    if(data.status) {
                        swal('Eliminar', data.msg, 'success');
                        tableCursos.ajax.reload(); // Recarga la tabla después de eliminar
                    } else {
                        swal('Atención', data.msg, 'error');
                    }
                }
            }
        }
    });
}

