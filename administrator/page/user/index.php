<?php
    $sql = mysql_query("SELECT * FROM login") or die(mysql_error());
?>

<div id="wrapper">
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Data User</h2>
                    <hr />
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-9">
                    <?php if(isset($_GET["sukseshapus"])){?>
                        <div class="alert alert-success">Data Berhasil Di Hapus...
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
                        </div>
                    <?php }else if(isset($_GET["suksesedit"])){ ?>
                        <div class="alert alert-success">Data Berhasil Di Ubah...
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
                        </div>
                    <?php }else if(isset($_GET["suksesbalaskomen"])){ ?>
                        <div class="alert alert-success">Komentar Berhasil Di balas...
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
                        </div>
                    <?php }else if(isset($_GET["suksestambah"])){?>
                        <div class="alert alert-success" id="alertupload">Data berhasil Ditambah,
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
                        </div>
                    <?php } ?>
                </div>

                <div class="col-md-3">
                    <a href="index.php?tambah-user" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a> <a href="index.php?laporan-user" class="btn btn-sm btn-danger"><i class="fa fa-list-alt"> </i> Laporan</a>
                    <br /><br />
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Table data User</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="datatabel1">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center; vertical-align: middle;">No</th>
                                            <th style="text-align:center; vertical-align: middle;">Nama</th>
                                            <th style="text-align:center; vertical-align: middle;">NIP</th>
                                            <th style="text-align:center; vertical-align: middle;">Jenis User</th>
                                            <th style="text-align:center; vertical-align: middle;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(mysql_num_rows($sql) > 0){
                                            $no=1;
                                            while($row=mysql_fetch_array($sql))
                                            { ?>
                                                <tr style="text-align:center; vertical-align: middle;">
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $row['nama'];?></td>
                                                    <td><?php echo $row['email'];?></td>
                                                    <td><?php echo $row['jenisuser'];?></td>
                                                    <td>
                                                        <a title="EDIT USER" href="index.php?update-user=<?php echo $row["kodelogin"]?>" type="button"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                                                        <a title="USER AKSES" href="index.php?user-akses=<?php echo $row["kodelogin"]?>" type="button"><i class="fa fa-cogs fa-2x"></i></a>
                                                        <a title="HAPUS USER" href="#" id="delete-user=<?php echo $row["kodelogin"]?>" class="delete">
                                                            <i class="fa fa-trash-o fa-2x"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php $no++;
                                            }
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- confirm dell -->
<script src="assets/confirmdell/js/script.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/datatables/jquery.dataTables.js"></script>
<script src="assets/datatables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready( function () {
        $('#datatabel1').dataTable( {
            "paging":   true,
            "ordering": false,
            "bInfo": false,
            "dom": '<"pull-left"f><"pull-right"l>tip'
        });
    });
</script>
