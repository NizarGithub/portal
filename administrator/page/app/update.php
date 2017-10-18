<?php
if(isset($_POST["submit"])){
    $a      = mysql_real_escape_string(strip_tags($_POST["apd"]));
    $b      = mysql_real_escape_string(strip_tags($_POST["app"]));
    $c      = mysql_real_escape_string(strip_tags($_POST["lokasi"]));
    $kode   = mysql_real_escape_string(strip_tags($_POST["kodeapp"]));

    mysql_query("UPDATE app SET kodeapd='$a', namaapp='$b', lokasi='$c' WHERE kodeapp='$kode'");
    header("location:index.php?app&suksesedit");

}
$idA = (int)mysql_real_escape_string(trim($_GET["update-app"]));
$sqlA = mysql_query("SELECT * FROM app WHERE kodeapp = '$idA'") or die (mysql_error());
if(mysql_num_rows($sqlA)==0) header("location:index.php?app");
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
                        <h2>Ubah APP</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
       <!-- content -->
       <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form Ubah APP
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                    <!-- id="validate-me-plz" -->
                        <form id="validate-me-plz" name="form1" enctype="multipart/form-data" role="form" action="" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"> <label>Kode APP</label></div>
                                    <div class="col-md-5">
                                        <input type="text" disabled="" class="form-control" value="<?php echo $rowA["kodeapp"]; ?>" />
                                        <input type="hidden" name="kodeapp" class="form-control" value="<?php echo $rowA["kodeapp"]; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Nama APD</label></div>
                                        <div class="col-md-5">
                                            <select class="form-control" name="apd">
                                                <?php $sql = mysql_query("SELECT * FROM apd") or die(mysql_error()); ?>
                                                <option value="">- Pilih -</option>
                                                <?php while ($row = mysql_fetch_array($sql)) { ?>
                                                    <option value="<?php echo $row['kodeapd']; ?>"<?php if($rowA["kodeapd"]==$row["kodeapd"]){ ?> selected="selected" <?php } ?>><?php echo $row["namaapd"]; ?>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Nama APP</label></div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="app" value="<?php echo $rowA['namaapp']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label>Lokasi</label></div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="lokasi" value="<?php echo $rowA['lokasi']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-8">
                                    <button type="submit" name="submit" id="submit" value="submit" class="btn btn-large btn-success">Simpan</button>
                                    <a href="index.php?app" class="btn btn-large btn-warning">Kembali</a>
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
