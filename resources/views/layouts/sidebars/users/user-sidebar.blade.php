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
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                 <!--begin:Menu link-->
                 <span class="menu-link">
                     <span class="menu-icon">
                         <i class="ki-duotone ki-element-11 fs-1">
                             <span class="path1"></span>
                             <span class="path2"></span>
                             <span class="path3"></span>
                             <span class="path4"></span>
                         </i>
                     </span>
                     <span class="menu-title">Dashboards</span>
                     <span class="menu-arrow"></span>
                 </span>
                 <!--end:Menu link-->
                 <!--begin:Menu sub-->
                 <div class="menu-sub menu-sub-accordion">
                     <!--begin:Menu item-->
                     <div class="menu-item">
                         <!--begin:Menu link-->
                         <a class="menu-link active" href="">
                             <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                             </span>
                             <span class="menu-title">Main</span>
                         </a>
                         <!--end:Menu link-->
                     </div>
                     <!--end:Menu item-->

                 </div>
                 <!--end:Menu sub-->
             </div>
             <!--end:Menu item-->

             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item">
                 <!--begin:Menu link-->
                 <a class="menu-item active" href="{{ route('users.pengajuans') }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-basket fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                        <span class="menu-title">Pengajuan Saya</span>
                    </span>
                 </a>
                 <!--end:Menu link-->
             </div>
             <!--end:Menu item-->
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link-->
                 <span class="menu-link">
                     <span class="menu-icon">
                         <i class="ki-duotone ki-some-files fs-1">
                             <span class="path1"></span>
                             <span class="path2"></span>
                         </i>
                     </span>
                     <span class="menu-title">Pages</span>
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
             <!--begin:Menu item-->
             <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                 <!--begin:Menu link-->
                 <span class="menu-link">
                     <span class="menu-icon">
                         <i class="ki-duotone ki-rescue fs-1">
                             <span class="path1"></span>
                             <span class="path2"></span>
                         </i>
                     </span>
                     <span class="menu-title">Help</span>
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
                             <span class="menu-title">FAQ</span>
                             <span class="menu-arrow"></span>
                         </span>
                         <!--end:Menu link-->
                         <!--begin:Menu sub-->
                         <div class="menu-sub menu-sub-accordion menu-active-bg">
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="../dist/pages/faq/classic.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">FAQ Classic</span>
                                 </a>
                                 <!--end:Menu link-->
                             </div>
                             <!--end:Menu item-->
                             <!--begin:Menu item-->
                             <div class="menu-item">
                                 <!--begin:Menu link-->
                                 <a class="menu-link" href="../dist/pages/faq/extended.html">
                                     <span class="menu-bullet">
                                         <span class="bullet bullet-dot"></span>
                                     </span>
                                     <span class="menu-title">FAQ Extended</span>
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
         </div>
         <!--end::Sidebar menu-->

     </div>
     <!--end::Main-->
 </div>
 <!--end::Sidebar-->
