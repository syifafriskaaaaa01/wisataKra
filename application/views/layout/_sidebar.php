<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <?php $menu =$this->uri->segment(2);?>
        <li class="nav-item <?php if($menu=='dashboard'){echo "active";}?>">
            <a class="nav-link " href="<?= site_url('admin/caraousel/')?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-heading">Application</li>

        <li class="nav-item <?php if($menu=='caraousel'){echo "active";}?>">
            <a class="nav-link collapsed" href="<?= site_url('admin/caraousel/')?>">
                <i class="bi bi-journal-text"></i><span>Caraousel</span>
            </a>
        </li>
        <!-- End Forms Nav -->
        <li class="nav-item <?php if($menu=='kategori'){echo "active";}?>">
            <a class="nav-link collapsed" href="<?= site_url('admin/kategori/')?>">
                <i class=" bi bi-layout-text-window-reverse"></i><span>Kategori Konten</span>
            </a>
        </li>
        <li class="nav-item <?php if($menu=='konten'){echo "active";}?>">
            <a class="nav-link collapsed" href="<?= site_url('admin/konten/')?>">
                <i class="bi bi-menu-button-wide"></i><span>Konten</span>
            </a>
        </li><!-- End Components Nav -->
        <li class="nav-item <?php if($menu=='user'){echo "active";}?>">
            <a class="nav-link collapsed" href="<?= site_url('admin/user/')?>"> <i
                    class="bi bi-gem"></i><span>User</span>
            </a>
        </li>
        <li class="nav-item <?php if($menu=='konfigurasi'){echo "active";}?>">
            <a class="nav-link collapsed" href="<?= site_url('admin/konfigurasi/')?>">
                <i class="bi bi-bar-chart"></i><span>Konfigurasi</span>
            </a>
        </li>
    </ul>

</aside><!-- End Sidebar-->