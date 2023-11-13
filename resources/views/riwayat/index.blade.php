@extends('layout.main')

@section('content')

<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Data Riwayat Calon Ketua OSIS</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">PIKETOS</a></li>
                        <li class="breadcrumb-item"><a href="#!">Data Riwayat</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ inverse-table ] start -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Calon Ketua OSIS</h4>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-inverse">
                            <thead>
                                <tr>
                                    <th class="col-md-2">No</th>
                                    <th class="col-md-2">Nama Ketos</th>
                                    <th class="col-md-2">NISN Pemilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->Calonketos->nama }}</td>
                                    <td>{{ $item->nisn}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ inverse-table ] end -->
    </div>
    <!-- [ Main Content ] end -->
</div>

@endsection
