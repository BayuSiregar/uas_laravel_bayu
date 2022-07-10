@extends('layouts.app')
@section('content')
<style>
    .card{
        opacity: 0.9;
    }
    form{
        width: 100%;
        color: white;
    }
</style>
<br><br><br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card bg-dark">
                <div class="card-header text-light">{{ __('Tambah Data Guru') }}</div>
                <div class="card-body">
                <form action="/guru/store" method="POST">
                    @csrf
                <div class="form-group">
                    <label for="guru">Nama Guru Piket <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="nama_guru" name="nama_guru">
                </div> <br>
                    <div class="col">
                    <label for="siswa">Jenis Kelamin</label> <span style="color: red;">*</span></label>    
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                      <option selected>-Pilih Jenis Kelamin-</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                    </div> 
                    <br>
                    <button type="submit" class="btn btn-info"><i class="bi bi-save"></i> Save</button>
                </div>
                
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection