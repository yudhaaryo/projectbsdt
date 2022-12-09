@extends('layouts.main')

@section('content')
<a class="btn btn-info mt-5 mb-5" href="{{ url('pelanggan/create') }}">Tambah Pelanggan</a>

<div class="row g-3 align-items-center mt-2">
  <div class="col-auto">
    <form action="/pelanggan" method="GET">
    <input type="search" id="inputPassword6" name="search"class="form-control" aria-describedby="passwordHelpInline">
  </form>
  </div>

</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">No Hp</th>
        <th colspan="2">AKSI</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pelanggan as $item)

        <tr>
            <td scope="row">{{ $item->id }}</td>
            <td scope="row">{{ $item->username }}</td>
            <td scope="row">{{ $item->password }}</td>
            <td scope="row">{{ $item->no_hp}}</td>
            {{-- <td><a class="btn btn-info" href="{{ url('pelanggan/'.$item->id. '/edit') }}"></a>Update</td>
            <td> --}}
              <td><button  class="btn btn-info">
                <a href="{{ url('pelanggan/'.$item->id. '/edit') }}"></a>Update</td>
               </button>
                <td>
                <form action="{{ url('pelanggan/'.$item->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class ="btn btn-danger" type="submit">DELETE</button>


                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $pelanggan->links() }}
  @endsection
