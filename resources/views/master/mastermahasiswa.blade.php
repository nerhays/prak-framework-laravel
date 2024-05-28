@extends("mod8a.main")
@section('title', 'Master Mahasiswa')

@section('page-title', 'Halaman Master Mahasiswa')

@section('page-breadcrumb')
    <li class="breadcrumb-item">Mahasiswa</li>
    <li class="breadcrumb-item">Master Mahasiswa</li>
@endsection

@section('extra-css')
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('/plugins/toastr/toastr.min.css') }}">
@endsection

@section('page-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Master Mahasiswa</h3>
        </div>
        <div class="card-body">
            <!--FORM-->
            <form action="/submitmhs" method="post">
                @csrf
                <div class="form-group row">
                    <label for="nm" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
                    </div>
                </div>

                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </form>
            <!--FORM END-->
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama</th>
                        <th>NIM</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('mahasiswa', []) as $mhs)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mhs['nama'] }}</td>
                            <td>{{ $mhs['nim'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('page-js')
    <!-- Toastr -->
    <script src="{{ asset('/plugins/toastr/toastr.min.js') }}"></script>
    <script>
        $(window).on("load", function() {
            @if(session()->has('notif'))
                toastr.success('{{ session('notif') }}');
            @endif
        });
    </script>
@endsection
