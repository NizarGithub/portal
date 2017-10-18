<?php
    date_default_timezone_set("Asia/Jakarta");
    if(isset($_POST["submit"]))
    {
        $a      = mysql_real_escape_string(strip_tags($_POST["apd"]));
        $b      = mysql_real_escape_string(strip_tags($_POST["app"]));
        $c      = mysql_real_escape_string(strip_tags($_POST["gi"]));
        $d      = mysql_real_escape_string(strip_tags($_POST["alamat"]));

        mysql_query("INSERT INTO gi VALUES ('','$a','$b','$c','$d')");
        header("location:index.php?gi&suksestambah");
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

    var ajaxRequest;
    function getAjax() //fungsi untuk mengecek AJAX pada browser
    {
    	try
    	{
    		ajaxRequest = new XMLHttpRequest();
    	}
    	catch (e)
    	{
    		try
    		{
    			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    		}
    		catch (e)
    		{
    			try
    			{
    				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
    			}
    			catch (e)
    			{
    				alert("Your browser broke!");
    				return false;
    			}
    		}
    	}
    }

    function searchCombo(id)
	{

		getAjax();

		var apd = document.getElementById("apd"+id).value;

		if (apd == "")
		{
			document.getElementById("hasil"+id).innerHTML = "<select class='form-control' disabled=''></select>";
		}
		else
		{
			ajaxRequest.open("POST","page/gi/cari.php?run=combobox&apd="+apd+"&id="+id);
			ajaxRequest.onreadystatechange = function()
			{
					if ((ajaxRequest.readyState == 4) && (ajaxRequest.status == 200))
					{
					document.getElementById("hasil"+id).innerHTML = ajaxRequest.responseText;
					} else
					{
					document.getElementById("hasil"+id).innerHTML = "<img src='ajax-loader.gif'>";
					}
			}
			ajaxRequest.send(null);
		}

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
                    <h2>Tambah GI</h2>
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
                            Form Tambah GI
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form id="validate-me-plz" name="form1" enctype="multipart/form-data" role="form" action="" method="post">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><label>Nama APD</label></div>
                                                <div class="col-md-5">
                                                    <select class="form-control" name="apd" id="apd1" onChange="searchCombo(1);">
                                                        <?php $sql = mysql_query("SELECT * FROM apd") or die(mysql_error()); ?>
                                                        <option value="">- Pilih -</option>
                                                        <?php while ($row = mysql_fetch_array($sql)) { ?>
                                                            <option value="<?php echo $row['kodeapd']; ?>"><?php echo $row['namaapd']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><label>Nama APP</label></div>
                                                <div class="col-md-5" id="hasil1">
                                                    <select class="form-control" disabled=""></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><label>Nama GI</label></div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="namagi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><label>Alamat</label></div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="alamat">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-5">
                                                <button type="submit" name="submit" class="btn btn-large btn-success">Simpan</button>
                                                <a href="index.php?gi" class="btn btn-large btn-warning">Kembali</a>
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
