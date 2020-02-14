@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">Dashboard
                    <a href="{{ route('hobi.create') }}" class="btn btn-primary" style="float: right;">
                        Tambah Siswa Hobi
                    </a>
                </div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ini halaman daftar siswa. --}}

                    <table class="table">
                        <thead>
                            <th>Jenis Hobi</th>
                            <th><center>Aksi</center></th>
                        </thead>
                        <tbody>
                            @foreach ($hobi as $item)
                                <tr>
                                    <td> {{ $item->nama }} </td>
                                    <td><center>
                                    <form action="{{ route('hobi.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="btn btn-info" href=" {{route('hobi.show', $item->id)}} ">
                                            Show
                                        </a> |
                                        <a class="btn btn-warning" href=" {{route('hobi.edit', $item->id)}} ">
                                            Edit
                                        </a> |
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </center></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
