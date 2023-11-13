@extends('layout.main')

@section('content')

<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Data Siswa </h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">PILKETOS</a></li>
                        <li class="breadcrumb-item"><a href="#!">Data Calon Ketua OSIS</a></li>
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
                    <h4>Data Siswa</h4>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <div class="pd-3">
                            <a href="{{ route('siswa.create') }}" class=" btn btn-primary float-right mb-2">+ Tambah Data</a>
                        </div>
                        <table class="table table-inverse">
                            <thead>
                                <tr>
                                    <th class="col-md-2">No</th>
                                    <th class="col-md-2">NISN</th>
                                    <th class="col-md-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nisn}}</td>
                                    <td>
                                        <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning
                                            btn-sm">Edit</a>

                                        <form onsubmit="return confirm('Yakin Mau hapus Data Ini?')" class="d-inline"
                                            action="{{ route('siswa.destroy', $item->id) }}" method="post">

                                            @csrf
                                            @method("DELETE")

                                            <button type="submit" name="submit"
                                                class="btn btn-danger btn-sm">Del</button>
                                        </form>
                                    </td>
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
