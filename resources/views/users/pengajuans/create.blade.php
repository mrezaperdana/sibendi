@extends('layouts.main.users.main')

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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">users</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Stocks</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700">Tambah Barang</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">Tambah
                        Barang</h1>
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
        <div id="kt_app_content_container" class="app-container  container-fluid "
            data-select2-id="select2-data-kt_app_content_container">
            <form id="kt_ecommerce_add_category_form"
                class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
                data-kt-redirect="/saul-html-pro/apps/ecommerce/catalog/categories.html"
                data-select2-id="select2-data-kt_ecommerce_add_category_form" method="POST"
                action="{{ route('pengajuans.store') }}">
                @csrf

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>General</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Repeater-->
                                <div id="kt_docs_repeater_basic">
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div data-repeater-list="kt_docs_repeater_basic">
                                            <div data-repeater-item="" style="">
                                                <div class="form-group row mb-5">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Kode - Nama Barang:</label>
                                                        <!--begin::Select2-->
                                                        <select name="Kode_Barang" id="Kode_Barang"
                                                            aria-label="Select a Country" data-control="selector_barang"
                                                            data-placeholder="Pilih Barang"
                                                            class="form-select form-select-solid form-select-lg fw-semibold">
                                                            <option value="">Pilih barang...</option>
                                                            @foreach ($select_barang as $sb)
                                                                <option data-kt-flag="flags/afghanistan.svg"
                                                                    value="{{ $sb->Kode_Barang }}">{{ $sb->Kode_Barang }}
                                                                    - {{ $sb->Nama_Barang }}</option>
                                                            @endforeach
                                                        </select>

                                                        <!--end::Select2-->
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label class="form-label">Jumlah:</label>
                                                        <input type="text" name="Jumlah" id="Jumlah"
                                                            placeholder="Jumlah" value="{{ old('Jumlah') }}"
                                                            class="form-control mb-2 mb-md-0"
                                                            placeholder="Masukkan jumlah pengajuan">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <a href="javascript:;" data-repeater-delete=""
                                                            class="btn btn-sm btn-flex flex-center btn-light-danger mt-3 mt-md-9">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span class="path2"></span><span
                                                                    class="path3"></span><span class="path4"></span><span
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

                    </div>
                    <!--end::General options-->

                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('users.pengajuans') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">
                            Batal
                        </a>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Simpan
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
@stop
