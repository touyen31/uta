$(document).ready(function() {
    delete_product();
    edit_product();
    create_product();
    $($("input")[0]).focus();
})

var delete_product = function() {
    $(".delete-item").on("click", function(e) {
        var r = confirm("Bạn có muốn xoá!");
        if (r == true) {
            $(e.currentTarget).html('<div class="sk-circle"><div class="sk-circle1 sk-child"></div><div class="sk-circle2 sk-child"></div><div class="sk-circle3 sk-child"></div><div class="sk-circle4 sk-child"></div><div class="sk-circle5 sk-child"></div><div class="sk-circle6 sk-child"></div><div class="sk-circle7 sk-child"></div><div class="sk-circle8 sk-child"></div><div class="sk-circle9 sk-child"></div><div class="sk-circle10 sk-child"></div><div class="sk-circle11 sk-child"></div><div class="sk-circle12 sk-child"></div></div>');
            var ids = $(e.currentTarget).parent().parent().attr("id");
            axios.post('/api/product/delete', { id: ids })
                .then(function(response) {
                    console.log(response.data);
                    if (response.data) {
                        $(e.currentTarget).parent().parent().hide(1000);
                    } else {
                        alert("Có lỗi xảy ra! Hãy thử lại!");
                    }
                }).catch(function(error) {
                alert("Có lỗi xảy ra! Hãy thử lại!");
            });
        } else {

        }

    });
}

var edit_product = function() {
    $(".edit-btn-submit").on("click", function(e) {
        var temp = $(e.currentTarget).html();
        $(e.currentTarget).css({
            "background": "#fff"
        }).html('<div class="sk-circle"><div class="sk-circle1 sk-child"></div><div class="sk-circle2 sk-child"></div><div class="sk-circle3 sk-child"></div><div class="sk-circle4 sk-child"></div><div class="sk-circle5 sk-child"></div><div class="sk-circle6 sk-child"></div><div class="sk-circle7 sk-child"></div><div class="sk-circle8 sk-child"></div><div class="sk-circle9 sk-child"></div><div class="sk-circle10 sk-child"></div><div class="sk-circle11 sk-child"></div><div class="sk-circle12 sk-child"></div></div>');
        var data = {
            id: $(".edit-id").val(),
            MaDienThoai: $(".edit-MaDienThoai").val(),
            TenDienThoai: $(".edit-TenDienThoai").val(),
            HangSX: $(".edit-HangSX").val(),
            SoLuongConLai: $(".edit-SoLuongConLai").val(),
            GiaBan: $(".edit-GiaBan").val(),
            ManHinh: $(".edit-ManHinh").val(),
            HeDieuHanh: $(".edit-HeDieuHanh").val(),
            CameraTruoc: $(".edit-CameraTruoc").val(),
            CameraSau: $(".edit-CameraSau").val(),
            RAM: $(".edit-RAM").val(),
            ROM: $(".edit-ROM").val(),
            CPU: $(".edit-CPU").val(),
            Pin: $(".edit-Pin").val(),
            Khac: $(".edit-Khac").val(),
            MoTa: $(".edit-MoTa").val(),
        };
        axios.post('/api/product/edit', data)
            .then(function(response) {
                if (response.data) {
                    window.location.href = "/product/view/" + $(".edit-id").val();
                } else {
                    alert("Có lỗi xảy ra! Hãy thử lại!");
                    $(e.currentTarget).html(temp).css({
                        "background": "#005c9e"
                    });
                }
            }).catch(function(error) {
                alert("Có lỗi xảy ra! Hãy thử lại!");
                $(e.currentTarget).html(temp).css({
                    "background": "#005c9e"
                });
            });
    })
}

var create_product = function() {
    $(".create-btn-submit").on("click", function(e) {
        var temp = $(e.currentTarget).html();
        $(e.currentTarget).css({
            "background": "#fff"
        }).html('<div class="sk-circle"><div class="sk-circle1 sk-child"></div><div class="sk-circle2 sk-child"></div><div class="sk-circle3 sk-child"></div><div class="sk-circle4 sk-child"></div><div class="sk-circle5 sk-child"></div><div class="sk-circle6 sk-child"></div><div class="sk-circle7 sk-child"></div><div class="sk-circle8 sk-child"></div><div class="sk-circle9 sk-child"></div><div class="sk-circle10 sk-child"></div><div class="sk-circle11 sk-child"></div><div class="sk-circle12 sk-child"></div></div>');
        var data = {
            MaDienThoai: $(".edit-MaDienThoai").val(),
            TenDienThoai: $(".edit-TenDienThoai").val(),
            HangSX: $(".edit-HangSX").val(),
            SoLuongConLai: $(".edit-SoLuongConLai").val(),
            GiaBan: $(".edit-GiaBan").val(),
            ManHinh: $(".edit-ManHinh").val(),
            HeDieuHanh: $(".edit-HeDieuHanh").val(),
            CameraTruoc: $(".edit-CameraTruoc").val(),
            CameraSau: $(".edit-CameraSau").val(),
            RAM: $(".edit-RAM").val(),
            ROM: $(".edit-ROM").val(),
            CPU: $(".edit-CPU").val(),
            Pin: $(".edit-Pin").val(),
            Khac: $(".edit-Khac").val(),
            MoTa: $(".edit-MoTa").val(),
        };
        axios.post('/api/product/create', data)
            .then(function(response) {
                console.log(response);
                if (response.data) {
                    if (confirm("Đã thêm sản phẩm! Tạo sản phẩm khác?") == true) {
                        $("input").val("");
                        $(e.currentTarget).html(temp).css({
                            "background": "#005c9e"
                        });
                    } else {
                        window.location.href = "/product/view/" + response.data;
                    }

                } else {
                    alert("Có lỗi xảy ra! Hãy thử lại!");
                    $(e.currentTarget).html(temp).css({
                        "background": "#005c9e"
                    });
                }
            }).catch(function(error) {
                alert("Có lỗi xảy ra! Hãy thử lại!");
                $(e.currentTarget).html(temp).css({
                    "background": "#005c9e"
                });
            });
    })
}