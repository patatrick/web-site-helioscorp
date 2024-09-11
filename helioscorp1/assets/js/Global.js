function Object_Empty(obj){
     return (JSON.stringify(obj)=='{}') ? true : false;
}
function Format_Int(number){
    number = number.toString().replace('.', ',');
    number = number.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
    number = number.split('').reverse().join('').replace(/^[\.]/,'');
    return number.replace(',.', ',');
}
function No_Format(number) {
    return number.toString().replace(/\./g, '').replace(',', '.');
}
function trunc(x, posiciones) {
    posiciones = (posiciones) ? posiciones : 0;
    var s = x.toString()
    var l = s.length
    var decimalLength = s.indexOf('.') + 1
    var numStr = s.substr(0, decimalLength + posiciones)
    return (decimalLength) ? Number(numStr) : Number(x);
}
// Z-index
var z_max = 16777271;
function Indicador(indicador, callback) {
    Loading();
    $.ajax({url: 'https://mindicador.cl/api/',type: 'GET'})
    .done(function(json_api) {
        switch (indicador) {
            case 'bitcoin':
                callback(json_api.bitcoin);
            break;
            case 'dolar':
                callback(json_api.dolar);
            break;
            case 'dolar_intercambio':
                callback(json_api.dolar_intercambio);
            break;
            case 'euro':
                callback(json_api.euro);
            break;
            case 'fecha':
                callback(json_api.fecha);
            break;
            case 'imacec':
                callback(json_api.imacec);
            break;
            case 'ipc':
                callback(json_api.ipc);
            break;
            case 'ivp':
                callback(json_api.ivp);
            break;
            case 'libra_cobre':
                callback(json_api.libra_cobre);
            break;
            case 'tasa_desempleo':
                callback(json_api.tasa_desempleo);
            break;
            case 'tpm':
                callback(json_api.tpm);
            break;
            case 'uf':
                callback(json_api.uf);
            break;
            case 'utm':
                callback(json_api.utm);
            break;
            default:
                console.log('Indicador desconocido');
                callback(false);
            break;
        }
    })
    .fail(function(e) {
        console.log('Falló comunicación con API');
        console.log(e);
        callback(false);
        return false;
    })
    .always(function(){
        $.unblockUI();
    });
}
function Loading(){
    $.blockUI({ 
        message: '<div id="load"><img src="assets/images/loader.gif" width="60px height="60px" /></div>',
        fadeIn: 700, 
        fadeOut: 700,
        showOverlay: false,
        css: {
            border: 'none', 
            padding: '5px',
            width: '100%',
            top: 0,
            bottom: 0,
            right: 0,
            left: 0,
            zIndex: z_max,
            backgroundColor: '#fff',
            '-webkit-border-radius': '10px', 
            '-moz-border-radius': '10px', 
            opacity: .7, 
            color: '#fff'
        }
    });
    /// Stop: $.unblockUI();
}
function ArchivoAdmitido(filename){
    ext = filename.split('.').pop().toLowerCase();
    if (ext == 'jpg' || ext == 'jpeg' || ext == 'png' || ext == 'gif' || ext == 'bmp') {
        return true;
    }
    else{
      return false;
    }
}
function AddJson(json, other) {
    return $.extend({}, json, other);  
}
function Enviar_Solicitud(objeto, metodo, output) {
    Loading();
    $.ajax({
        url: 'modelo.php',
        type: 'POST',
        data: AddJson(objeto, {'Metodo' : metodo})
    })
    .done(function(data) {
        try {
            data = JSON.parse(data);
            output(data);
        } catch(e) {
            console.log(e);
            console.log(data);
        }
    })
    .always(function(){
        $.unblockUI();
    })
}
function Convert_Base64(data, output) {
    if (!data) { output(false); return false; };
    var reader  = new FileReader();
    reader.onloadend = function () {
        output(reader.result);
    }
    reader.readAsDataURL(data);
}
// Modals
function Modal(lugar, url, output) {
    $.ajax({url: 'MODALS/'+url, type: 'GET', dataType: 'HTML'
    })
    .done(function(HTML){
        $('#MODAL #' + lugar).html(HTML);
        $('.modal').css('padding-right', 0);
        output();
    }).always(function(){
    });
}


function Ir_A(id) {
  document.querySelector(id).scrollIntoView({behavior: 'smooth'});
}
function InicializarDataTable(idTabla, obj, columns, callback, orden){
    orden = (orden) ? false : true;
    var menu = (orden) ? [[10, 25, 50, 100], [10, 25, 50, 100]] : [[4, 8, 16, 32], [4, 8, 16, 32]];
    $(idTabla).DataTable().destroy();
    $(idTabla).DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty": "Mostrando 0 to 0 of 0 registros",
            "infoFiltered": "(Filtrado de _MAX_ total registros)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar registros _MENU_",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "No se encontraron resultados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        lengthMenu: menu,
        data : obj,
        columns: columns,
        order: [],
        ordering: orden,
        createdRow: function(row, data, dataIndex) {
            $(row).attr('id', data.id);
            if (!orden) {
                $(row).on('click', function() {
                    Ver_Propiedad(this.id);
                });
            }
        },
        drawCallback: function(){
            Pagination()
            if (callback) {
                callback();
            };
        }
    });
    function Pagination(){
        $($('.pagination')[0].firstChild).find('a').addClass('fas fa-caret-left');
        $($('.pagination')[0].firstChild).find('a').css('line-height', 0.97);
        $($('.pagination')[0].firstChild).find('a').html('');
        $($('.pagination')[0].lastChild).find('a').addClass('fas fa-caret-right');
        $($('.pagination')[0].lastChild).find('a').css('line-height', 0.97);
        $($('.pagination')[0].lastChild).find('a').html('');
    }
    $('.dataTables_filter').addClass('float-right');
    $($('.dataTables_length')[0].parentNode).removeClass();
    $($('.dataTables_length')[0].parentNode).addClass('col-6');
    $($('.dataTables_filter')[0].parentNode).removeClass();
    $($('.dataTables_filter')[0].parentNode).addClass('col-6');
    $($('.dataTables_wrapper')[0].lastChild.lastChild).removeClass('col-md-7');
    $('.dataTables_empty').attr('colspan', 2)
}
function SerializeForm(form){
    var json = '';
    form = (form) ? form : 'form';
    $(form).find('input').each(function(i, val) {
        if (this.type == 'checkbox' || this.type == 'radio') {
            if (this.checked) {
                json += '"'+this.name+'":"'+ this.value +'",';
            };
        }
        else{
            if (this.name && this.type != 'file') {
                json += '"'+this.name+'":"'+this.value+'",';
            }
        }
    });
    $(form).find('select').each(function(i, val) {
      if (this.name) {
        json += '"'+this.name+'":"'+this.value+'",';
      };
    });
    $(form).find('textarea').each(function(i, val) {
      if (this.name) {
        json += '"'+this.name+'":"'+this.value.replace(/\n/gi, "<br/>")+'",';
      };
    });
    json = '{'+json.substr(0,json.length-1)+'}';
    return JSON.parse(json);
}
function basename(str) {
    return (str) ? str.substr(str.lastIndexOf('/') + 1) : 'Sin imagen';
}

function Validar_File(input){
    input = (input) ? input : 'input[type="file"]';
    $(input).each(function(index, val) {
        $(val).on('change', function(event) {
            if (val.files.length) {
                val.nextElementSibling.innerHTML = val.files[0].name.substr(0, 28);
                if (!ArchivoAdmitido(val.files[0].name)) {
                    Alert('error', '', 'Archivo no permitido.');
                    val.value = '';
                    val.nextElementSibling.innerHTML = 'No ha seleccionado imagen';
                }
            }
            else{
                val.nextElementSibling.innerHTML = 'No ha seleccionado imagen';
            }
        });
    });
}
function MaxLenght(element, max){
    var  max_chars = max;
    $(element).keydown( function(e){
        if ($(this).val().length >= max_chars) { 
            $(this).val($(this).val().substr(0, max_chars));
        }
    });
    $(element).keyup( function(e){
        if ($(this).val().length >= max_chars) { 
            $(this).val($(this).val().substr(0, max_chars));
        }
    });
}
function Combo(mode, id, callback) {
    Enviar_Solicitud({"mode" : mode, "id" : id}, 'COMBO', function(Json){
        if (Json.Code == 200) {
            var option = '<option value="">Seleccione</option>';
            $.each(Json.Data, function(i, val) {
                 option += '<option value="'+ val.id +'">'+ val.nombre + '</option>'
            });
            callback(option);
        }
    });
}
function e(str) {
    return (str && str != 'null, ') ? str : '';
}