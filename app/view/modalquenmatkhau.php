<div id="ModalQuenMatKhau" class="modal">
    <div class="modal-content">
        <div class="modal-header">

            <h3 style="text-align:center;"><b>LẤY LẠI MẬT KHẨU</b></h3>
        </div>
        <div class="modal-body">
            <form action="<?= BASE_URL.$_SESSION['lang'] ?>/controller/quenmatkhau" method="POST">
                <div class="input-group" id="banner_5">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="tendangnhapll" type="text" class="form-control" name="tendangnhapll"
                           placeholder="Tên đăng nhập">
                </div>
                <p><span style="color: red;" id="thongbaoQuenMatKhau"></span></p>
                <div class="modal-footer text-right">
                    <button type="submit" id="btnQuenMatKhau" name="btn_submit" class="btn btn-default">Gửi
                    </button>
                    <button type="button" id="btnThoatQuenMatKhau" class="btn btn-default">Thoát</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal content -->
</div>