<body>
    @include('layouts.header')

    <div class="container mt-5 mb-5">
        <h2>Edit Aktivitas</h2>

        <form action="{{ route('aktivitas.update', $aktivitas->id) }}"
              method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_aktivitas">Nama Aktivitas</label>
                <input type="text"
                       class="form-control"
                       id="nama_aktivitas"
                       name="nama_aktivitas"
                       value="{{ old('nama_aktivitas', $aktivitas->nama_aktivitas) }}"
                       required>
            </div>

            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control"
                          id="deskripsi"
                          name="deskripsi"
                          required>{{ old('deskripsi', $aktivitas->deskripsi) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="tanggal">Tanggal</label>
                <input type="date"
                       class="form-control"
                       id="tanggal"
                       name="tanggal"
                       value="{{ old('tanggal', $aktivitas->tanggal) }}"
                       required>
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan Perubahan
            </button>

            <a href="{{ route('aktivitas.index') }}" class="btn btn-secondary">
                Batal
            </a>
        </form>
    </div>

    @include('layouts.footer')
</body>
