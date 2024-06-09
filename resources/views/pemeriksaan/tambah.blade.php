<!-- resources/views/pemeriksaan/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pemeriksaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Pemeriksaan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pemeriksaan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_pemilik">Nama Pemilik:</label>
            <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" required>
        </div>
        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
        </div>
        <div class="form-group">
            <label for="klinik">Klinik:</label>
            <input type="text" class="form-control" id="klinik" name="klinik" required>
        </div>
        <div class="form-group">
            <label for="nama_hewan">Nama Hewan:</label>
            <input type="text" class="form-control" id="nama_hewan" name="nama_hewan" required>
        </div>
        <div class="form-group">
            <label for="jenis_hewan">Jenis Hewan:</label>
            <input type="text" class="form-control" id="jenis_hewan" name="jenis_hewan" required>
        </div>
        <div class="form-group">
            <label for="jam_temu">Jam Temu:</label>
            <input type="time" class="form-control" id="jam_temu" name="jam_temu" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="form-group">
            <label for="layanan">Layanan:</label>
            <input type="text" class="form-control" id="layanan" name="layanan" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Pemeriksaan</button>
    </form>
</div>
</body>
</html>
