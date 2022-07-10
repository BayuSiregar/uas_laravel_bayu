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
        $("#id_siswa").select2({
            placeholder: "-Silakan Pilih Siswa-",
            allowClear: true
        });
        $("#id_piket").select2({
            placeholder: "-Silahkan Pilih Guru Piket-",
            allowClear: true
        });
    });
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card bg-dark">
                <div class="card-header text-light">{{ __('Tambah Data Keterlambatan') }}</div>
                <div class="card-body">
                <form action="/terlambat/store" method="POST">
                    @csrf
                <br>
                <div class="row">
                    <div class="col">
                    <label for="siswa">Pilih Siswa</label> <span style="color: red;">*</span></label>
                    <select class="form-select" name="id_siswa" id="id_siswa">
                      @foreach($siswa as $s)
                        <option value="{{ $s->id_siswa }}">{{ $s->nama_siswa }}</option>
                      @endforeach
                    </select>
                    </div>
                    <div class="col">
                    <label for="siswa">Pilih Guru</label> <span style="color: red;">*</span></label>   <br>
                    <select class="form-select" aria-label="Default select example" name="id_piket" id="id_piket">
                      @foreach($guru as $g)
                      <option value="{{ $g->id_piket }}">{{ $g->nama_guru }}</option>
                      @endforeach
                    </select>
                    </div>
                    </div> <br>
                    <div class="mb-3">
                        <label for="tgl_masuk" class="form-label">Tanggal Terlambat</label><span style="color: red;"> *</span>
                        <input type="date" class="form-control" id="tgl_terlambat" name="tgl_terlambat">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_masuk" class="form-label">Tanggal Masuk</label><span style="color: red;"> *</span>
                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk">
                    </div>
                    <div class="mb-3">
                        <label for="jam_terlambat" class="form-label">Jam Terlambat</label><span style="color: red;"> *</span>
                        <input type="time" class="form-control" id="jam_terlambat" name="jam_terlambat">
                    </div>
                    <div class="mb-3">
                        <label for="jam_masuk" class="form-label">Jam Masuk</label><span style="color: red;"> *</span>
                        <input type="time" class="form-control" id="jam_masuk" name="jam_masuk">
                    </div>
                    <div class="mb-3">
                        <label for="hukuman" class="form-label">Hukuman</label><span style="color: red;"> *</span>
                        <input type="text" class="form-control" id="hukuman" name="hukuman">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alasan</label> <span style="color: red;"> *</span></label>
                        <textarea class="form-control" id="alasan" name="alasan" rows="3" ></textarea>
                </div>
                <button type="submit" class="btn btn-info"><i class="bi bi-save"></i> Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection