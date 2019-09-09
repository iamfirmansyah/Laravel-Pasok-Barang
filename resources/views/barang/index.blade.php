@extends('barang.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.8 CRUD</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('barang.create') }}" > Add Barang Baru</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @elseif($message = Session::get('danger'))
    <div class="alert alert-danger">
            {{ $message }}
        </div>
    @elseif($message = Session::get('warning'))
    <div class="alert alert-warning">
        {{ $message }}
    </div>    
    @endif
    <br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th width="230px" class="text-center">Action</th>
        </tr>
        @foreach ($barang as $baran)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $baran->nama }}</td>
            <td>Rp. {{ $baran->harga }}</td>
            <td>{{ $baran->kategori }}</td>
            <td>{{ $baran->stok }}</td>
            <td>
                <form action="{{ route('barang.destroy',$baran->id) }}" method="POST" class="text-center">
                    <a class="btn btn-info fas fa-eye" href="{{ route('barang.show',$baran->id) }}"></a>
                    <a class="btn btn-primary fas fa-edit" href="{{ route('barang.edit',$baran->id) }}"></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger fas fa-trash"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $barang->links() !!}
@endsection