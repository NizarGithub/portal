<?php
if(isset($_POST["submit"])){
    $a      = mysql_real_escape_string(strip_tags($_POST["aplikasi"]));
    $b      = mysql_real_escape_string(strip_tags($_POST["alamat"]));
    $kode   = mysql_real_escape_string(strip_tags($_POST["kodeaplikasi"]));

    $fotobaru1  = $_FILES["fotobaru1"]["name"];
    $fotolama1 = $_POST["fotolama1"];

    if($fotobaru1 == "" || $fotobaru1 == null || empty($fotobaru1)){
        $newfoto1 = $fotolama1;
    }else{
        unlink("../images/".$fotolama1);
        $fotobaru1  = $_FILES["fotobaru1"]["name"];
        $newfoto1     = $a . end(explode(".",$fotobaru1));
        $file_tmp_fotobaru1 = $_FILES["fotobaru1"]["tmp_name"];
        copy($file_tmp_fotobaru1,"../images/".$newfoto1);
    }

    mysql_query("UPDATE aplikasi SET namaaplikasi='$a', alamataplikasi='$b', image='$newfoto1' WHERE kodeaplikasi='$kode'");
    header("location:index.php?aplikasi&suksesedit");

}
$idA = (int)mysql_real_escape_string(trim($_GET["update-aplikasi"]));
$sqlA = mysql_query("SELECT * FROM aplikasi WHERE kodeaplikasi = '$idA'") or die (mysql_error());
if(mysql_num_rows($sqlA)==0) header("location:index.php?aplikasi");
$rowA = mysql_fetch_array($sqlA);
?>
 <script type="text/javascript">
    function isNumberKeyTgl(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
    //     if (charCode > 31 && (charCode < 47 || charCode > 57))
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
    <div id="wrapper">
        <!-- /. NAV SIDE  -->
       <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Ubah Aplikasi</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
       <!-- content -->
       <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form Ubah Aplikasi
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                    <!-- id="validate-me-plz" -->
                        <form id="validate-me-plz" name="form1" enctype="multipart/form-data" role="form" action="" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"> <label>Kode Aplikasi</label></div>
                                    <div class="col-md-5">
                                        <input type="text" disabled="" class="form-control" value="<?php echo $rowA["kodeaplikasi"]; ?>" />
                                        <input type="hidden" name="kodeaplikasi" class="form-control" value="<?php echo $rowA["kodeaplikasi"]; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Nama Aplikasi</label></div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="aplikasi" value="<?php echo $rowA['namaaplikasi']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Alamat</label></div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="alamat" value="<?php echo $rowA['alamataplikasi']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <div class="col-md-5">
                                            <img src="<?php echo $rowA["image"] == "" ? "images/foto/no-images.png" : "../images/".$rowA["image"] ?>" width="50%" class="img-responsive img-rounded" />
                                            <input type="file" name="fotobaru1" id="fotobaru1"/>
                                            <input type="hidden" name="fotolama1" id="fotolama1" value="<?php echo $rowA['image']; ?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-8">
                                    <button type="submit" name="submit" id="submit" value="submit" class="btn btn-large btn-success">Simpan</button>
                                    <a href="index.php?aplikasi" class="btn btn-large btn-warning">Kembali</a>
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
