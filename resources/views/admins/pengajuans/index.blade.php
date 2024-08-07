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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Pengajuan</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Daftar Pengajuan</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">
                        Daftar Pengajuan</h1>
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
                        <input class="form-control form-control-solid" placeholder="Pick date range"
                            id="kt_daterangepicker_4" /></input>
                        <button type="button" id="filterButton" class="btn btn-primary">Filter</button>
                        <button type="button" id="resetFilterButton" class="btn btn-secondary">Reset</button>
                    </div>
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
                                <th class="min-w-150px">No_Nota</th>
                                <th class="text-end min-w-100px">penerima</th>
                                <th class="text-end min-w-100px">Tanggal</th>
                                <th class="text-end min-w-70px">Jumlah Barang</th>
                                <th class="text-end min-w-70px">Status</th>
                                <th class="text-end min-w-70px">Details</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>

                        </thead>
                        <tbody class="fw-semibold text-gray-600">

                            @foreach ($groupedPengajuan as $noNota => $items)
                                <tr data-bs-toggle="collapse" data-bs-target=".details{{ $noNota }}"
                                    aria-expanded="false" class="accordion-toggle">

                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                    data-kt-ecommerce-product-filter="product_name">{{ $noNota }}</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>


                                    <td class="text-end pe-0">

                                        {{ $items->first()->penerima }}

                                    </td>
                                    <td class="text-end pe-0">
                                        {{-- {{ \Carbon\Carbon::createFromTimestamp($items->first()->Tanggal)->formatLocalized('%d %b %Y') }} --}}

                                        {{ \Carbon\Carbon::parse($items->first()->tanggal)->formatLocalized('%d %b %Y') }}

                                    </td>

                                    <td class="text-end pe-0" data-order="34">
                                        <span class="fw-bold ms-3">{{ $items->count() }}</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        @switch($items->first()->status)
                                            @case(0)
                                                <div class="badge badge-light-info">Menunggu Konfirmasi</div>
                                            @break

                                            @case(1)
                                                <div class="badge badge-light-success">Disetujui</div>
                                            @break

                                            @case(2)
                                                <div class="badge badge-light-danger">Ditolak</div>
                                            @break

                                            @default
                                                <!-- Handle default case if needed -->
                                        @endswitch
                                    </td>

                                    <td class="text-end">
                                        <button type="button"
                                            class="btn btn-light btn-flex btn-center btn-active-light-primary"
                                            data-bs-toggle="modal" data-bs-target="#myModal{{ $noNota }}">
                                            Details <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                        </button>

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
                                                <a href="{{ route('pengajuan.edit', $noNota) }}" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="verifikasi_row">Verifikasi</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end::Table-->
                    <!--begin::Modal - Detail Barang-->

                    @foreach ($groupedPengajuan as $noNota => $items)
                        <div class="modal fade" id="myModal{{ $noNota }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Details for No Nota:
                                            {{ $noNota }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Kategori</th>
                                                    <th>Satuan</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($items as $item)
                                                    <tr>
                                                        <td>{{ $item->barang ? $item->barang->kode_barang : 'Tidak ditemukan' }}
                                                        </td>
                                                        <td>{{ $item->barang ? $item->barang->nama_barang : 'Tidak ditemukan' }}
                                                        </td>
                                                        <td>{{ $item->barang && $item->barang->kategori ? $item->barang->kategori->nama_kategori : 'Tidak ditemukan' }}
                                                        </td>
                                                        <td>{{ $item->barang && $item->barang->satuan ? $item->barang->satuan->nama_satuan : 'Tidak ditemukan' }}
                                                        </td>
                                                        <td>{{ $item->jumlah }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



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
                                                                        <select name="kode_barang" id="kode_barang"
                                                                            aria-label="Select a Country"
                                                                            data-control="selector_barang"
                                                                            data-placeholder="Pilih Barang"
                                                                            class="form-select form-select-solid form-select-lg fw-semibold"
                                                                            required title="Barang belum terpilih!">
                                                                            <option value="">Pilih barang...
                                                                            </option>
                                                                            @foreach ($select_barang as $sb)
                                                                                <option
                                                                                    data-kt-flag="flags/afghanistan.svg"
                                                                                    value="{{ $sb->kode_barang }}">
                                                                                    {{ $sb->kode_barang }}
                                                                                    - {{ $sb->nama_barang }}</option>
                                                                            @endforeach
                                                                        </select>

                                                                        <!--end::Select2-->
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label class="form-label">jumlah:</label>
                                                                        <input type="text" name="jumlah"
                                                                            id="jumlah" placeholder="jumlah"
                                                                            value="{{ old('jumlah') }}"
                                                                            class="form-control mb-2 mb-md-0"
                                                                            placeholder="Masukkan jumlah pengajuan"
                                                                            required title="jumlah tidak boleh kosong!">
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

                @if (isset($noNota))
                    <a href="{{ route('pengajuan.edit', $noNota) }}" class="menu-link px-3">Verifikasi</a>
                @else
                    <span class="menu-link px-3">Unavailable</span>
                @endif
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
    <script src="assets/js/pengajuan/admin/pengajuan.js"></script>
    <script>
        $(document).ready(function() {
            var start = moment().subtract(29, "days");
            var end = moment();

            function cb(start, end) {
                $("#kt_daterangepicker_4").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
            }

            $("#kt_daterangepicker_4").daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    "Today": [moment(), moment()],
                    "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
                    "Last 7 Days": [moment().subtract(6, "days"), moment()],
                    "Last 30 Days": [moment().subtract(29, "days"), moment()],
                    "This Month": [moment().startOf("month"), moment().endOf("month")],
                    "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1,
                        "month").endOf("month")]
                }
            }, cb);

            cb(start, end);

            // DataTable initialization
            const table = $('#myTable').DataTable({
                // DataTable configuration here
            });

            // Filter function
            function filterByDate(startDate, endDate) {
                $.fn.dataTable.ext.search.push(
                    function(settings, data, dataIndex) {
                        var date = moment(data[3], "YYYY-MM-DD"); // Use the date format in your column
                        if (
                            (startDate === null && endDate === null) ||
                            (startDate === null && date <= endDate) ||
                            (startDate <= date && endDate === null) ||
                            (startDate <= date && date <= endDate)
                        ) {
                            return true;
                        }
                        return false;
                    }
                );
                table.draw();
                $.fn.dataTable.ext.search.pop(); // Remove filter function after draw
            }

            // Apply the filter when a date range is selected
            $('#kt_daterangepicker_4').on('apply.daterangepicker', function(ev, picker) {
                var startDate = picker.startDate;
                var endDate = picker.endDate;
                filterByDate(startDate, endDate);
            });
        });
    </script>
@endsection
