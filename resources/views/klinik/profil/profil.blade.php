<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Create Admin Klinik</h1>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('data_klinik') }}" method="POST" enctype="multipart/form-data">
            @csrf
    
            {{-- <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="text" name="user_id" class="form-control" id="user_id" value="{{ old('user_id') }}" required>
            </div> --}}
    
            <div class="form-group">
                <label for="nama_klinik">Nama Klinik</label>
                <input type="text" name="nama_klinik" class="form-control" id="nama_klinik" value="{{ old('nama_klinik') }}" required>
            </div>
    
            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon</label>
                <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon" value="{{ old('nomor_telepon') }}" required>
            </div>
    
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" required>{{ old('alamat') }}</textarea>
            </div>
    
            <div class="form-group">
                <label for="jam_buka">Jam Buka</label>
                <input type="text" name="jam_buka" class="form-control" id="jam_buka" value="{{ old('jam_buka') }}" required>
            </div>
    
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control-file" id="foto">
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>