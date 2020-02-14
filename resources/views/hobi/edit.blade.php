@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                    <form action=" {{ route('hobi.update', $hobi->id) }} " method="post">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label for="">Edit Data Hobi</label>
                                <input type="text" class="form-control" value=" {{$hobi->nama}} " name="nama" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
