<div class="card">

    <h3>{{ $item['lokasi'] }}</h3>

    <p>
        <strong>Nama Pelapor:</strong>
        {{ $item['nama'] }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $item['tinggi'] }} cm
    </p>

    <p>
        <strong>Status:</strong>

        @if ($item['tinggi'] < 30)
            Waspada
        @elseif ($item['tinggi'] <= 70)
            Siaga
        @else
            Awas
        @endif
    </p>

</div>