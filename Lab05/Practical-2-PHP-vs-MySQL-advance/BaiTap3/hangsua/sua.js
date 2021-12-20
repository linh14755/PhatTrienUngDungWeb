$(function () {
    $(document).on('click', '#btn-add', function (e) {
        var data = $("#user_form").serialize();
        $.ajax({
            data: data,
            type: "post",
            url: "../hangsua/add.php",
            success: function (dataResult) {
                var dataResult = JSON.parse(dataResult);
                if (dataResult.statusCode == 200) {
                    $('#addEmployeeModal').modal('hide');
                    alert('Data added successfully !');
                    location.reload();
                } else if (dataResult.statusCode == 201) {
                    alert(dataResult);
                }
            }
        });
    });

    $(document).on('click', '.update', function (e) {

        var mahs = $(this).data('mahs');
        var tenhs = $(this).data("tenhs");
        var diachi = $(this).data("diachi");
        var dienthoai = $(this).data("dienthoai");
        var email = $(this).data("email");

        $('#mahs_u').val(mahs);
        $('#tenhs_u').val(tenhs);
        $('#diachi_u').val(diachi);
        $('#dienthoai_u').val(dienthoai);
        $('#email_u').val(email);
    });

    $(document).on('click', '#update', function (e) {
        event.preventDefault();
        var data = $("#update_form").serialize();


        $.ajax({
            data: data,
            type: "post",
            url: "../hangsua/edit.php",
            success: function (dataResult) {
                var dataResult = JSON.parse(dataResult);
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
        var mahs = $(this).attr("data-mahs");
        $('#mahs_d').val(mahs);
    });

    $(document).on("click", "#delete", function () {

        $.ajax({
            url: "../hangsua/delete.php",
            type: "POST",
            cache: false,
            data: {
                type: 3,
                mahs: $("#mahs_d").val()
            },
            success: function (dataResult) {
                $('#deleteEmployeeModal').modal('hide');
                location.reload();

            }
        });
    });
});

