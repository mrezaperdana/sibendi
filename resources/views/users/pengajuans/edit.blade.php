@section('content-wrapper')
    <div class="container">
        <div class="accordion" id="accordionExample">
            @foreach ($groupedPengajuan as $noNota => $items)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $noNota }}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $noNota }}" aria-expanded="true" aria-controls="collapse{{ $noNota }}">
                            No Nota: {{ $noNota }} - Tanggal: {{ $items->first()->Tanggal }} - Jumlah Barang: {{ $items->count() }}
                        </button>
                    </h2>
                    <div id="collapse{{ $noNota }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $noNota }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                @foreach ($items as $item)
                                    <li>{{ $item->Kode_Barang }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
