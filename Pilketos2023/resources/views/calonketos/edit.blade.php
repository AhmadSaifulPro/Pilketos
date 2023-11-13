@extends('layout.main')

@section('content')

<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Form Elements</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                        <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-sm-12">

        </div>
        <!-- [ form-element ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Input Data Calon Ketua OSIS</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('pilketos.update', $data->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @METHOD("PUT")
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            value="{{ @$data->nama }}" placeholder="">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-3 col-form-label">Kelas</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kelas" value="{{ @$data->kelas }}" class="form-control"
                                            placeholder="">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="kelas" class="col-sm-3 col-form-label">foto</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="foto" value="{{ @$data->foto }}" class="form-control"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="ml-auto pr-3">
                                    <button type="submit" class="btn  btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Input group -->

</div>
<!-- [ form-element ] end -->
</div>
@endsection
