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
    	if (isset($_GET['app']))
    	{
    		$app = $_GET['app'];
    		$id = $_GET['id'];

    		if($id == 1){
                ?>
    			<select class="form-control" name="gi"  id="gi" >
    			<?php
    			$sql = mysql_query("SELECT * FROM gi WHERE kodeapp='$app'"); ?>
                <option value='' selected='selected'>- Pilih -</option>
    			<?php while($row = mysql_fetch_array($sql)){
    			?>
    			<option value="<?php echo $row['kodegi']; ?>"><?php echo $row['namagi']; ?></option>
    			<?php
    			}
    			?>
    			</select>
    			<?php
    		}
    	}

    }
?>
