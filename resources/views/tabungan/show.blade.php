@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Siswa</label>
                                <select class="form-control" name="nama_siswa" id="" readonly>
                                        <option value=" {{$tabungan->id}} ">{{$tabungan->siswa->nama}} -  {{$tabungan->siswa->kelas}} </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Uang</label>
                                <input type="text" class="form-control" name="jumlah_uang" value=" {{$tabungan->jumlah_uang}} " readonly>
                            </div>
                        <div class="form-group">
                            <a href=" {{route('tabungan.index')}} " class="btn btn-outline-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
