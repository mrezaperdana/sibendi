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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Admins</li>
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
                action="{{ route('barangs.store') }}">
                @csrf
                <!--begin::Aside column-->
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10"
                    data-select2-id="select2-data-137-2hkf">
                    <!--begin::Thumbnail settings-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Gambar</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body text-center pt-0">
                            <!--begin::Image input-->
                            <!--begin::Image input placeholder-->
                            <style>
                                .image-input-placeholder {
                                    background-image: url('/saul-html-pro/assets/media/svg/files/blank-image.svg');
                                }

                                [data-bs-theme="dark"] .image-input-placeholder {
                                    background-image: url('/saul-html-pro/assets/media/svg/files/blank-image-dark.svg');
                                }
                            </style>
                            <!--end::Image input placeholder-->

                            <!--begin::Image input-->
                            <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                data-kt-image-input="true">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-150px h-150px"></div>
                                <!--end::Preview existing avatar-->

                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
                                    data-bs-original-title="Change avatar" data-kt-initialized="1">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span
                                            class="path2"></span></i> <!--end::Icon-->

                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="avatar_remove">
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->

                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
                                    data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <!--end::Cancel-->

                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
                                    data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Pilih gambar untuk barang yang akan ditambahkan. Hanya *.png, *.jpg
                                dan *.jpeg dengan ukuran kurang dari 1mb.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Thumbnail settings-->
                    <!--begin::Status-->
                    <div class="card card-flush py-4" data-select2-id="select2-data-136-zo2i">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Kategori</h2>
                            </div>
                            <!--end::Card title-->

                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <div class="rounded-circle w-15px h-15px bg-success" id="kt_ecommerce_add_category_status">
                                </div>
                            </div>
                            <!--begin::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0" data-select2-id="select2-data-135-xnvf">
                            <!--begin::Select2-->
                            <select name="Kategori" id="Kode_Barang" aria-label="Select a Country" data-control="select2"
                                data-placeholder="Pilih kategori"
                                class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Pilih kategori...</option>
                                <option data-kt-flag="flags/afghanistan.svg" value="Alat Tulis">Alat Tulis</option>
                                <option data-kt-flag="flags/aland-islands.svg" value="Perlengkapan">Perlengkapan</option>
                                <option data-kt-flag="flags/albania.svg" value="Kuesioner">Kuesioner</option>

                            </select>

                            <!--end::Select2-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Pilih kategori barang</div>
                            <!--end::Description-->

                            <!--begin::Datepicker-->
                            <div class="mt-10 d-none">
                                <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">Select
                                    publishing date and time</label>
                                <input class="form-control flatpickr-input"
                                    id="kt_ecommerce_add_category_status_datepicker" placeholder="Pick date &amp; time"
                                    type="text" readonly="readonly">
                            </div>
                            <!--end::Datepicker-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Status-->

                </div>
                <!--end::Aside column-->

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

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Kode Barang</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="Kode_Barang" id="Kode_Barang" class="form-control mb-2"
                                    placeholder="Kode barang" value="{{ old('Kode_Barang') }}">
                                <!--end::Input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Kode barang wajib diisi dan harus unik.
                                </div>
                                <!--end::Description-->
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Nama Barang</label>
                                <!--end::Label-->

                                <!--begin::Input-->

                                <input type="text" name="Nama_Barang" id="Nama_Barang" class="form-control mb-2"
                                    placeholder="Nama barang" value="{{ old('Nama_Barang') }}">
                                <!--end::Input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Nama barang wajib diisi dan harus unik.
                                </div>
                                <!--end::Description-->
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Satuan</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="Unit" id="Unit" class="form-control mb-2"
                                    placeholder="Satuan" value="{{ old('Unit') }}">
                                <!--end::Input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Satuan Harus diisi.
                                </div>
                                <!--end::Description-->
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Harga Satuan</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="Harga_Satuan" id="Harga_Satuan" class="form-control mb-2"
                                    placeholder="Satuan" value="{{ old('Harga_Satuan') }}">
                                <!--end::Input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Harga satuan sebaiknya berisi minimal Rp 1.
                                </div>
                                <!--end::Description-->
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Input group-->
                            {{-- <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Stok Barang</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="category_name" class="form-control mb-2"
                                    placeholder="Stok barang" value="">
                                <!--end::Input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Jika barang tidak tersedia isikan 0 (nol).
                                </div>
                                <!--end::Description-->
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Input group--> --}}

                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->

                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="/saul-html-pro/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel"
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
