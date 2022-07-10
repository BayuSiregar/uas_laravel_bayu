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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<script type="text/javascript">
    $(document).ready(function(){
        $("#kelas").select2({
            placeholder: "-Silakan Pilih Kelas-",
            allowClear: true
        });
        $("#jurusan").select2({
            placeholder: "-Silahkan Pilih Jurusan-",
            allowClear: true
        });
        $("#jenis_kelamin").select2({
            placeholder: "-Silahkan Pilih Jenis Kelamin-",
            allowClear: true
        });
    });
</script>
<style>
    form{
        margin-left: 12px !important;   
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card bg-dark">
                <div class="card-header text-light">{{ __('Tambah Data Siswa') }}</div>
                <div class="card-body">
                <form action="/siswa/store" method="POST">
                    @csrf
                <div class="form-group">
                    <label for="siswa">Nama Siswa <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" style="width: 350px!important;">
                </div> <br>
                <div class="row">
                    <div class="col">
                    <label for="siswa">Kelas</label> <span style="color: red;">*</span></label> <br>
                    <select class="form-select" name="kelas" id="kelas" style="width: 350px!important;">
                      <option selected>-Pilih Kelas-</option>
                      <option value="X-1">X-1</option>
                      <option value="X-2">X-2</option>
                      <option value="X-3">X-3</option>
                      <option value="X-4">X-4</option>
                      <option value="X-5">X-5</option>
                      <option value="XI-IPA1">XI-IPA1</option>
                      <option value="XI-IPA2">XI-IPA2</option>
                      <option value="XI-IPA3">XI-IPA3</option>
                      <option value="XI-IPS1">XI-IPS1</option>
                      <option value="XI-IPS2">XI-IPS2</option>
                      <option value="XII-IPA1">XII-IPA1</option>
                      <option value="XII-IPA2">XII-IPA2</option>
                      <option value="XII-IPA3">XII-IPA3</option>
                      <option value="XII-IPS1">XII-IPS1</option>
                      <option value="XII-IPS2">XII-IPS2</option>
                      <option value="XII-IPS3">XII-IPS3</option>
                    </select>
                    </div> 
                    <div class="col"> <br>
                    <label for="siswa">Jurusan</label> <span style="color: red;">*</span></label> <br>
                    <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan" style="width: 350px!important;">
                      <option selected>-Pilih Jurusan-</option>
                      <option value="IPA">IPA</option>
                      <option value="IPS">IPS</option>
                    </select>
                    </div>
                    <div class="col"> <br>
                    <label for="siswa">Jenis Kelamin</label> <span style="color: red;">*</span></label> <br>
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin" style="width: 350px!important;">
                      <option selected>-Pilih Jenis Kelamin-</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                    </div> 
                    
                    <div class="mb-3">
                    <br>
                    <label for="alamat" class="form-label">Alamat</label> <span style="color: red;">*</span></label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" style="width: 350px!important;"></textarea>
                </div>
                </div>
                <button type="submit" class="btn btn-info"><i class="bi bi-save"></i> Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection