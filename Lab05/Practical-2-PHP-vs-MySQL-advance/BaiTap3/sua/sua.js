$(function () {

    $(document).on('click', '#btn-add', function (e) {
        var tensua = $('#tensua').val();
        var hangsua = $('#hangsua').val();
        var loaisua = $('#loaisua').val();
        var trongluong = $('#trongluong').val();
        var dongia = $('#dongia').val();
        var file_data = $('.fileToUpLoad').prop('files')[0];

        var form_data = new FormData();
        form_data.append("tensua", tensua);
        form_data.append("hangsua", hangsua);
        form_data.append("loaisua", loaisua);
        form_data.append("trongluong", trongluong);
        form_data.append("dongia", dongia);
        form_data.append("file", file_data);


        $.ajax({
            url: "../sua/add.php",
            type: "post",
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function (dataResult) {

                if (dataResult.statusCode == 200) {
                    $('#addEmployeeModal').modal('hide');
                    alert('Data added successfully !');
                    location.reload();
                } else if (dataResult.statusCode == 201) {
                    alert(dataResult);
                }
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                console.log(msg);
            },
        });
    });

    $(document).on('click', '.update', function (e) {

        var id = $(this).data('id');
        var tensua = $(this).data("tensua");
        var hangsua = $(this).data("hangsua");
        var loaisua = $(this).data("loaisua");
        var trongluong = $(this).data("trongluong");
        var dongia = $(this).data("dongia");
        var feature_path = $(this).data("feature_path");

        $('#id_u').val(id);
        $('#tensua_u').val(tensua);
        $('#hangsua_u').val(hangsua);
        $('#loaisua_u').val(loaisua);
        $('#trongluong_u').val(trongluong);
        $('#dongia_u').val(dongia);
        $('#feature_path_u').attr("src", feature_path);
    });

    $(document).on('click', '#update', function (e) {
        e.preventDefault();
        var id = $('#id_u').val();
        var tensua = $('#tensua_u').val();
        var hangsua = $('#hangsua_u').val();
        var loaisua = $('#loaisua_u').val();
        var trongluong = $('#trongluong_u').val();
        var dongia = $('#dongia_u').val();
        var file_data = $('.fileToUpLoad_u').prop('files')[0];

        var form_data = new FormData();
        form_data.append("id", id);
        form_data.append("tensua", tensua);
        form_data.append("hangsua", hangsua);
        form_data.append("loaisua", loaisua);
        form_data.append("trongluong", trongluong);
        form_data.append("dongia", dongia);
        form_data.append("file", file_data);


        // console.log(formData);
        $.ajax({
            url: "../sua/edit.php",
            type: "post",
            dataType: "json",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function (dataResult) {
                if (dataResult.statusCode == 200) {

                    $('#editEmployeeModal').modal('hide');
                    alert('Data updated successfully !');
                    location.reload();
                } else if (dataResult.statusCode == 201) {
                    alert(dataResult);
                }
            }
        });
    });
    $(document).on("click", ".delete", function () {
        console.log('is click');
        var id = $(this).attr("data-id");
        $('#id_d').val(id);

    });

    $(document).on("click", "#delete", function () {

        $.ajax({
            url: "../sua/delete.php",
            type: "POST",
            cache: false,
            data: {
                type: 3,
                id: $("#id_d").val()
            },
            success: function (dataResult) {
                $('#deleteEmployeeModal').modal('hide');
                location.reload();

            }
        });
    });
});

