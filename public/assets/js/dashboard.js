$('#summernote').summernote({

    tabsize: 2,
    width:800,
    height: 250,
    disableResizeEditor:true,

    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link','picture']]
    ]
});


$(document).ready(function(){
    //Crear - Nuevo script para guardar datos en cualquier formulario

    //Eliminar
    $("tr td #eliminar").click(function (ev) {
        ev.preventDefault();
        var id = $(this).attr('data-id');
        var self = this;
        Swal.fire({
            title:'Eliminar',
            text:'Desea eliminar esta noticia',
            icon:'warning',
            showCancelButton:   true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si'
        }).then((result)=>{

                if (result.value)
                {
                    $.ajax({
                        type:"GET",
                        url:"/admin/blog/eliminar/"+id,
                        success:function () {
                            $(self).parents('tr').remove();
                            Swal.fire(
                                'Borrado',
                                'La noticia ha sido eliminada',
                                'success'
                            )
                        },statusCode: {
                            400:function(data){
                                var json = JSON.parse(data.responseText);
                                Swal.fire(
                                    'Error',
                                    json.msg,
                                    'error'
                                )
                            }
                        }
                    });
                }else {
                    console.log("No Borrado");
                }
            }
        );
    });

    //Eliminar Voluntario

    $("tr td #eliminarvoluntario").click(function (ev) {
        ev.preventDefault();
        var id = $(this).attr('data-id');
        var self = this;

        Swal.fire({
            title:'Eliminar',
            text:'Desea eliminar esta noticia',
            icon:'warning',
            showCancelButton:   true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si'
        }).then((result)=>{

                if (result.value)
                {
                    $.ajax({
                        type:"GET",
                        url:"/admin/voluntario/eliminar/"+id,
                        success:function () {
                            $(self).parents('tr').remove();
                            Swal.fire(
                                'Borrado',
                                'La noticia ha sido eliminada',
                                'success'
                            )
                        },statusCode: {
                            400:function(data){
                                var json = JSON.parse(data.responseText);
                                Swal.fire(
                                    'Error',
                                    json.msg,
                                    'error'
                                )
                            }
                        }
                    });
                }else {
                    console.log("No Borrado");
                }
            }
        );
    });

    //Vista previa fotos
    //Obtener datos del formulario Agregar Categoria modalNuevo
    $("#guardarCategoria").click(function(){

        let nombre = $("#nombre").val();
        let description = $("#descripcion").val();
        let condicion = $("#condicion").val();
        $.ajax({
            type:"GET",
            data:{nombre:nombre, description:description,condicion:condicion},
            dataType:'text',
            url:"/admin/categoria/index",
        }).done(function(data){
            alert(data);
        })
    })
});


/* Data Insert Ends Here */


