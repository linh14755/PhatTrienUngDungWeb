$(function () {
    $(document).on('click', '#btn-add', function (e) {
        var data = $("#user_form").serialize();
        $.ajax({
            data: data,
            type: "post",
            url: "../khachhang/add.php",
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

        var makh = $(this).data('makh');
        var tenkh = $(this).data("tenkh");
        var gioitinh = $(this).data("gioitinh");
        var dienthoai = $(this).data("dienthoai");
        var diachi = $(this).data("diachi");


        $('#makh_u').val(makh);
        $('#tenkh_u').val(tenkh);
        $('#gioitinh_u').val(gioitinh);
        $('#dienthoai_u').val(dienthoai);
        $('#diachi_u').val(diachi);
    });

    $(document).on('click', '#update', function (e) {
        event.preventDefault();
        var data = $("#update_form").serialize();


        $.ajax({
            data: data,
            type: "post",
            url: "../khachhang/edit.php",
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
        var makh = $(this).attr("data-makh");
        $('#makh_d').val(makh);

    });

    $(document).on("click", "#delete", function () {

        $.ajax({
            url: "../khachhang/delete.php",
            type: "POST",
            cache: false,
            data: {
                type: 3,
                makh: $("#makh_d").val()
            },
            success: function (dataResult) {
                $('#deleteEmployeeModal').modal('hide');
                location.reload();

            }
        });
    });
});

