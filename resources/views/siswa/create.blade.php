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
                    <form action=" {{ route('siswa.store') }} " method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="">Masukkan Nama Siswa</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Masukkan Kelas</label>
                                <input type="text" class="form-control" name="kelas" required>
                            </div>
                            <div class="form-group">
                                <label for="">Pilih Hobi</label>
                                <select class="form-control pilih-hobi" multiple name="hobi_id[]" id="">
                                    @foreach ($hobi as $item)
                                        <option value=" {{$item->id}} "> {{$item->nama}} </option>
                                    @endforeach
                                </select>
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
@push('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.pilih-hobi').select2();
        });
    </script>
@endpush