@extends('layouts.main.admins.main')

@section('content-wrapper')
    @include('skipped_items', ['skippedItems' => session('skippedItems', [])])

    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-5">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <!--begin::Toolbar wrapper-->
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column gap-1 me-3 mb-2">
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                            <a href="/" class="text-gray-500">
                                <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Admins</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Dashboards</li>
                        <!--end::Item-->


                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">
                        Admin Dashboard</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->

            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5">
                <!--begin::Col-->
                <div class="col-xl-12 ">
                    <!--begin::Lists Widget 19-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Hero-->
                        <div class="position-relative mb-17">
                            <!--begin::Overlay-->
                            <div class="overlay overlay-show">
                                <!--begin::Image-->
                                <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px"
                                    style="background-image:url('assets/media/svg/shapes/top-green.png')"></div>
                                <!--end::Image-->
                                <!--begin::layer-->
                                <div class="overlay-layer rounded bg-black" style="opacity: 0.4"></div>
                                <!--end::layer-->
                            </div>
                            <!--end::Overlay-->
                            <!--begin::Heading-->
                            <div class="position-absolute text-white mb-8 ms-10 bottom-0">
                                <!--begin::Title-->
                                <h3 class="text-white fs-2qx fw-bold mb-3 m">Halo, {{Auth::user()->name}}</h3>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fs-4 text-grey-400">
                                    <span class="opacity-75">You have</span>

                                    <span class="position-relative d-inline-block">
                                        <a href="/saul-html-pro/pages/user-profile/projects.html"
                                            class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>

                                        <!--begin::Separator-->
                                        <span
                                            class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                        <!--end::Separator-->
                                    </span>

                                    <span class="opacity-75">to complete</span>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Heading-->
                        </div>
                        <!--end::-->


                        <!--begin::Body-->
                        <div class="card-body pt-6">

                            <!--begin::Stats-->
                            <div class="mt-n20 position-relative">
                                <!--begin::Row-->
                                <div class="row g-3 g-lg-6">
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <!--begin::Items-->
                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5 mb-8">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-flask fs-1 text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Stats-->
                                            <div class="m-0">
                                                <!--begin::Number-->
                                                <span
                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                                <!--end::Number-->

                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-6">Courses</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <!--begin::Items-->
                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5 mb-8">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-bank fs-1 text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Stats-->
                                            <div class="m-0">
                                                <!--begin::Number-->
                                                <span
                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                                <!--end::Number-->

                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-6">Certificates</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <!--begin::Items-->
                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5 mb-8">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-award fs-1 text-primary"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Stats-->
                                            <div class="m-0">
                                                <!--begin::Number-->
                                                <span
                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                                <!--end::Number-->

                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-6">Avg. Score</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-3">
                                        <!--begin::Items-->
                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5 mb-8">
                                                <span class="symbol-label">
                                                    <i class="ki-duotone ki-timer fs-1 text-primary"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->

                                            <!--begin::Stats-->
                                            <div class="m-0">
                                                <!--begin::Number-->
                                                <span
                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                                <!--end::Number-->

                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-6">Pengguna</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Col-->


                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Lists Widget 19-->
                </div>
                <!--end::Col-->
            </div>

            <!--end::Row-->

            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Tables widget 16-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Statistik Barang</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 69.34% Conv. Rate</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                            Quick Actions
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-6">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom mb-3">
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active"
                                        id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                        href="#kt_stats_widget_16_tab_1">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-car fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Semua</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                        id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill"
                                        href="#kt_stats_widget_16_tab_2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-bitcoin fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Masuk</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                        id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill"
                                        href="#kt_stats_widget_16_tab_3">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-like fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Keluar</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                        id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill"
                                        href="#kt_stats_widget_16_tab_4">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-tablet fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Rusak</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                    <th class="p-0 pb-3 min-w-150px text-start">
                                                        ITEM
                                                    </th>
                                                    <th class="p-0 pb-3 min-w-100px text-end pe-13">
                                                        PERSEN
                                                    </th>
                                                    <th class="p-0 pb-3 w-125px text-end pe-7">
                                                        CHART
                                                    </th>
                                                    <th class="p-0 pb-3 w-50px text-end">
                                                        VIEW
                                                    </th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy
                                                                    Hawkins</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">7.34%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_1_1" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
                                                                    Cooper</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">63.83%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_1_2" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="danger"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                    Jones</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">92.56%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_1_3" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_16_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                    <th class="p-0 pb-3 min-w-150px text-start">
                                                        ITEM
                                                    </th>
                                                    <th class="p-0 pb-3 min-w-100px text-end pe-13">
                                                        PERSEN
                                                    </th>
                                                    <th class="p-0 pb-3 w-125px text-end pe-7">
                                                        CHART
                                                    </th>
                                                    <th class="p-0 pb-3 w-50px text-end">
                                                        VIEW
                                                    </th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-25.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                                    Simmons</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">85.23%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_2_1" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-24.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                    Howard</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">74.83%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_2_2" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="danger"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-20.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette
                                                                    Black</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">90.06%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_2_3" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_16_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                    <th class="p-0 pb-3 min-w-150px text-start">
                                                        ITEM
                                                    </th>
                                                    <th class="p-0 pb-3 min-w-100px text-end pe-13">
                                                        PERSEN
                                                    </th>
                                                    <th class="p-0 pb-3 w-125px text-end pe-7">
                                                        CHART
                                                    </th>
                                                    <th class="p-0 pb-3 w-50px text-end">
                                                        VIEW
                                                    </th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-11.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                    Jones</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">New
                                                                    York</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">52.34%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_3_1" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald
                                                                    Richards</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Madrid</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">77.65%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_3_2" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="danger"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-4.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie
                                                                    Alexander</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Pune</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">82.47%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_3_3" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_16_tab_4">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                    <th class="p-0 pb-3 min-w-150px text-start">
                                                        ITEM
                                                    </th>
                                                    <th class="p-0 pb-3 min-w-100px text-end pe-13">
                                                        PERSEN
                                                    </th>
                                                    <th class="p-0 pb-3 w-125px text-end pe-7">
                                                        CHART
                                                    </th>
                                                    <th class="p-0 pb-3 w-50px text-end">
                                                        VIEW
                                                    </th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-12.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene
                                                                    McCoy</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">London</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">53.44%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_4_1" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-21.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                    McKinneyr</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">74.64%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_4_2" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="danger"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-30.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                    Jones</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">PManila</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">88.56%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_4_3" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_16_tab_5">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                    <th class="p-0 pb-3 min-w-150px text-start">
                                                        AUTHOR
                                                    </th>
                                                    <th class="p-0 pb-3 min-w-100px text-end pe-13">
                                                        CONV.
                                                    </th>
                                                    <th class="p-0 pb-3 w-125px text-end pe-7">
                                                        CHART
                                                    </th>
                                                    <th class="p-0 pb-3 w-50px text-end">
                                                        VIEW
                                                    </th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
                                                                    Cooper</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">68.54%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_5_1" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-10.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                    Howard</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Kiribati</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">55.83%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_5_2" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="danger"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                    Jones</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">93.46%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_5_3" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="../dist/pages/user-profile/overview.html"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph
                                                                    Edwards</a>
                                                                <span
                                                                    class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-13">
                                                        <span class="text-gray-600 fw-bold fs-6">64.48%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_16_chart_5_4" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--end::Table container-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Tables widget 16-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Chart widget 5-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Header-->
                        <div class="card-header flex-nowrap pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-dark">Kategori Paling Dicari</span>
                                <span class="text-gray-400 pt-2 fw-semibold fs-6">8k social visitors</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                            Quick Actions
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5 ps-6">
                            <div id="kt_charts_widget_5" class="min-h-auto"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List widget 6-->
                    <div class="card card-flush h-md-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Top Selling Products</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light">View All</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="p-0 w-50px pb-1">ITEM</th>
                                            <th class="ps-0 min-w-140px"></th>
                                            <th class="text-end min-w-140px p-0 pb-1">
                                                TOTAL PRICE
                                            </th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>

                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/media/stock/ecommerce/210.gif') }}" class="w-50px"
                                                    alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                    1802</a>
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item:
                                                    #XDG-2347</span>
                                            </td>
                                            <td>
                                                <span
                                                    class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$72.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/media/stock/ecommerce/215.gif') }}" class="w-50px"
                                                    alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                    Laga</a>
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item:
                                                    #XDG-2347</span>
                                            </td>
                                            <td>
                                                <span
                                                    class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$45.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/media/stock/ecommerce/209.gif') }}" class="w-50px"
                                                    alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item:
                                                    #XDG-2347</span>
                                            </td>
                                            <td>
                                                <span
                                                    class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$168.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/media/stock/ecommerce/214.gif') }}" class="w-50px"
                                                    alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Yellow
                                                    Stone</a>
                                                <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item:
                                                    #XDG-2347</span>
                                            </td>
                                            <td>
                                                <span
                                                    class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$72.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 6-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->

    </div>
    <!--end::Content-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            var skippedItems = @json(session('skippedItems', []));

            console.log(skippedItems); // Log skipped items to console

            if (skippedItems.length > 0) {
                $('#skippedItemsModal').modal('show');
            }
        });
    </script>
@stop

@section('script')
    <script src="{{ asset('assets/js/pengajuan/products.js') }}"></script>
@endsection
