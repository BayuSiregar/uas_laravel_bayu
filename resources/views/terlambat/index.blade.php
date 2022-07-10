@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Data Keterlambatan</title>
</head>
<style>
    .card{
        opacity: 0.9;
    }
    th, td{
        color: white;
    }
    tr{
        vertical-align: middle;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-dark">
                <div class="card-header text-light">{{ __('Data Keterlambatan') }}</div>

                <div class="card-body">
                <a href="/terlambat/create" class="btn btn-success mb-2"><i class="bi bi-plus-circle"></i> Tambah Data Keterlambatan</a>
                <a href="/cetak/index" target="_blank" style="float: right;" class="btn btn-primary mb-2"><i class="bi bi-printer" ></i> Cetak</a>
<table class="table table-hover">
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Nama Guru Piket</th>
        <th>Tanggal Terlambat</th>
        <th>Tanggal Masuk</th>
        <th>Jam Terlambat</th>
        <th>Jam Masuk</th>
        <th>Hukuman</th>
        <th>Alasan</th>
        <th>Aksi</th>
    </tr>
    <?php $no=0;?>
    @foreach($data as $s)
    <?php $no++; ?>
    <tr>
        <td>{{ $no }}</td>
        <td>{{ $s->nama_siswa }}</td>
        <td>{{ $s->nama_guru }}</td>
        <td>{{ $s->tgl_terlambat }}</td>
        <td>{{ $s->tgl_masuk }}</td>
        <td>{{ $s->jam_terlambat }}</td>
        <td>{{ $s->jam_masuk }}</td>
        <td>{{ $s->hukuman }}</td>
        <td>{{ $s->alasan }}</td>
        <td style="width:200px !important;"><a href="/terlambat/{{$s->id_terlambat}}/edit" class="btn btn-primary mb-2" style="width:90px !important;"><i class="bi bi-pencil-square"></i> Edit</a> 
            <form action="/terlambat/{{$s->id_terlambat}}" method="POST"> 
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mb-2" style="width:90px !important;"><i class="bi bi-trash"></i> Hapus</button>
            </form>
        </td>
        
    </tr>
    @endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection