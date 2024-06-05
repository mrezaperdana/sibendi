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
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Pengajuan</li>
                        <!--end::Item-->
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">{{$noNota}}</li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">
                        Kode Pengajuan: {{$noNota}}</h1>
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



                <!--begin::Card body-->
                <div class="card-body ">
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1" role="tabpanel">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="ps-0 w-50px">BARANG</th>
                                            <th class="min-w-125px"></th>
                                            <th class="text-end min-w-100px">PENERIMA</th>
                                            <th class="text-end min-w-100px">TANGGAL</th>
                                            <th class="text-end min-w-100px">JUMLAH</th>
                                            <th class=" text-end min-w-100px">HARGA SATUAN</th>
                                            <th class=" text-end min-w-100px">TOTAL HARGA</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>

                                        @foreach ($result as $d)
                                            <tr>
                                                <td>
                                                    <img src="assets/media/stock/ecommerce/210.gif" class="w-50px ms-n1"
                                                        alt="">
                                                </td>
                                                <td class="ps-0">
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">{{ $d->Nama_Barang }}</a>
                                                    <span
                                                        class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Kode:
                                                        {{ $d->Kode_Barang }}</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">{{ $d->Penerima }}</span>
                                                </td>
                                                <td>

                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">
                                                        {{ \Carbon\Carbon::parse($d->Tanggal)->formatLocalized('%d %b %Y') }}</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">{{ $d->Jumlah }}</span>
                                                </td>

                                                <td>
                                                    <span
                                                        class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">{{ $d->Harga_Satuan }}</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">{{ $d->totalPrice }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td>

                                            </td>
                                            <td class="ps-0">

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>

                                            <td>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end"> SUB TOTAL =
                                                    {{ $totalPriceSum }}</span>
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
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->

            <div class="d-flex justify-content-end mt-5">
                <form method="POST" action="{{ route('pengajuan.tolak', $noNota) }}" id="form-tolak">
                    @csrf
                    @method('PATCH')
                    <!-- Other form fields or hidden inputs if needed -->

                    <button type="submit" class="btn btn-danger me-5" id="kt_ecommerce_add_category_submit">
                        <span class="indicator-label">
                            Tolak Permintaan
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </form>
                <form method="POST" action="{{ route('pengajuan.confirm', $noNota) }}" id="form-confirm">
                    @csrf
                    @method('PATCH')
                    <!-- Other form fields or hidden inputs if needed -->

                    <button type="submit" class="btn btn-success me-5" id="kt_ecommerce_add_category_submit">
                        <span class="indicator-label">
                            Setujui
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </form>
                
                

                {{-- <form class="form" method="POST" action="{{ route('pengajuan.setuju'), $totalPriceSum }}"
                    id="kt_modal_add_customer_form">
                    @csrf
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-success">
                        <span class="indicator-label">
                            Setujui
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </form> --}}
            </div>


        </div>
        <!--end::Content container-->

    </div>
    <!--end::Content-->
@endsection
@section('script')
    <script src="assets/js/pengajuan/admin/products.js"></script>
@endsection
