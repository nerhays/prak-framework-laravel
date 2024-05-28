@extends("mod8a.main")
@section('title', 'Master MK')

@section('page-title', 'Halaman Master MK')

@section('page-breadcrumb')
    <li class="breadcrumb-item">Mahasiswa</li>
    <li class="breadcrumb-item">Master MK</li>
@endsection

@section('page-css')
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('/plugins/toastr/toastr.min.css') }}">
@endsection

@section('page-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Master Kelas</h3>
        </div>
        <div class="card-body">
            <!--FORM-->
            <form action="/submitmk" method="post">
                @csrf
                <div class="form-group row">
                    <label for="nm" class="col-sm-2 col-form-label">Nama Matkul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Matkul">
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
                        <th>Nama MatKul</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('MK', []) as $mk)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $mk['nama'] }}</td>
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

