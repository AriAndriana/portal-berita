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
                    <form action=" {{ route('hobi.store') }} " method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="">Masukkan Jenis Hobi</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>                        
                            <div class="form-group">
                                <button class="btn btn-primary"  type="submit">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
