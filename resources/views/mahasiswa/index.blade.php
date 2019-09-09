@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="padding-bottom:1%">
            <div class="pull-left">
                <h2>Pendaftaran Mahasiswa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}" > Create New Data</a>
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
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama Lengkap</th>
            <th>JK</th>
            <th>Alamat</th>
            <th>Provinis</th>
            <th>Kabupaten</th>
            <th>Asal Sekolah</th>
            <th>Nilai Rata-Rata</th>
            <th width="190px" class="text-center">Action</th>
        </tr>
        @foreach ($mahasiswa as $mahasisw)
        <tr style="font-size:16px">
            <td>{{ ++$i }}</td>
            <td>{{ $mahasisw->nis }}</td>
            <td>{{ $mahasisw->nama_depan}} {{ $mahasisw->nama_belakang}}</td>
            <td>{{ $mahasisw->jk }}</td>
            <td>{{ $mahasisw->alamat }}</td>
            <td>{{ $mahasisw->provinsi }}</td>
            <td>{{ $mahasisw->kabupaten }}</td>
            <td>{{ $mahasisw->asal_sekolah }}</td>
            <td>{{ $mahasisw->nilai_rata }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',$mahasisw->id) }}" method="POST" class="text-center">
                    <a class="btn btn-sm  btn-info" href="{{ route('mahasiswa.show',$mahasisw->id) }}">Show</a>
                    <a class="btn btn-sm btn-primary" href="{{ route('mahasiswa.edit',$mahasisw->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $mahasiswa->links() !!}
@endsection