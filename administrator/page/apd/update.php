<?php
if(isset($_POST["submit"])){
    $a      = mysql_real_escape_string(strip_tags($_POST["namaapd"]));
    $kode   = mysql_real_escape_string(strip_tags($_POST["kodeapd"]));

    mysql_query("UPDATE apd SET namaapd='$a' WHERE kodeapd='$kode'");
    header("location:index.php?apd&suksesedit");

}
$idA = (int)mysql_real_escape_string(trim($_GET["update-apd"]));
$sqlA = mysql_query("SELECT * FROM apd WHERE kodeapd = '$idA'") or die (mysql_error());
if(mysql_num_rows($sqlA)==0) header("location:index.php?apd");
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
                        <h2>Ubah APD</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
       <!-- content -->
       <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form Ubah APD
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                    <!-- id="validate-me-plz" -->
                        <form id="validate-me-plz" name="form1" enctype="multipart/form-data" role="form" action="" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"> <label>Kode APD</label></div>
                                    <div class="col-md-5">
                                        <input type="text" disabled="" class="form-control" value="<?php echo $rowA["kodeapd"]; ?>" />
                                        <input type="hidden" name="kodeapd" class="form-control" value="<?php echo $rowA["kodeapd"]; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"> <label>Nama APD</label></div>
                                    <div class="col-md-5">
                                        <input type="text" name="namaapd" class="form-control" value="<?php echo $rowA["namaapd"]; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-8">
                                    <button type="submit" name="submit" id="submit" value="submit" class="btn btn-large btn-success">Simpan</button>
                                    <a href="index.php?apd" class="btn btn-large btn-warning">Kembali</a>
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
