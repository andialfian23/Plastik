 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="#" class="brand-link">
         <img src="images/pdmanplas.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3  bg-white"
             style="opacity: 0.8" />
         <span class="brand-text font-weight-light">PD. Mandiri Plastik</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="AdminLTE_3/dist/img/user.png" class="img-circle elevation-2" alt="User Image" />
             </div>
             <div class="info">
                 <a href="#" class="d-block"><?= $_SESSION['title'] ?></a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item">
                     <a href="index.php" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="index.php?page=barang" class="nav-link">
                         <i class="nav-icon fas fa-cart-arrow-down"></i>
                         <p>Stok Barang</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="index.php?page=penjualan" class="nav-link">
                         <i class="nav-icon fas fa-cash-register"></i>
                         <p>Penjualan</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="index.php?page=users" class="nav-link">
                         <i class="nav-icon fas fa-users"></i>
                         <p>Users</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="logout.php" class="nav-link">
                         <i class="nav-icon fas fa-sign-out-alt"></i>
                         <p>Logout</p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>