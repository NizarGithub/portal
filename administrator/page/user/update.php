<?php
if(isset($_POST["submit"])){
    $a      = mysql_real_escape_string(strip_tags($_POST["bidang"]));
    $b      = mysql_real_escape_string(strip_tags($_POST["idbidang"]));
    $kode   = mysql_real_escape_string(strip_tags($_POST["kodebidang"]));

    mysql_query("UPDATE bidang SET namabidang='$a', idbidang='$b WHERE kodebidang='$kode'");
    header("location:index.php?bidang&suksesedit");

}
$idA = (int)mysql_real_escape_string(trim($_GET["update-bidang"]));
$sqlA = mysql_query("SELECT * FROM bidang WHERE kodebidang = '$idA'") or die (mysql_error());
if(mysql_num_rows($sqlA)==0) header("location:index.php?bidang");
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
                        <h2>Ubah Bidang</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
       <!-- content -->
       <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form Ubah Bidang
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                    <!-- id="validate-me-plz" -->
                        <form id="validate-me-plz" name="form1" enctype="multipart/form-data" role="form" action="" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"> <label>Kode Bidang</label></div>
                                    <div class="col-md-5">
                                        <input type="text" disabled="" class="form-control" value="<?php echo $rowA["kodebidang"]; ?>" />
                                        <input type="hidden" name="kodebidang" class="form-control" value="<?php echo $rowA["kodebidang"]; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Nama Bidang</label></div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="bidang" value="<?php echo $rowA['namabidang']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>ID Bidang</label></div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="idbidang" value="<?php echo $rowA['idbidang']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-8">
                                    <button type="submit" name="submit" id="submit" value="submit" class="btn btn-large btn-success">Simpan</button>
                                    <a href="index.php?bidang" class="btn btn-large btn-warning">Kembali</a>
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
