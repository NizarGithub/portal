<?php function menuAdmin(){ ?>
    <ul>
        <li><a class="text-right closeclick" href="#">close &times;</a></li>
        <li>
            <div class="imgprofile text-center">
                <?php
                    $sqluserImg = mysql_query("SELECT master.login.* FROM master.login WHERE kodelogin = $_SESSION[kodelogin]") or die (mysql_error());
                    $rowImg = mysql_fetch_array($sqluserImg);
                ?>

                <img src="<?php echo $rowImg["images"] == "" ? "images/user.png" : "images/foto/".$rowImg["images"] ?>" class="img-circle img-responsive center-block"  />
                <br /><strong>Superadmin</strong>
                <a href="#" class="logoutK"><i class="fa fa-power-off"></i> Log out</a>
            </div>
        </li>
        <li>
            <a href="index.php?dashboard"><i class="fa fa-dashboard fa-2x"></i> Beranda</a>
        </li>
        <li>
            <a href="index.php?apd"><i class="fa fa-dashboard fa-2x"></i> APD</a>
        </li>
        <li>
            <a href="index.php?app"><i class="fa fa-dashboard fa-2x"></i> APP</a>
        </li>
        <li>
            <a href="index.php?gi"><i class="fa fa-dashboard fa-2x"></i> GI</a>
        </li>
        <li>
            <a href="index.php?bidang"><i class="fa fa-dashboard fa-2x"></i> Bidang</a>
        </li>
        <li>
            <a href="index.php?aplikasi"><i class="fa fa-dashboard fa-2x"></i> Aplikasi</a>
        </li>
        <li>
            <a href="index.php?user"><i class="fa fa-dashboard fa-2x"></i> User</a>
        </li>
    </ul>
<?php } ?>
