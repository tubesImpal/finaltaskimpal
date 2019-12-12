<!DOCTYPE html>
<html>
<head>
	<title>Online Health Reservation | {{ $pesanan->nama_pasien }}</title>
</head>
<body>
	<center>
		<h2>Online Health Reservation</h2>
    </center>
    <hr>

    <br><br><br>
    <center>
            <h4>Nama Pasien : {{ $pesanan->nama_pasien }}</h4>
            <h4>Nama Dokter : {{ $pesanan->nama_dokter }}</h4>
            <h4>Jam         : {{ $pesanan->jam_praktik }}</h4>
            <h4>Rumah Sakit : {{ $pesanan->rs_praktik }}</h4>
            <h4>Tanggal     : {{ $pesanan->tglrev }}</h4>
            <h1>Antrian     : {{ $pesanan->id_pesan }}</h1>
    </center>
    <br><br><br>
    <hr>
    <center>
        <h5>Terimakasih telah reservasi di Online Health Reservation</h5>
    </center>

</body>
</html>