@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .muinz {

            font-decoration: none;
            font-family: 'Segoe UI';
            font-weight: bold;
            color: rgb(77, 77, 77);
        }
    </style>


    <div class="muinz">
        <h3>FORM EDIT TUGAS</h3>
    </div>
    @if (isset($editId))
        <form action="{{ route('matematika.update', $editId) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_file" class="form-label">PENGIRIM</label>
                <input type="text" class="form-control" id="nama_file" name="nama_file" value="{{ $data->nama_file }}">
            </div>
            <div class="mb-3">
                <label for="jenis_file" class="form-label">KETERANGAN</label>
                <input type="text" class="form-control" id="jenis_file" name="jenis_file"
                    value="{{ $data->jenis_file }}">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">FILE</label>
                <input type="file" class="form-control" id="file" name="file">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    @endif
@endsection
