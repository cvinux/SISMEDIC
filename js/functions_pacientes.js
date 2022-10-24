var tablePacientes;
//var divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function(){
tablePacientes = $('#tablePacientes').dataTable( {
		"aProcessing":true,
		"aServerSide":true,
        "language": {
        	"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Pacientes/getPacientes",
            "dataSrc":""
        },
        "columns":[
            {"data":"idpaciente"},
            {"data":"nrodocumento"},
            {"data":"nombres"},
            {"data":"apellidopaterno"},
            {"data":"apellidomaterno"},
            {"data":"empresa"},
            {"data":"turno"},
            {"data":"status"},
            {"data":"options"}
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"asc"]]  
    }); 


    if(document.querySelector("#formPaciente")){
            let formUsuario = document.querySelector("#formPaciente");
            formUsuario.onsubmit = function(e) {
                e.preventDefault();             
               
                let strNombre = document.querySelector('#txtNombre').value;
                let strApellidoPaterno = document.querySelector('#txtApellidoPaterno').value;
                let strApellidoMaterno = document.querySelector('#txtApellidoMaterno').value;
                let strNroDocumento = document.querySelector('#txtNroDocumento').value;
                let strFechaNacimiento = document.querySelector('#dtpFechaNacimiento').value;
                let intNroPaseMedico = document.querySelector('#txtNroPaseMedico').value;
                let strFechaPruebaCovid = document.querySelector('#dtpFechaPruebaCovid').value;
                let intCboEmpresa = document.querySelector('#cboEmpresa').value;
                let intCboPuesto= document.querySelector('#cboPuesto').value;
                let intCboTurno = document.querySelector('#cboTurno').value;
                let intCboDiasTurno = document.querySelector('#cboDiasTurno').value;
                let intCboGrupoSanguineo = document.querySelector('#cboGrupoSanguineo').value;
                

                if(strNroDocumento == '' || strApellidoPaterno == ''  || strApellidoMaterno == '' || strNombre == '' || strFechaNacimiento == '' || intNroPaseMedico == '' || strFechaPruebaCovid == '' 
                 || intCboEmpresa == '' || intCboPuesto == ''  || intCboTurno == '' || intCboDiasTurno == '' || intCboGrupoSanguineo == '')
                {
                    Swal.fire("Atención", "Todos los campos son obligatorios." , "error");
                    return false;
                }

                let elementsValid = document.getElementsByClassName("valid");
                for (let i = 0; i < elementsValid.length; i++) { 
                    if(elementsValid[i].classList.contains('is-invalid')) { 
                        Swal.fire("Atención", "Por favor verifique los campos en rojo." , "error");
                        return false;
                    } 
                } 

                let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                let ajaxUrl = base_url+'/Pacientes/setPaciente'; 
                let formData = new FormData(formUsuario);
                request.open("POST",ajaxUrl,true);
                request.send(formData);
                request.onreadystatechange = function(){
                    if(request.readyState == 4 && request.status == 200){
                        let objData = JSON.parse(request.responseText);
                        if(objData.status)
                        {                            
                            formUsuario.reset();
                            Swal.fire("Pacientes", objData.msg ,"success");
                        }else{
                            Swal.fire("Error", objData.msg , "error");
                        }
                    }
                    //divLoading.style.display = "none";
                    return false;
                }
            }
        }

});

$('#tablePacientes').DataTable();

function openModal(){

    document.querySelector('#idRol').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Rol";
    document.querySelector("#formRol").reset();
	$('#modalFormRol').modal('show');
}

window.addEventListener('load', function() {
    /*fntEditRol();
    fntDelRol();
    fntPermisos();*/
}, false);

function fntEditPaciente(idpaciente){
    document.querySelector('#titleModal').innerHTML ="Actualizar Rol";
    document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
    document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
    document.querySelector('#btnText').innerHTML ="Actualizar";

    var idrol = idrol;
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl  = base_url+'/Pacientes/getPaciente/'+idpaciente;
    request.open("GET",ajaxUrl ,true);
    request.send();

    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            
            var objData = JSON.parse(request.responseText);
            if(objData.status)
            {
                document.querySelector("#idRol").value = objData.data.idrol;
                document.querySelector("#txtNombre").value = objData.data.rol;
                document.querySelector("#txtDescripcion").value = objData.data.descripcion;

                if(objData.data.status == 1)
                {
                    var optionSelect = '<option value="1" selected class="notBlock">Activo</option>';
                }else{
                    var optionSelect = '<option value="2" selected class="notBlock">Inactivo</option>';
                }
                var htmlSelect = `${optionSelect}
                                  <option value="1">Activo</option>
                                  <option value="2">Inactivo</option>
                                `;
                document.querySelector("#listStatus").innerHTML = htmlSelect;
                $('#modalFormRol').modal('show');
            }else{
                Swal.fire("Error", objData.msg , "error");
            }
        }
    }

}

function fntDelPaciente(idpaciente){
    var idpaciente = idpaciente;
    Swal.fire({
        title: "Eliminar Paciente",
        text: "¿Realmente quiere eliminar el Paciente?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, eliminar!",
        cancelButtonText: "No, cancelar!"
     }).then((result)=> {
        
        if (result.isConfirmed) 
        {
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Pacientes/delPaciente/';
            var strData = "idpaciente="+idpaciente;
            request.open("POST",ajaxUrl,true);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send(strData);
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        Swal.fire("Eliminar!", objData.msg , "success");
                        tablePacientes.api().ajax.reload();
                    }else{
                        Swal.fire("Atención!", objData.msg , "error"); 
                    }
                }
            }
        }

    });
}
 