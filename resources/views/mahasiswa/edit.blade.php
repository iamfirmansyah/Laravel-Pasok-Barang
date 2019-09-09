@extends('products.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>NISN :</strong>
                <input type="number" value="{{ $mahasiswa->nis }}" name="nis" class="form-control"  autocomplete="off">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Nama Depan :</strong>
               <input type="text" value="{{ $mahasiswa->nama_depan }}"  name="nama_depan" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Nama Belakang :</strong>
               <input type="text" value="{{ $mahasiswa->nama_belakang }}"  name="nama_belakang"  class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <strong>Jenis Kelamin</strong>
            <select class="form-control"   name="jk">
                <option value="laki-laki">Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group">
            <strong>Alamat</strong>
            <textarea name="alamat" id="" cols="30" rows="5" class="form-control">{{ $mahasiswa->alamat }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Provinsi :</strong>
               <input type="text" value="{{ $mahasiswa->provinsi }}"  name="provinsi" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Kabupaten :</strong>
               <input type="text" value="{{ $mahasiswa->kabupaten }}"  name="kabupaten" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Asal Sekolah :</strong>
               <input type="text" value="{{ $mahasiswa->asal_sekolah }}"  name="asal_sekolah"  class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Nilai rata-rata :</strong>
               <input type="text" value="{{ $mahasiswa->nilai_rata }}"  name="nilai_rata" class="form-control">
            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
        </div>
   
</form>

@endsection