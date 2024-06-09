@extends('layout.app.app')

@section('Riwayat janji Temu')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Riwayat</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('#') }}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Riwayat</h5>
                            <p>ini Semua Riwayat Dari Pasien</p>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th>No</th>
                                        <th>Pasien</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Dokter</th>
                                        <th>Nama Hewan</th>
                                        <th>Jenis Hewan</th>
                                        <th>Keluhan</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $appointment->user->name }}</td>
                                            <td>{{ $appointment->appointment_date }}</td>
                                            <td>{{ $appointment->appointment_time }}</td>
                                            <td>{{ $appointment->dokter->nama }}</td>
                                            <td>{{ $appointment->nama_hewan }}</td>
                                            <td>{{ $appointment->jenis_hewan }}</td>
                                            <td>{{ $appointment->keluhan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            {{ $appointments->links() }}

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
