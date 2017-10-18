<?php
include_once "../../config/koneksi.php";
    if (isset($_GET['run'])) $linkchoice=$_GET['run'];
            else $linkchoice='';

            switch($linkchoice) {

            case 'combobox';
                combobox();

            break;
    }

    function combobox(){
    	if (isset($_GET['apd']))
    	{
    		$apd = $_GET['apd'];
    		$id = $_GET['id'];

    		if($id == 1){
                ?>
    			<select class="form-control" name="app"  id="app1">
    			<?php
    			$sql = mysql_query("SELECT * FROM app WHERE kodeapd='$apd'"); ?>
                <option value='' selected='selected'>- Pilih -</option>
    			<?php while($row = mysql_fetch_array($sql)){
    			?>
    			<option value="<?php echo $row['kodeapp']; ?>"><?php echo $row['namaapp']; ?></option>
    			<?php
    			}
    			?>
    			</select>
    			<?php
    		}
    	}

    }
?>
