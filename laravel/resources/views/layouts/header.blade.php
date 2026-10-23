<header>
    <h1 style="text-align: center; ">Welcome to My Website</h1>
<nav>
    <ul>
        <li class="{{ request()->is('/') ? 'active' : '' }}">
            <a href="{{ url('/') }}">Beranda</a>
        </li>
        <li class="{{ request()->is('datadiri') ? 'active' : '' }}">
            <a href="{{ url('/datadiri') }}">Data Diri</a>
        </li>
        <li class="{{ request()->is('aktivitas') ? 'active' : '' }}">
            <a href="{{ url('/aktivitas') }}">Aktivitas</a>
        </li>
        <li class="{{ request()->is('kontak') ? 'active' : '' }}">
            <a href="{{ url('/kontak') }}">Kontak</a>
        </li>
    </ul>
</nav>

<style>
    nav ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        gap: 20px;
    }

    nav ul li a {
        text-decoration: none;
        color: #000;
        font-weight: bold;
    }

    nav ul li.active a {
        color: #0337f5;
    }
</style>
</header>
