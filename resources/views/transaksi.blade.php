@extends('layouts.main')

@section('content')
<a class="btn btn-info mt-5 mb-5" href="{{ url('transaksi/create') }}">Tambah Transaksi</a>
<table class="table">
  <div class="row g-3 align-items-center mt-2">
    <div class="col-auto">
      <form>
          <input type="search" name="search" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
      </form>
    </div>

    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nama Pelanggan</th>
        <th scope="col">Jumlah</th>
        <th colspan="2">AKSI</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($transaksi as $item)

        <tr>
            <td scope="row">{{ $item->id }}</td>
            <td scope="row">{{ $item->pelanggan->username}}</td>
            <td scope="row">{{ $item->jumlah}}</td>
            {{-- <td><a class="btn btn-info" href="{{ url('transaksi/'.$item->id. '/edit') }}"></a>Update</td>
            <td> --}}
              <td><button  class="btn btn-info">
                <a href="{{ url('transaksi/'.$item->id. '/edit') }}"></a>Update</td>
               </button>
                <td>
                <form action="{{ url('transaksi/'.$item->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class ="btn btn-danger" type="submit">DELETE</button>


                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $transaksi->links() }}
  @endsection
