@extends('layouts.main.admins.main')

@section('custom-css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection
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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Daftar Kategori</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">
                        Daftar Kategori</h1>
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
                        <a href="{{ route('admin.kategori.create') }}" class="btn btn-sm btn-success ms-3 px-4 py-3">
                            Tambah Kategori
                        </a>



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
                                <th class="min-w-150px">Nama Kategori</th>
                                <th class="text-end min-w-100px">Keterangan</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>

                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            @foreach ($kategori as $item)
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="" class="text-gray-800 text-hover-primary800 fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">{{ $item->nama_kategori }}</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end pe-0">
                                        {{ $item->keterangan }}
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('admin.kategori.edit', ['kode_kategori' => $item->kode_kategori]) }}"
                                                    class="menu-link px-3">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <!-- Adjusted Menu item with SweetAlert2 confirmation -->
                                            <div class="menu-item px-3">
                                                <!-- Link to trigger SweetAlert2 confirmation -->
                                                <a href="javascript:void(0)" class="menu-link px-3"
                                                    onclick="confirmDelete('{{ $item->kode_kategori }}', '{{ $item->nama_kategori }}')">Delete</a>
                                            </div>

                                            <!-- Form for deletion -->
                                            <form id="delete-form-{{ $item->kode_kategori }}"
                                                action="{{ route('admin.kategori.destroy', ['kode_kategori' => $item->kode_kategori]) }}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!--end::Table-->

                </div>
                <!--end::Card body-->

            </div>
            <!--end::Products-->
        </div>
        <!--end::Content container-->

    </div>
    <!--end::Content-->
@endsection
@section('script')
    <script src="assets/js/admin/kategori/products.js"></script>
    
<script>
    // Function to confirm deletion using SweetAlert2
    function confirmDelete(kode_kategori, nama_kategori) {
 

        Swal.fire({

            text: "Are you sure you want to delete " + nama_kategori + "?",
            icon: 'warning',
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
            customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-primary",
                    },
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form programmatically
                document.getElementById('delete-form-' + kode_kategori).submit();
            }
        });
    }
</script>
@endsection
