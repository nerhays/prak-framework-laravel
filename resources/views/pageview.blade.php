@extends("mod7.main")
@section('title', 'AdminLTE')

@section('page-title', 'Halaman Hello World')

@section('page-breadcrumb')
    <li class="breadcrumb-item">level 1</li>
    <li class="breadcrumb-item">level 2</li>
@endsection

@section('extra-css')
    
@endsection

@section('page-content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Card Header Hallo</h3>
        </div>
        <div class="card-body">
            Hello World
        </div>
    </div>
@endsection

@section('page-js')
    
@endsection

