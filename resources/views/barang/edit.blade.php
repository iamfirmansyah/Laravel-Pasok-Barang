@extends('barang.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
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
   
<form action="{{ route('barang.update',$barang->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <input type="text" name="nama" value="{{ $barang->nama }}" class="form-control" placeholder="Name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Rp</span>
            </div>
            <input type="number" class="form-control" placeholder="50000" aria-label="Username" value="{{ $barang->harga }}" name="harga" aria-describedby="basic-addon1">
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kategori:</strong>

                <input type="text" value="{{ $barang->kategori }}" name="kategori" class="form-control" placeholder="Kategori">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>stok:</strong>

                <input type="number" value="{{ $barang->stok }}" name="stok" class="form-control" placeholder="Stok">

            </div>

        </div>

    </div>
    <div class="pull-right">
       
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-danger" href="{{ route('barang.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
        </div>
   
</form>

@endsection