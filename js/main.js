function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$(document).ready(function () {

    $(document).on("click", 'div.name-video a', function (e) {
        e.preventDefault();
        data = $(this).data("value");
        $('#main_video').attr('src', data);
        e.preventDefault();
    });

    $('#btn_change_newpass').click(function () {
        matkhaumoi = $('#new_password').val();
        nhaplaimatkhaumoi = $('#re_new_password').val();
        loi = 0;
        if (matkhaumoi == "") {
            loi++;
            $('#annouce_change_newpass').text("Hãy nhập đầy đủ thông tin");
        }
        else {
            if (matkhaumoi != nhaplaimatkhaumoi) {
                loi++;
                $('#annouce_change_newpass').text("Mật khẩu nhập lại không trùng khớp");
            }
        }
        if (loi != 0) {
            return false;
        }
        return true;
    });

    $('#btnLuuThongTin').click(function () {
        tentaikhoan = $('#tentaikhoan').val();
        diachitaikhoan = $('#diachitaikhoan').val();
        sodienthoaitaikhoan = $('#sodienthoaitaikhoan').val();
        loi = 0;
        if (isNaN(sodienthoaitaikhoan)) {
            loi++;
            $('#thongbaoXemThongTin').text("Điện thoại phải là số");
        }
        if (tentaikhoan == "" || diachitaikhoan == "" || sodienthoaitaikhoan == ""
        ) {
            loi++;
            $('#thongbaoXemThongTin').text("Hãy nhập đầy đủ thông tin");
        }
        if (loi != 0) {
            return false;
        }
        return true;
    });

    $('#btn_gui').click(function () {
        tencongty = $('#ten').val();
        dienthoaicongty = $('#dienthoaicongty').val();
        emailcongty = $('#email').val();

        if (tencongty == "" || dienthoaicongty == "" || emailcongty == "") {
            $('#thongbaoguilh').text("Hãy nhập đầy đủ thông tin liên hệ");
            return false;
        }
        if (isNaN(dienthoaicongty)) {
            $('#thongbaoguilh').text("Điện thoại phải là số");
            return false;
        }
        if (!validateEmail(emailcongty)) {
            $("#thongbaoguilh").text("Email không đúng");
            return false;
        }

        return true;
    });

    $('#btnQuenMatKhau').click(function () {
        tendangnhapll = $('#tendangnhapll').val();
        if (tendangnhapll == "") {
            $('#thongbaoQuenMatKhau').text("Hãy nhập đầy đủ thông tin");
        }
        return true;
    });


    $('#doimatkhau').click(function () {
        matkhaucu = $('#matkhaucu').val();
        matkhaumoi = $('#matkhaumoi').val();
        nhaplaimatkhaumoi = $('#nhaplaimatkhaumoi').val();
        loi = 0;
        if (matkhaucu == "" || matkhaumoi == "") {
            loi++;
            $('#thongbaodoimatkhau').text("Hãy nhập đầy đủ thông tin");
        }
        else {
            if (matkhaumoi != nhaplaimatkhaumoi) {
                loi++;
                $('#thongbaodoimatkhau').text("Mật khẩu nhập lại không trùng khớp");
            }
        }
        if (loi != 0) {
            return false;
        }
        return true;
    });

});