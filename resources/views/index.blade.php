@extends('layout')
@section('content')
 <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Data Barang</h2>
        </div>
    </div>
 </div>
 <div class="float-right my-2">
    <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a>
 </div>

 <div>
        <div class="mx-auto pull-right">
            <div class="float-left">
                <form action="{{ route('barang.index') }}" method="GET" role="search">
                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-success" type="submit" title="Search Barang">
                                <span class="fas fa-search">Pencarian</span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Nama Barang" id="term">
                        <a href="{{ route('barang.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt">Refresh</span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 
 <table class="table table-bordered">
    <tr>
        <th>ID Barang</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Kategori Barang</th>
        <th>Harga</th>
        <th>QTY</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($barang as $br)
    <tr>
        <td>{{ $br->id_barang }}</td>
        <td>{{ $br->kode_barang }}</td>
        <td>{{ $br->nama_barang }}</td>
        <td>{{ $br->kategori_barang }}</td>
        <td>{{ $br->harga}}</td>
        <td>{{ $br->qty }}</td>
        <td>
            <form action="{{ route('barang.destroy',$br->id_barang) }}" method="POST">
            <a class="btn btn-info" href="{{ route('barang.show',$br->id_barang) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('barang.edit',$br->id_barang) }}">Edit</a>
            @csrf
            @method('DELETE')
             <button type="submit" class="btn btn-danger">Delete</button>
        </td>
    </tr>
 @endforeach
</table>