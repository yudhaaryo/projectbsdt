@extends('layouts.main')

@section('content')
<a class="btn btn-info mt-5 mb-5" href="{{ url('billing/create') }}">Tambah Billing</a>
<table class="table">
  <div class="row g-3 align-items-center mt-2">
    <div class="col-auto">

       <form action="/billing" method="GET">
    <input type="search" id="inputPassword6" name="search"class="form-control" aria-describedby="passwordHelpInline">
  </form>
    </div>

    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Paket</th>
        <th scope="col">Harga</th>
        <th colspan="2">AKSI</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($billing as $item)

        <tr>
            <td scope="row">{{ $item->id }}</td>
            <td scope="row">{{ $item->paket }}</td>
            <td scope="row">{{ $item->harga }}</td>
            <td><a class="btn btn-info" href="{{ url('billing/'.$item->id. '/edit') }}"></a>Update</td>
            <td>
                <form action="{{ url('billing/'.$item->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class ="btn btn-danger" type="submit">DELETE</button>


                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $billing->links() }}
  @endsection
