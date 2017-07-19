

	<nav class="cd-nav" >
		<ul id="cd-primary-nav" class="cd-primary-nav is-fixed" style="z-index: 1200;">
            <li class="dropdown">
               <a  title="Panel Pengaturan Akun" class="dropdown-toggle putih" data-toggle="dropdown" href="#">
                   <strong style="padding: 2px 0;"><?php echo $_SESSION["nama"];?></strong> &nbsp; <i class="fa fa-caret-down"></i>
               </a>
               <ul class="dropdown-menu dropdown-user">
                   <li>
                       <a href="index.php?password"><i class="fa fa-cogs"></i> Ganti Password</a>
                   </li>
                   <li>
                       <a href="#" class="logoutK"><i class="fa fa-power-off"></i> Log out</a>
                   </li>
               </ul>
               <!-- /.dropdown-user -->
           </li>
			<!--<li><a href="profil.html">Profil</a></li>
                <li><a href="produk.html">Produk & Layanan</a></li>
                <li><a href="portofolio.html">Portofolio</a></li>
                <li><a href="tim.html">Tim</a></li>
                <li><a href="karir.html">Karir</a></li>
                <li><a href="partner.html">Partner</a></li>
                <li><a href="client.html">Client</a></li>-->
		</ul> <!-- primary-nav -->
	</nav> <!-- cd-nav -->
    <!-- end menu -->

    <div id="services" class="pad-section2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="judul">PORTAL APLIKASI</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- content -->
    <ul class="thumbs">
        <?php
            //$session = 1;
            $sql = mysql_query("SELECT userakses.*, aplikasi.* FROM userakses INNER JOIN aplikasi ON userakses.kodeaplikasi = aplikasi.kodeaplikasi WHERE userakses.kodelogin = $_SESSION[kodelogin]");
            $date  = date("Y-m-d h:i:s");

            while ($raw = mysql_fetch_array($sql))
            {
        ?>
                <li>
                    <?php if($raw['status']=='aktif'){ ?>
                        <a href="index.php?submit=<?= $raw['kodeaplikasi'] ?>" class="thumbnail" style="background-image: url('images/<?= $raw['images']; ?>')">
                            <h4><?= $raw['namaaplikasi']; ?></h4>
                            <span class="description"><?= $raw['namaaplikasi']; ?></span>
                        </a>
                    <?php }else{ ?>
                        <a href="#" class="thumbnail" style="background-image: url('images/<?= $raw['images']; ?>')" onclick="confirm_false()">
                            <h4><?= $raw['namaaplikasi']; ?></h4>
                            <span class="description"><?= $raw['namaaplikasi']; ?></span>
                        </a>
                    <?php } ?>
                </li>
        <?php } ?>
    </ul>

     <!-- Resource jQuery -->
    <script type="text/javascript">
    function confirm_false()
    {
        $('#konfirm_false').modal('show');
        // document.getElementById('subact').setAttribute('href' , subact);
    }
    </script>
    <div class="modal fade" id="konfirm_false">
      <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align:center;">Mohon Maaf Anda Tidak Diizinkan!!! </h4>
          </div>
          <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
            <!--<a href="#" class="btn btn-danger" id="subact">Hapus</a>-->
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>
