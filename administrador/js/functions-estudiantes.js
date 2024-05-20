$('#tableEstudiantes').DataTable();
var tableEstudiantes;

document.addEventListener('DOMContentLoaded',function(){
    tableEstudiantes = $('#tableEstudiantes').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": "./models/Estudiante/table_Estudiante.php",
            "dataSrc":""
        },
        "columns": [
            {"data":"acciones"},
            {"data":"Estudiante_id"},
            {"data":"nombre"},
            {"data":"direccion"},
            {"data":"cedula"},
            {"data":"telefono"},
            {"data":"correo"},
            {"data":"nivel_est"},
            {"data":"estado"}
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

    var formEstudiante = document.querySelector('#formEstudiante');
    formEstudiante.onsubmit = function(e) {
        e.preventDefault();

        var idEstudiante = document.querySelector('#idEstudiante').value;
        var nombre = document.querySelector('#nombre').value;
        var direccion = document.querySelector('#direccion').value;
        var cedula = document.querySelector('#cedula').value;
        var clave = document.querySelector('#clave').value;
        var telefono = document.querySelector('#telefono').value;
        var correo = document.querySelector('#correo').value;
        var nivel_est = document.querySelector('#nivel_est').value;
        var estado = document.querySelector('#listEstado').value;

        if(nombre == '' || direccion == '' || cedula == '' || telefono == '' || correo == '' || nivel_est == '') {
            swal('Atencion','Todos los campos son necesarios','error');
            return false;
        }

        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var url = './models/Estudiante/ajax-estudiante.php';
        var form = new FormData(formEstudiante);
        request.open('POST',url,true);
        request.send(form);
        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                var data = JSON.parse(request.responseText);
                if(data.status) {
                    $('#modalEstudiante').modal('hide');
                    formEstudiante.reset();
                    swal('Estudiante',data.msg,'success');
                    tableEstudiantes.ajax.reload();
                } else {
                    swal('Atencion',data.msg,'error');
                }
            }
        }
    }
})

function openModalPr() {
    document.querySelector('#idEstudiante').value = "";
    document.querySelector('#tituloModal').innerHTML = 'Nuevo Estudiante';
    document.querySelector('#action').innerHTML = 'Guardar';
    document.querySelector('#formEstudiante').reset();
    $('#modalEstudiante').modal('show');
}

function editarEstudiante(id) {
    var idEstudiante = id;

    document.querySelector('#tituloModal').innerHTML = 'Actualizar Estudiante';
    document.querySelector('#action').innerHTML = 'Actualizar';

    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var url = './models/Estudiante/edit-estudiante.php?idEstudiante='+idEstudiante;
        request.open('GET',url,true);
        request.send();
        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                var data = JSON.parse(request.responseText);
                if(data.status) {
                    document.querySelector('#idEstudiante').value = data.data.Estudiante_id;
                    document.querySelector('#nombre').value = data.data.nombre;
                    document.querySelector('#direccion').value = data.data.direccion;
                    document.querySelector('#cedula').value = data.data.cedula;
                    document.querySelector('#telefono').value = data.data.telefono;
                    document.querySelector('#correo').value = data.data.correo;
                    document.querySelector('#nivel_est').value = data.data.nivel_est;
                    document.querySelector('#listEstado').value = data.data.estado;

                    $('#modalEstudiante').modal('show');
                } else {
                    swal('Atencion',data.msg,'error');
                }
            }
        }
}

function eliminarEstudiante(id) {
    var idEstudiante = id;

    swal({
        title: "Eliminar estudiante",
        text: "Realmente desea eliminar al Estudiante?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, eliminar",
        cancelButtonText: "No, cancelar",
        closeOnConfirm: false,
        closeOnCancel: true
    },function(confirm){
        if(confirm) {
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var url = './models/Estudiante/delet-estudiante.php';
            request.open('POST',url,true);
            var strData = "idEstudiante="+idEstudiante;
            request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            request.send(strData);
            request.onreadystatechange = function() {
                if(request.readyState == 4 && request.status == 200) {
                    var data = JSON.parse(request.responseText);
                    if(data.status) {
                        swal('Eliminar',data.msg,'success');
                        tableEstudiantes.ajax.reload();
                    } else {
                        swal('Atencion',data.msg,'error');
                    }
                }
            }
        }
    })
}