<html>
    <head>
        <title>OHR : @yield('judul_halaman')</title>
        @include('layouts.adstyle')
    </head>
<body>
    <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
              <div class="sidebar-heading"> Admin </div>
              <div class="list-group list-group-flush">
                <a href="listrs" class="list-group-item list-group-item-action bg-light">List Rumah Sakit</a>
                <a href="listdokter" class="list-group-item list-group-item-action bg-light">List Dokter</a>
                <a href="listrev" class="list-group-item list-group-item-action bg-light">List Reservasi</a>
                <a href="tambahdokter" class="list-group-item list-group-item-action bg-light">Tambah Dokter</a>
                <a href="tambahrs" class="list-group-item list-group-item-action bg-light">Tambah Rumah Sakit</a>
                <a href="caridokter" class="list-group-item list-group-item-action bg-light">Cari Dokter</a>
                <a href="carirs" class="list-group-item list-group-item-action bg-light">Cari Rumah Sakit</a>
                <a href="carirev" class="list-group-item list-group-item-action bg-light">Cari Pesanan</a>
                <hr>
                <a href="admin-logout" class="list-group-item list-group-item-action bg-light">Logout</a>
              </div>
            </div>
        
            <div class="container-fluid">
                @yield('konten')
            </div>
            </div>
        </div>
</body>
</html>