<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include_once "session.php";


include "koneksi.php";


?>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        FURNITURE
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/1.png"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/2.png"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Home</span>
                    </a>
                </li>
                </li>
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book" ></i>
                        <span>Pemasok</span>
                    </a>
                    <ul class="sub">
                        <li><a href="input_pemasok.php">Input Suplier</a></li>
                        <li><a href="daftar_pemasok.php">Daftar Suplier</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book" ></i>
                        <span>Pembelian</span>
                    </a>
                    <ul class="sub">
                        <li><a href="input_pembelian.php">Input Pembelian</a></li>
                        <li><a href="daftar_pembelian_bb.php">Laporan Pembelian Barang Jadi</a></li>
                        <li><a href="daftar_pembelian_gelas.php">Laporan Pembelian Bahan Baku</a></li>
                    </ul>
                </li>
                 <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book" ></i>
                        <span>Penjualan</span>
                    </a>
                    <ul class="sub">
                        <li><a href="input_penjualan.html">Input Penjualan</a></li>
                        <li><a href="daftar_penjualan.php">Laporan Penjualan</a></li>
                    </ul>
                </li>

                <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     LAPORAN PEMBELIAN BARANG JADI
    </div>
                               <?php  
                                $sql_cek="select b.* , a.nm_pemasok FROM pembelian b, pemasok a where b.id_pemasok=a.id_pemasok AND b.jenis_pembelian='gelas' 
                                        order by id_beli ASC";
                                        $query_cek = $koneksidb->query($sql_cek);
                                        $result_cek = $query_cek->num_rows;
                                        if($result_cek=='0'){
                                        echo "<center>Maaf Data Yang anda cari tidak ada <br> Silahkan Masukkan Data Terlebih Dahulu</center>";
                                         }

                                         else{
                                ?>
      
    <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
        <thead>
          <tr>
                                            <th>No</th>                       
                                            <th>ID Pembelian</th>
                                            <th>Tanggal</th>
                                            <th>Pemasok</th>
                                            <th>Kuantitas</th>
                                            <th>Harga Satuan</th>
                                            <th>Total</th>
                                            <th>Ubah</th>
          </tr>
        </thead>
        <tbody>
             <?php 
                                        $no=0;
                                        $jml=0;
                                        $jumlah_desimal = "0";
                                        $pemisah_desimal = ",";
                                        $pemisah_ribuan = ".";
                                         while ($data = $query_cek->fetch_array()) {
                                            $no ++;
                                        $jml=$data['qty']*$data['harga'];
                                    ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $data['id_beli']; ?></td>
                                                <td><?php echo $data['tgl_pembelian']; ?></td>
                                                <td><?php echo $data['nm_pemasok']; ?></td>
                                                <td><?php echo $data['qty']; ?></td>
                                                <td><?php echo number_format($data['harga'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan); ?></td>
                                                <td> <?php echo number_format ($jml, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan); ?></td>
												<td>
													<a id="edit_data" data-toggle="modal" data-target="#edit" 
														data-id="<?php echo $data['id_beli'] ?>" 
														data-ket="<?php echo $data['tgl_pembelian']; ?>" 
														data-tgl="<?php echo $data['nm_pemasok']; ?>" 
														data-jml="<?php echo $data['qty'] ?>"  
														class="btn btn-info" >
														<i class="fa fa-edit"></i>Edit
													</a>
													<a onclick="return confirm('Yakin akan Menghapus Data ini?')" 
														href="?page=masuk&aksi=hapus&id=<?php echo $data['kode']; ?>" 
														class="btn btn-danger" >
													<i class="fa fa-trash"></i>Hapus
													</a>
												</td>
											</tr>
                                    <?php 
                                         }
                                        }
                                    ?>
									<!--halaman ubah-->
									
					<?php
						$pemasok=("SELECT id_pemasok, nm_pemasok from pemasok");
						$pemasok_query = mysqli_query($koneksidb,$pemasok);
				?>
				<div class="panel-body">
               
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
                            </div>
                            <div class="modal-body">
                              
                              <form role="form" method="POST">           
                    </div>
					
								<div class="form-group">
                                    <label>Tanggal Pembelian</label>
                                    <input class="form-control" type="date" name="tgl_pembelian" placeholder="Input tgl" />
                                </div>
								<div class="form-group">
								
                                    <label>Pemasok</label>
									<select  class="form-control" name="id_pemasok" id="id_pemasok" placeholder="id_pemasok" > 
										<?php
										while ($pemasok_tampil=mysqli_fetch_assoc($pemasok_query)){
										echo "<option value='".$pemasok_tampil['id_pemasok']."'>".$pemasok_tampil['nm_pemasok']."</option>";
											}
										?>
                        			</select> 
                                </div>
								<div class="form-group">
								
                                    <label>Jenis Pembelian</label>
									<select  class="form-control" name="jenis_pembelian" id="jenis_pembelian" placeholder="jenis_pembelian" > 
										<option>Gelas</option>
										<option>Bahan Baku</option>
                        			</select> 
                                </div>
								<div class="form-group">
                                    <label>Qty</label>
                                    <input class="form-control" type="text" name="qty" placeholder="Input qty" />
                                </div>
								<div class="form-group">
                                    <label>Harga Satuan</label>
                                    <input class="form-control" type="text" name="harga" placeholder="Input tgl" />
                                </div>
								<div class="form-group">
                                    <label>Total Harga</label>
                                    <input class="form-control" type="date" name="total" placeholder="Input tgl" />
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            </div>
                           </form>

                                <?php

                                    if (isset($_POST['ubah'])){

                                        $tgl_pembelian = $_POST['tgl_pembelian'];
                                        $id_pemasok = $_POST['id_pemasok'];
                                        $jenis_pembelian = $_POST['jenis_pembelian'];
                                        $qty = $_POST['qty'];
                                        $harga = $_POST['harga'];
                                        $total = $_POST['total'];



                                        $sql = $koneksi->query("update pembelian set  tgl_pembelian='$tgl_pembelian', id_pemasok='$id_pemasok', jenis_pembelian='$jenis_pembelian', qty ='$qty', harga='$harga', total='$total'  where id_beli='$id_beli'");
                                        
                                        if ($sql){
                                            ?>
                                                <script type="text/javascript">
                                                    alert("ubah data berhasil");
                                                    window,location.href="?page=keluar";
                                                </script>
                                            <?php
                                        }

                                    }

                                ?>

                            </div>

                    </div>
                </div>
            </div>

            <script src="assets/js/jquery-1.10.2.js"></script>

            <script type="text/javascript">

            $(document).on("click", "#edit_data", function(){

                var tgl_pembelian = $(this).data('tgl_pembelian');
                var id_pemasok = $(this).data('id_pemasok');
                var jenis_pembelian = $(this).data('jenis_pembelian');
                var qty = $(this).data('qty');
                var harga = $(this).data('harga');
                var total = $(this).data('total');

                $("modal_edit #tgl_pembelian").val(tgl_pembelian);
                $("modal_edit #id_pemasok").val(id_pemasok);
                $("modal_edit #jenis_pembelian").val(jenis_pembelian);
                $("modal_edit #qty").val(qty);
                $("modal_edit #harga").val(harga);
                $("modal_edit #total").val(total);
            })

            </script>


    <!-- akhir halaman ubah-->
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>

<!--sidebar end-->
<!--main content start-->
 <!-- footer -->
          <div class="footer">
            <div class="wthree-copyright">
              <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
          </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->  
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
       jQuery('.small-graph-box').hover(function() {
          jQuery(this).find('.box-button').fadeIn('fast');
       }, function() {
          jQuery(this).find('.box-button').fadeOut('fast');
       });
       jQuery('.small-graph-box .box-close').click(function() {
          jQuery(this).closest('.small-graph-box').fadeOut(200);
          return false;
       });
       
        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }
        
        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
            
            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });
        
       
    });
    </script>
<!-- calendar -->
    <script type="text/javascript" src="js/monthly.js"></script>
    <script type="text/javascript">
        $(window).load( function() {

            $('#mycalendar').monthly({
                mode: 'event',
                
            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

        switch(window.location.protocol) {
        case 'http:':
        case 'https:':
        // running on a server, should be good.
        break;
        case 'file:':
        alert('Just a heads-up, events will not work when run locally.');
        }

        });
    </script>
    <!-- //calendar -->
</body>
</html>

