@extends('layout.main')

@section('content')

<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Bootstrap Basic Tables</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Bootstrap Table</a></li>
                        <li class="breadcrumb-item"><a href="#!">Basic Tables</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ inverse-table ] start -->
        @foreach ($data as $item)

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Pilih Ketos</h3>
                </div>
                <div class="card-body table-border-style">
                    <div class="d-flex justify-content-center">
                        <img src="{{  asset('/img/'.$item->foto) }}" alt="" srcset="" width="50%">
                    </div>
                    <div class="pt-3 pb-3">
                        <div>
                            <label for="">Nama :{{ $item->nama }}</label>
                        </div>
                        <div>
                            <label for="">Kelas:{{ $item->kelas }}</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center ">
                        <form action="{{ route('pilihketos.store') }}" method="POST">
                            @csrf
                            <input type="text" name="calon_ketos_id" value="{{ $item->id }}" hidden>
                            <button type="submit" class="btn btn-primary w-100">Pilih</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- [ inverse-table ] end -->
    </div>
    <!-- [ Main Content ] end -->
</div>

@endsection
