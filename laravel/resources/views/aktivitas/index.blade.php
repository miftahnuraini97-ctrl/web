<body>

    @include('layouts.header')

    <div class="container" style="text-align: center; margin-top: 20px;">
        <h2>Selamat Datang di Halaman Aktivitas</h2>
    </div>
        <div class="container mt-5 mb-5">
        <p>Daftar Aktivitas:</p>
         <a href="{{ route('aktivitas.create') }}" class="btn btn-primary mb-3"> + Tambah Aktivitas</a>
        <table class="table table-bordered mt-3" border="1">
            <thead>
                <tr>
                    <th>Nama Aktivitas</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aktivitas as $item)
                    <tr>
                        <td>{{ $item->nama_aktivitas }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>                        <td>{{ $item->status ? 'Selesai' : 'Belum Selesai' }}</td>
                        <td>
                            <a href="{{ route('aktivitas.show', $item->id) }}" class="btn btn-info">Lihat</a>
                            <a href="{{ route('aktivitas.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('aktivitas.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus aktivitas ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul style="list-style-type: none; padding: 0;">
        </ul>
        </div>

@include('layouts.footer')

</body>
