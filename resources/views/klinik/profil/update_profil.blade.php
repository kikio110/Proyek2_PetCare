<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="pagetitle">
        <h1>Edit Admin Klinik</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin_kliniks.index') }}">Admin Kliniks</a></li>
                <li class="breadcrumb-item active">Edit Admin Klinik</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="card">
                    <div class="card-body pt-3">
                        <h5 class="card-title">Edit Admin Klinik</h5>

                        <form method="post" action="{{ route('admin_kliniks.update', $adminKlinik->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            {{-- <div class="row mb-3">
                                <label for="user_id" class="col-md-4 col-lg-3 col-form-label">User ID</label>
                                <div class="col-md-8 col-lg-9">
                                    <input type="text" name="user_id" class="form-control" id="user_id" value="{{ old('user_id', $adminKlinik->user_id) }}" required>
                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <label for="nama_klinik" class="col-md-4 col-lg-3 col-form-label">Nama Klinik</label>
                                <div class="col-md-8 col-lg-9">
                                    <input type="text" name="nama_klinik" class="form-control" id="nama_klinik" value="{{ old('nama_klinik', $adminKlinik->nama_klinik) }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nomor_telepon" class="col-md-4 col-lg-3 col-form-label">Nomor Telepon</label>
                                <div class="col-md-8 col-lg-9">
                                    <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon" value="{{ old('nomor_telepon', $adminKlinik->nomor_telepon) }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea name="alamat" class="form-control" id="alamat" required>{{ old('alamat', $adminKlinik->alamat) }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jam_buka" class="col-md-4 col-lg-3 col-form-label">Jam Buka</label>
                                <div class="col-md-8 col-lg-9">
                                    <input type="text" name="jam_buka" class="form-control" id="jam_buka" value="{{ old('jam_buka', $adminKlinik->jam_buka) }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="foto" class="col-md-4 col-lg-3 col-form-label">Foto</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="{{ $adminKlinik->foto ? asset('storage/fotos/' . $adminKlinik->foto) : asset('images/default.jpg') }}" alt="Profile Picture" class="rounded-circle mb-2" width="100">
                                    <input type="file" name="foto" accept="image/*" class="form-control-file">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                </div>
            </div>
        </div>
</body>
</html>