@extends('layouts.main.main')

@section('kt_app_content_container')
<!--begin::Content container-->
<div id="kt_app_content_container" class="app-container container-fluid">
    <!--begin::Products-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-150px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="Barang Masuk">Barang Masuk</option>
                        <option value="Barang Keluar">Barang Keluar</option>
                        <option value="Barang Rusak">Barang Rusak</option>
                    </select>
                    <!--end::Select2-->
                </div>
                <!--begin::Add product-->
                <a href="{{ route('admins.add.add-product') }}" class="btn btn-primary">Add Product</a>
                <!--end::Add product-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="min-w-200px">Nama Barang</th>
                        <th class="text-end min-w-100px">Kode Barang</th>
                        <th class="text-end min-w-70px">No Nota</th>
                        <th class="text-end min-w-100px">Satuan</th>
                        <th class="text-end min-w-100px">Harga</th>
                        <th class="text-end min-w-100px">Tanggal</th>
                        <th class="text-end min-w-100px">Qty</th>
                        <th class="text-end min-w-100px">Total (Rp)</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/1.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Barang Masuk</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04588004</span>
                        </td>
                        <td class="text-end pe-0" data-order="34">
                            <span class="fw-bold ms-3">34</span>
                        </td>
                        <td class="text-end pe-0">57</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/2.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03307007</span>
                        </td>
                        <td class="text-end pe-0" data-order="11">
                            <span class="fw-bold ms-3">11</span>
                        </td>
                        <td class="text-end pe-0">194</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/3.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03391001</span>
                        </td>
                        <td class="text-end pe-0" data-order="48">
                            <span class="fw-bold ms-3">48</span>
                        </td>
                        <td class="text-end pe-0">246</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/4.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04928003</span>
                        </td>
                        <td class="text-end pe-0" data-order="4">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">4</span>
                        </td>
                        <td class="text-end pe-0">74</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/5.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02942001</span>
                        </td>
                        <td class="text-end pe-0" data-order="20">
                            <span class="fw-bold ms-3">20</span>
                        </td>
                        <td class="text-end pe-0">66</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/6.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04767008</span>
                        </td>
                        <td class="text-end pe-0" data-order="21">
                            <span class="fw-bold ms-3">21</span>
                        </td>
                        <td class="text-end pe-0">31</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/7.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04170002</span>
                        </td>
                        <td class="text-end pe-0" data-order="15">
                            <span class="fw-bold ms-3">15</span>
                        </td>
                        <td class="text-end pe-0">66</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/8.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02375006</span>
                        </td>
                        <td class="text-end pe-0" data-order="38">
                            <span class="fw-bold ms-3">38</span>
                        </td>
                        <td class="text-end pe-0">15</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/9.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04132007</span>
                        </td>
                        <td class="text-end pe-0" data-order="28">
                            <span class="fw-bold ms-3">28</span>
                        </td>
                        <td class="text-end pe-0">267</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/10.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03562001</span>
                        </td>
                        <td class="text-end pe-0" data-order="21">
                            <span class="fw-bold ms-3">21</span>
                        </td>
                        <td class="text-end pe-0">188</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/11.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03157001</span>
                        </td>
                        <td class="text-end pe-0" data-order="39">
                            <span class="fw-bold ms-3">39</span>
                        </td>
                        <td class="text-end pe-0">243</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Barang Rusak</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/12.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03584003</span>
                        </td>
                        <td class="text-end pe-0" data-order="16">
                            <span class="fw-bold ms-3">16</span>
                        </td>
                        <td class="text-end pe-0">257</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/13.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 13</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03377006</span>
                        </td>
                        <td class="text-end pe-0" data-order="3">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">3</span>
                        </td>
                        <td class="text-end pe-0">151</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/14.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 14</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01514006</span>
                        </td>
                        <td class="text-end pe-0" data-order="31">
                            <span class="fw-bold ms-3">31</span>
                        </td>
                        <td class="text-end pe-0">279</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Barang Masuk</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/15.gif);"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 15</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04778001</span>
                        </td>
                        <td class="text-end pe-0" data-order="28">
                            <span class="fw-bold ms-3">28</span>
                        </td>
                        <td class="text-end pe-0">221</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Barang Keluar</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>

                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->
</div>
<!--end::Content container-->

@stop