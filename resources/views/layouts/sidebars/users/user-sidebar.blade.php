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
                    <a href="{{ route('users.dashboards') }}" class="menu-link {{ request()->is('user/dashboards*') ? 'active' : '' }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-home fs-1"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <!--end::Menu item-->
                 <!--begin::Menu item-->
                 <div class="menu-item">
                    <a  href="{{ route('users.pengajuans') }}" class="menu-link {{ request()->is('user/pengajuan-saya*') ? 'active' : '' }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-basket fs-1"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        </span>
                        <span class="menu-title">Pengajuan Saya</span>
                    </a>
                </div>
                <!--end::Menu item-->
    

         
             OTHERS

             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ request()->is('user/profile*') ? 'show' : '' }}">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-setting-2 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                    <span class="menu-title">Settings</span>
                    <span class="menu-arrow"></span>  g                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   q
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ request()->is('user/profile*') ? 'active' : '' }}" href="{{ route('users.profile') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">User Profile</span>
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
