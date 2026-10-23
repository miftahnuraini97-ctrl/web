
<body>

    @include('layouts.header')

    <div class="container" style="text-align: center; margin-top: 20px;">
        <h2>Selamat Datang di Halaman Data Diri</h2>

       <img src="{{ asset('image/foto miftah.jpg') }}"
        alt="Foto Miftah"
        width="200"
        height="200"
        style="border-radius: 50%;
                object-fit: cover;
                object-position: center;">

        <p>Berikut adalah informasi tentang saya:</p>

        <ul style="list-style-type: none; padding: 0;">
            <li>Nama: Miftah Nur Aini Sholihah</li>
            <li>Umur: 21 tahun</li>
            <li>Status: Mahasiswa</li>
        </ul>
    </div>

    @include('layouts.footer')

</body>
