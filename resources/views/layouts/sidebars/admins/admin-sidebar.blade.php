 <!--begin::Sidebar-->
 <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
     <!--begin::Main-->
     <div class="d-flex flex-column justify-content-between h-100 hover-scroll-overlay-y my-2 d-flex flex-column"
         id="kt_app_sidebar_main" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
         data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_main"
         data-kt-scroll-offset="5px">
         <!--begin::Sidebar menu-->
         <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
             class="flex-column-fluid menu menu-sub-indention menu-column menu-rounded menu-active-bg mb-7">
             <!--begin::Menu item-->
             <div class="menu-item">
                 <a href="{{ route('admins.dashboards') }}" class="menu-link {{ request()->is('admin/dashboards*') ? 'active' : '' }}">
                     <span class="menu-icon">
                         <i class="ki-duotone ki-home fs-1"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                     </span>
                     <span class="menu-title">Dashboard</span>
                 </a>
             </div>
             <!--end::Menu item-->

             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->is('admin/master-barang*') ? 'show' : '' }}">
                 <!--begin:Menu link-->
                 <span class="menu-link">
                     <span class="menu-icon">
                         <i class="ki-duotone ki-folder fs-1">
                             <span class="path1"></span>
                             <span class="path2"></span>
                             <span class="path3"></span>
                         </i>
                     </span>
                     <span class="menu-title">Master Barang</span>
                     <span class="menu-arrow"></span>
                 </span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a class="menu-link {{ request()->is('admin/master-barang/kategori*') ? 'active' : '' }}" href="{{ route('admins.kategoris') }}">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">Kategori</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a class="menu-link {{ request()->is('admin/master-barang/satuan*') ? 'active' : '' }}" href="{{ route('admins.satuans') }}">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">Satuan</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a class="menu-link {{ request()->is('admin/master-barang/stok-barang*') ? 'active' : '' }}" href="{{ route('admins.master-barangs.stok-barang') }}">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">Stok Barang</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
             <!--begin::Menu item-->
             <div class="menu-item">
                 <a href="{{ route('admins.pengajuans') }}" class="menu-link {{ request()->is('admin/pengajuan*') ? 'active' : '' }}">
                     <span class="menu-icon">
                         <i class="ki-duotone ki-message-edit fs-1"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                     </span>
                     <span class="menu-title">Pengajuan</span>
                 </a>
             </div>
             <!--end::Menu item-->
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->is('admin/transaksi*') ? 'show' : '' }}">
                 <!--begin:Menu link-->
                 <span class="menu-link">
                     <span class="menu-icon">
                         <i class="ki-duotone ki-arrows-loop fs-1">
                             <span class="path1"></span>
                             <span class="path2"></span>
                             <span class="path3"></span>
                         </i>
                     </span>
                     <span class="menu-title">Transaksi</span>
                     <span class="menu-arrow"></span>
                 </span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a class="menu-link {{ request()->is('admin/transaksi/barang-masuk*') ? 'active' : '' }}" href="{{ route('admins.transaksis.barang-masuk') }}">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">Barang Masuk</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a class="menu-link {{ request()->is('admin/transaksi/barang-keluar*') ? 'active' : '' }}" href="{{ route('admins.transaksis.barang-keluar') }}">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">Barang Keluar</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a class="menu-link {{ request()->is('admin/transaksi/barang-rusak*') ? 'active' : '' }}" href="{{ route('admins.transaksis.barang-rusak') }}">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">Barang Rusak</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->


                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
             <!--begin::Menu item-->
             <div class="menu-item">
                 <a href="{{ route('admins.penggunas.index') }}" class="menu-link {{ request()->is('admin/daftar-pengguna*') ? 'active' : '' }}">
                     <span class="menu-icon">
                         <i class="ki-duotone ki-profile-user fs-1"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                     </span>
                     <span class="menu-title">Pengguna</span>
                 </a>
             </div>
             <!--end::Menu item-->
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link-->
                 <span class="menu-link">
                     <span class="menu-icon">
                         <i class="ki-duotone ki-document fs-1">
                             <span class="path1"></span>
                             <span class="path2"></span>
                             <span class="path3"></span>
                         </i>
                     </span>
                     <span class="menu-title">Laporan</span>
                     <span class="menu-arrow"></span>
                 </span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a class="menu-link" href="{{ route('admins.transaksis.barang-masuk') }}">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">Laporan Barang Masuk</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a class="menu-link" href="{{ route('admins.transaksis.barang-keluar') }}">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">Laporan Barang Keluar</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a class="menu-link" href="{{ route('admins.transaksis.barang-rusak') }}">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">Laporan Barang Rusak</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->


                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->

             OTHERS
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link-->
                 <span class="menu-link">
                     <span class="menu-icon">
                         <i class="ki-duotone ki-setting-2 fs-1">
                             <span class="path1"></span>
                             <span class="path2"></span>
                         </i>
                     </span>
                     <span class="menu-title">Settings</span>
                     <span class="menu-arrow"></span>
                 </span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">User Profile</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="#" data-kt-page="pro">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Activity
                                         <span
                                             class="badge badge-pro badge-light-danger fw-semibold fs-8 px-2 py-1 ms-1"
                                             data-bs-toggle="tooltip"
                                             title="Upgrade to Pro to get this">Pro</span></span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                         </div>
                         <!--end:Menu sub-->
                     </div>
                     <!--end:Menu item-->
                     <!--begin:Menu item-->
                     <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                         <!--begin:Menu link-->
                         <span class="menu-link">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">Account</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="../dist/account/overview.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Overview</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="../dist/account/settings.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">Settings</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->

                         </div>
                         <!--end:Menu sub-->
                     </div>
                     <!--end:Menu item-->

                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->
             <!--begin::Menu item-->
             <div class="menu-item">
                 <a href="{{ route('site.logout') }}" class="menu-link">
                     <span class="menu-icon">
                         <i class="ki-duotone ki-exit-right fs-1"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                     </span>
                     <span class="menu-title">Logout</span>
                 </a>
             </div>
             <!--end::Menu item-->
         </div>
         <!--end::Sidebar menu-->

     </div>
     <!--end::Main-->
 </div>
 <!--end::Sidebar-->
