$(function(){
    $(".btn-color").on('click', function(){
        var formulario=document.add_form;

        if($('#nombres').val() != ""){
            if($('#correo').val() != ""){
                if($('#celular').val() != ""){
                    if($('#asunto').val() != ""){
                        if($('#comentario').val() != ""){
                            formulario.submit();
                        }else{
                        Swal.fire({
                        icon: 'warning',
                        title: 'Error',
                        text: 'No ha ingresado el comentario',
                        });
                        $('#comentario').focus().addClass("is-invalid");
                    }
                    }else{
                    Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'No ha ingresado el asunto del correo',
                    });
                    $('#asunto').focus().addClass("is-invalid");
                }
                    
                }else{
                Swal.fire({
                icon: 'warning',
                title: 'Error',
                text: 'No ha ingresado el número de celular',
                });
                $('celular').focus().addClass("is-invalid");
            }

            }else{
                Swal.fire({
                icon: 'warning',
                title: 'Error',
                text: 'No ha ingresado el correo',
                });
                $('#correo').focus().addClass("is-invalid");
            }

        }else {
            Swal.fire({
            icon: 'warning',
            title: 'Error',
            text: 'No ha ingresado el nombre',
            });
            $('#nombres').focus().addClass("is-invalid");
        }

    });
});