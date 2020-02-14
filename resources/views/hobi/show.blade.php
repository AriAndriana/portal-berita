@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Lihat Data Hobi</label>
                        <input type="text" class="form-control" value=" {{$hobi->nama}} " name="nama" readonly>
                    </div>
                    <div class="form-group">
                        <a href=" {{route('hobi.index')}} " class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
