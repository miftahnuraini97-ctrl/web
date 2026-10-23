
<body>
    @include('layouts.header')

    <div class="container mt-5 mb-5">
        <h2>Detail Aktivitas</h2>

        <div class="card">
            <div class="card-body">
                <p class="card-text">
                    <strong>Nama Aktivitas:</strong>
                    {{ $aktivitas->nama_aktivitas }}
                </p>

                <p class="card-text">
                    <strong>Deskripsi:</strong>
                    {{ $aktivitas->deskripsi }}
                </p>

                <p class="card-text">
                    <strong>Tanggal:</strong>
                    {{ $aktivitas->tanggal }}
                </p>

                <p class="card-text">
                    <strong>Status:</strong>
                    {{ $aktivitas->status ? 'Selesai' : 'Belum Selesai' }}
                </p>
            </div>
        </div>

        <a href="{{ route('aktivitas.index') }}"
           class="btn btn-secondary mt-3">
            Kembali ke Daftar Aktivitas
        </a>
    </div>

    @include('layouts.footer')
</body>
