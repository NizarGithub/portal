<?php
    date_default_timezone_set("Asia/Jakarta");
    if(isset($_POST["submit"]))
    {
        $a      = mysql_real_escape_string(strip_tags($_POST["aplikasi"]));
        $b      = mysql_real_escape_string(strip_tags($_POST["alamat"]));

        $fotobaru  = $_FILES["fotobaru"]["name"];
        $newfotobaru     = $a . end(explode(".",$fotobaru));
        $file_tmp_fotobaru = $_FILES["fotobaru"]["tmp_name"];
        copy($file_tmp_fotobaru,"../portal/images/".$newfotobaru);

        mysql_query("INSERT INTO aplikasi VALUES ('','$a','$b','$newfotobaru')");
        header("location:index.php?aplikasi&suksestambah");
    }
?>

<script type="text/javascript">
    function isNumberKeyTgl(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        return false;
        return true;
    }
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 47 || charCode > 57))
        return false;
        return true;
    }
</script>

<script type="text/javascript" src="assets/js/bootstrap-filestyle.js"></script>

<link rel="stylesheet" href="assets/pickday/css/pikaday.css" />
<div id="wrapper">
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Tambah Aplikasi</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <!-- /. content  -->
            <hr />
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Tambah Aplikasi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form id="validate-me-plz" name="form1" enctype="multipart/form-data" role="form" action="" method="post">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><label>Nama Aplikasi</label></div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="aplikasi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><label>Alamat Aplikasi</label></div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="alamat">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="<?php echo $rowA["image"] == "" ? "images/foto/no-images.png" : "foto/".$rowA["image"] ?>" width="50%" class="img-responsive img-rounded" />
                                                    <input type="file" name="fotobaru" id="fotobaru"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-5">
                                                <button type="submit" name="submit" class="btn btn-large btn-success">Simpan</button>
                                                <a href="index.php?aplikasi" class="btn btn-large btn-warning">Kembali</a>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="assets/validasi/jquery.validate.min.js"></script>
<script type="text/javascript">
    $('#validate-me-plz').validate({
        rules: {
            field: {
                required: true,
                date: true
            },
            alamat: {
                required: true
            }
        },
        messages: {
            alamat: {
                required: "Mohon masukkan data alamat"
            }
        }
    });
</script>
