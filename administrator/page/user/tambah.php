<?php
    date_default_timezone_set("Asia/Jakarta");
    if(isset($_POST["submit"]))
    {
        $a      = mysql_real_escape_string(strip_tags($_POST["bidang"]));
        $b      = mysql_real_escape_string(strip_tags($_POST["idbidang"]));

        mysql_query("INSERT INTO bidang VALUES ('','$a','$b')");
        header("location:index.php?bidang&suksestambah");
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

		var app = document.getElementById("app"+id).value;

		if (app == "")
		{
			document.getElementById("hasil"+id).innerHTML = "<select></select>";
		}
		else
		{
			ajaxRequest.open("POST","page/user/carigi.php?run=combobox&app="+app+"&id="+id);
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
                    <h2>Tambah User</h2>
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
                            Form Tambah User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form id="validate-me-plz" name="form1" enctype="multipart/form-data" role="form" action="" method="post">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><label>Nama</label></div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="nama">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><label>NIP</label></div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="nip">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><label>Jenis User</label></div>
                                                <div class="col-md-5">
                                                    <input type="radio" name="jenisuser" id="jenisuser" value="ki"> KI<br>
                                                    <input type="radio" name="jenisuser" id="jenisuser" value="apd"> APD<br>
                                                    <input type="radio" name="jenisuser" id="jenisuser" value="app"> APP<br>
                                                    <input type="radio" name="jenisuser" id="jenisuser" value="gi"> GI<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="ki" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-3"><label>Bidang</label></div>
                                                <div class="col-md-5">
                                                    <select class="form-control" name="bidang">
                                                        <option value="">- Pilih -</option>
                                                        <?php $sqlbidang = mysql_query("SELECT * FROM bidang") or die(mysql_error());
                                                        while($rowbidang = mysql_fetch_array($sqlbidang)){ ?>
                                                            <option value="<?php echo $rowbidang['kodebidang']; ?>"><?php echo $rowbidang['namabidang']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="apd" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-3"><label>APD</label></div>
                                                <div class="col-md-5">
                                                    <select class="form-control" name="apd">
                                                        <option value="">- Pilih -</option>
                                                        <?php $sqlapd = mysql_query("SELECT * FROM apd") or die(mysql_error());
                                                        while($rowapd = mysql_fetch_array($sqlapd)){ ?>
                                                            <option value="<?php echo $rowapd['kodeapd']; ?>"><?php echo $rowapd['namaapd']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="app" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-3"><label>APP</label></div>
                                                <div class="col-md-5">
                                                    <select class="form-control" name="app">
                                                        <option value="">- Pilih -</option>
                                                        <?php $sqlapp = mysql_query("SELECT * FROM app") or die(mysql_error());
                                                        while($rowapp = mysql_fetch_array($sqlapp)){ ?>
                                                            <option value="<?php echo $rowapp['kodeapp']; ?>"><?php echo $rowapp['namaapp']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" id="gi" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-3"><label>APP</label></div>
                                                <div class="col-md-5">
                                                    <select class="form-control" name="app" id="app1">
                                                        <option value="">- Pilih -</option>
                                                        <?php $sqlapp = mysql_query("SELECT * FROM app") or die(mysql_error());
                                                        while($rowapp = mysql_fetch_array($sqlapp)){ ?>
                                                            <option value="<?php echo $rowapp['kodeapp']; ?>"><?php echo $rowapp['namaapp']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3"><label>Gardu Induk</label></div>
                                                <div class="col-md-5" id="hasil1">
                                                    <select class="form-control" disabled="">- Pilih -</select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-5">
                                                <button type="submit" name="submit" class="btn btn-large btn-success">Simpan</button>
                                                <a href="index.php?bidang" class="btn btn-large btn-warning">Kembali</a>
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

    $("form input:radio").change(function () {
        if ($(this).val() == "ki") {
            $('#ki').slideToggle();
            $('#gi').slideUp();
            $('#app').slideUp();
            $('#apd').slideUp();
        } else if ($(this).val() == "apd") {
            $('#apd').slideToggle();
            $('#ki').slideUp();
            $('#app').slideUp();
            $('#gi').slideUp();
        } else if ($(this).val() == "app") {
            $('#app').slideToggle();
            $('#apd').slideUp();
            $('#ki').slideUp();
            $('#gi').slideUp();
        } else if ($(this).val() == "gi") {
            $('#gi').slideToggle();
            $('#app').slideUp();
            $('#apd').slideUp();
            $('#ki').slideUp();
        }
    });
</script>
