
<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= $_SESSION ['data'] ['nama']?><sup><?= $_SESSION ['data'] ['role']?></sup></div>
            </a>
            <?php
            if ($_SESSION['data'] ['role'] == 'admin'){
         ?>
        
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="home_user.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Untuk Admin</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
           
            <!-- Nav Item - Tables -->
            <li class="nav-item">
            <a class="nav-link" href="v_barang_user.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables Untuk Admin</span>
                </a>
                
            </li>

           
        
            <?php }elseif($_SESSION ['data'] ['role'] == 'user') {
         ?>
         <!-- Nav Item - Dashboard -->
            <li class="nav-item">
            <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachmoter-alt"></i>
                    <span>Dashboard Untuk User</span>
                </a>
                
            </li>

            <li class="nav-item <?= $hal == 'Barang User' ? 'active' :
            ''; ?>">
            <a class="nav-link" href="barang.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables Untuk User</span>
                </a>
                
           
            <?php } ?>
        

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inLine">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
                </ul>
    


        <!-- End of Sidebar -->
            