$('#formConfirm').submit(function () {
    //alert($(this).serialize());
    $.ajax({
        type: 'POST',
        url: '../Peticiones/inicioETL.php',
        data: $(this).serialize(),
        // Mostramos un mensaje con la respuesta de PHP
        success: function (data) {
            if (data == 'ETL Iniciado Correctamente') {
                alertify.success(data);
                $('#exampleModal').modal('hide');
                $('#user1').val('');
                $('#password1').val('');
                $('#btn').load(" #btn");
                document.location.href = '../Partials/Tables/mandar_datos_sql.php';
            } else {
                alertify.error(data);
                $('#user1').val('');
                $('#password1').val('');
                $('#user1').focus();
            }
        }
    });
    return false;
});

$('#formReset').submit(function () {
    //alert($(this).serialize());
    $.ajax({
        type: 'POST',
        url: '../Peticiones/inicioETL.php',
        data: $(this).serialize(),
        // Mostramos un mensaje con la respuesta de PHP
        success: function (data) {
            if (data == 'ETL Iniciado Correctamente') {
                alertify.success(data);
                $('#resetModal').modal('hide');
                $('#user2').val('');
                $('#password2').val('');
                $('#btn').load(" #btn");
                document.location.href = '../Partials/Tables/mandar_datos_sql.php';

            } else {
                alertify.error(data);
                $('#user2').val('');
                $('#password2').val('');
                $('#user2').focus();
            }
        }
    });
    return false;
});
