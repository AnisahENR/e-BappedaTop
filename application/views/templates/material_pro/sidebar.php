        
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url(<?=base_url()?>_assets/material_pro/assets/images/background/profile-bg.jpg) no-repeat;">

            <div class="profile-img">
                <img src="<?=base_url()?>_assets/material_pro/assets/images/users/3.jpg" alt="user" />
            </div>

            <div class="profile-text">   
                <h3><span class="badge badge-secondary">Trisia Widya</span></h3>
                
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">NAVIGASI</li>
                <li>
                    <a href="<?=site_url('beranda')?>" aria-expanded="false"><i class="fas fa-home"></i></i><span class="hide-menu"> Beranda</span></a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Master Data</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?=base_url()?>Master_data">Master Perangkat Daerah</a></li>
                        <li><a href="<?=base_url()?>Master_data/view_master_golongan">Master Golongan</a></li>
                        <li><a href="<?=base_url()?>Master_data/view_master_jabatan">Master Jabatan</a></li>

                    </ul>
                </li>
                <li>
                    <a href="<?=site_url('Admin')?>" aria-expanded="false"><i class="fas fa-cogs"></i><span class="hide-menu"> Manajemen Admin</span></a>
                </li>
                <li>
                    <a href="<?=site_url('Pegawai')?>" aria-expanded="false"><i class="fas fa-list-ul"></i></i><span class="hide-menu"> Daftar Pegawai</span></a>
                </li>
          
                <li>
                    <a href="<?=site_url('Manajemen_sakip')?>" aria-expanded="false"><i class="fas fa-list-ul"></i></i><span class="hide-menu"> Manajemen SAKIP</span></a>
                </li>
               <!--  <li>
                    <a href="<?//=site_url('cetak/laporan_aktivitas_bulanan')?>" aria-expanded="false"><i class="fas fa-print"></i></i><span class="hide-menu"> Cetak Dokumen</span></a>
                </li> -->
                <li>
                    <a href="<?=site_url('tentang')?>" aria-expanded="false"><i class="fas fa-info"></i></i><span class="hide-menu"> Tentang Kami</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
