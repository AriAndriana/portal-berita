@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Tabungan Siswa
                        <a href=" {{route('tabungan.create')}} " class="btn btn-primary" style="float: right;">
                            Tambah
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama</th>
                                        <th>Nama Kelas</th>
                                        <th>Jumlah Uang Tabungan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($tabungan as $data)
                                        <tr>
                                            <td> {{$no++}} </td>
                                            <td> {{$data->siswa->nama}} </td>
                                            <td> {{$data->siswa->kelas}} </td>
                                            <td> {{$data->jumlah_uang}} </td>
                                            <td>
                                                <form action="{{ route('tabungan.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('Delete')
                                                    <a class="btn btn-info" href=" {{route('tabungan.show', $data->id)}} ">
                                                        Show
                                                    </a> |
                                                    <a class="btn btn-warning" href=" {{route('tabungan.edit', $data->id)}} ">
                                                        Edit
                                                    </a> |
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                                {{-- <a href=" {{route('tabungan.edit', $data->id)}} " class="btn btn-warning">Edit</a>
                                                <a href=" {{route('tabungan.show', $data->id)}} " class="btn btn-success">Show</a>
                                                <a href=" {{route('tabungan.destroy', $data->id)}} " class="btn btn-danger">Delete</a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection