@extends('layouts.main.admins.main')

@section('content-wrapper')
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
                            <a href="../dist/index.html" class="text-gray-500">
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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Admin</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Master Barang</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Daftar Stok Barang</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">
                        Daftar Stok Barang</h1>
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
                            <input type="text" data-kt-ecommerce-product-filter="search"
                                class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <div class="w-100 mw-150px">
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                                <option></option>
                                <option value="all">All</option>

                                <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                                <option value="Disetujui">Disetujui</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                            <!--end::Select2-->
                        </div>



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
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                            value="1" />
                                    </div>
                                </th>
                                <th class="min-w-150px">Nama Barang</th>
                                <th class="min-w-150px">Kategori</th>
                                <th class="min-w-100px">Satuan</th>
                                <th class="min-w-150px">Stok</th>
                                <th class="min-w-100px">Keterangan</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>

                        </thead>
                        <tbody class="fw-semibold text-gray-600">

                         
                        </tbody>
                    </table>
                    <!--end::Table-->
                    <!--begin::Modal - Detail Barang-->
                 
                    <!--end::Modal - Detail Barang-->

                    <!--begin::Modal - Customers - Add-->
                    <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-800px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Form-->
                                <form class="form" method="POST" action="{{ route('pengajuans.store') }}"
                                    id="kt_modal_add_customer_form">
                                    @csrf
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_customer_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Buat Pengajuan Baru</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div id="kt_modal_add_customer_close"
                                            class="btn btn-icon btn-sm btn-active-icon-primary">
                                            <i class="ki-duotone ki-cross fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body py-10 px-lg-17">
                                        <!--begin::Scroll-->
                                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll"
                                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                            data-kt-scroll-max-height="auto"
                                            data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                            data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                            data-kt-scroll-offset="300px">
                                            <!--end::Card header-->

                                            <div class="rounded border p-10">
                                                <!--begin::Repeater-->
                                                <div id="kt_docs_repeater_basic">
                                                    <!--begin::Form group-->
                                                    <div class="form-group">
                                                        <div data-repeater-list="kt_docs_repeater_basic">
                                                            <div data-repeater-item="" style="">
                                                                <div class="form-group row mb-5">
                                                                    <div class="col-md-7">
                                                                        <label class="form-label">Kode - Nama
                                                                            Barang:</label>
                                                                        <!--begin::Select2-->
                                                                        <select name="Kode_Barang" id="Kode_Barang"
                                                                            aria-label="Select a Country"
                                                                            data-control="selector_barang"
                                                                            data-placeholder="Pilih Barang"
                                                                            class="form-select form-select-solid form-select-lg fw-semibold"
                                                                            required title="Barang belum terpilih!">
                                                                            <option value="">Pilih barang...
                                                                            </option>
                                                                           
                                                                        </select>

                                                                        <!--end::Select2-->
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label class="form-label">Jumlah:</label>
                                                                        <input type="text" name="Jumlah"
                                                                            id="Jumlah" placeholder="Jumlah"
                                                                            value="{{ old('Jumlah') }}"
                                                                            class="form-control mb-2 mb-md-0"
                                                                            placeholder="Masukkan jumlah pengajuan"
                                                                            required title="Jumlah tidak boleh kosong!">
                                                                    </div>

                                                                    <div class="col-md-2">
                                                                        <a href="javascript:;" data-repeater-delete=""
                                                                            class="btn btn-sm btn-flex flex-center btn-light-danger mt-3 mt-md-9">
                                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                                    class="path1"></span><span
                                                                                    class="path2"></span><span
                                                                                    class="path3"></span><span
                                                                                    class="path4"></span><span
                                                                                    class="path5"></span></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Form group-->

                                                    <!--begin::Form group-->
                                                    <div class="form-group">
                                                        <a href="javascript:;" data-repeater-create=""
                                                            class="btn btn-flex flex-center btn-light-primary">
                                                            <i class="ki-duotone ki-plus fs-3"></i> Tambah Barang
                                                        </a>
                                                    </div>
                                                    <!--end::Form group-->
                                                </div>
                                                <!--end::Repeater-->
                                            </div>



                                        </div>
                                        <!--end::Scroll-->
                                    </div>
                                    <!--end::Modal body-->
                                    <!--begin::Modal footer-->
                                    <div class="modal-footer flex-center">
                                        <!--begin::Button-->
                                        <button type="reset" id="kt_modal_add_customer_cancel"
                                            class="btn btn-light me-3">Discard</button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Modal footer-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                    </div>
                    <!--end::Modal - Customers - Add-->
                </div>
                <!--end::Card body-->

            </div>
            <!--end::Products-->
        </div>
        <!--end::Content container-->

    </div>
    <!--end::Content-->
    <td class="text-end">
        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
            <i class="ki-duotone ki-down fs-5 ms-1"></i>
        </a>
        <!--begin::Menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="" class="menu-link px-3">Verifikasi</a>
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
@endsection
@section('script')
    <script src="assets/js/pengajuan/admin/products.js"></script>
@endsection
