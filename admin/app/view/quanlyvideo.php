<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin || PPC TIMESHARE</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= BASE_DIR ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= BASE_DIR ?>css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= BASE_DIR ?>css/skins/skin-blue.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_DIR ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_DIR ?>css/responsive.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?= BASE_DIR ?>css/stylehead.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- <header class="main-header"> -->

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <?php require 'partials/slider-bar.php' ?>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="height:1000px;">
        <section class="content-header">
            <h1><b> QUẢN LÝ VIDEO TV </b></h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border text-center">
                            <div class="pull-left">
                                <a href="<?= BASE_URL_ADMIN ?>controllervideo/create"
                                   class="btn btn-success"><i
                                        class="glyphicon glyphicon-th-large"></i>&nbsp <b>Thêm video mới</b></a>
                                <!-- <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button> -->

                            </div>
                        </div>
                        <br>
                        <div class="box-body">
                            <!-- /.col -->
                            <?php
                            foreach ($ds_video as $key => $item_video) {
                                ?>
                                <form
                                    action="<?= BASE_URL_ADMIN ?>controllervideo/update/<?= $item_video['id_video'] ?>"
                                    method="POST" enctype="multipart/form-data">
                                    <div class="row" style="margin-top:20px;height: 100%">
                                        <div class="col-md-2 col-sm-12">
                                            <embed width="100%" height="100%"
                                                   src="<?php echo trim($item_video['url_video']) ?> ">
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <div class="form-group">
                                                <label for="noidung">Đường dẫn video</label>
                                                <textarea placeholder="Đường dẫn video" class="form-control"
                                                          name="url_video"
                                                          style="font-size:17px;font-family:verdana;text-align:justify;"> <?php echo $item_video['url_video']; ?> </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label for="noidung">Tên video tiếng việt</label>
                                                <textarea placeholder="Tên video tiếng việt" class="form-control"
                                                          name="ten_video_vi"
                                                          style="font-size:17px;font-family:verdana;text-align:justify;"><?php echo $item_video['ten_video_vi']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label for="noidung">Tên video tiếng anh</label>
                                                <textarea placeholder="Tên video tiếng anh" class="form-control"
                                                          name="ten_video_en"
                                                          style="font-size:17px;font-family:verdana;text-align:justify;"><?php echo $item_video['ten_video_en']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12" style="margin-top: 25px; padding-left: 0px">
                                            <button type="submit" class="btn btn-primary" name="submit">Cập nhật
                                            </button>
                                            <a href="<?= BASE_URL_ADMIN ?>controllervideo/delete/<?= $item_video['id_video'] ?>"
                                               class="btn btn-danger">Xóa</a>
                                        </div>

                                    </div>
                                </form>
                            <?php } ?>
                            <!-- /.col -->
                            <!-- </table> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.6
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>


</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="<?= BASE_DIR ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Slimscroll -->
<script src="<?= BASE_DIR ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= BASE_DIR ?>plugins/fastclick/fastclick.js"></script>
<!-- iCheck -->
<script src="<?= BASE_DIR ?>plugins/iCheck/icheck.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= BASE_DIR ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
    $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
    });
</script>
<script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
</body>
</html>
