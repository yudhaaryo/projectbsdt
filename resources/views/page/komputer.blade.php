@extends('layouts.main')

@section('content')
<a class="btn btn-info mt-5 mb-5" href="{{ url('komputer/create') }}">Komputer</a>
<table class="table">
  <div class="row g-3 align-items-center mt-2">
    <div class="col-auto">
      <form>

          <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
      </form>
    </div>

    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nomor Komputer</th>
        <th scope="col">No Billing</th>
        <th colspan="2">AKSI</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($komputer as $item)

        <tr>
            <td scope="row">{{ $item->id }}</td>
            <td scope="row">{{ $item->nomor }}</td>
            <td scope="row">{{ $item->billing->id}}</td>
            <td><button  class="btn btn-info">
               <a href="{{ url('komputer/'.$item->id. '/edit') }}"></a>Update</td>
              </button>
               <td>
                <form action="{{ url('komputer/'.$item->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class ="btn btn-danger" type="submit">DELETE</button>


                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $komputer->links() }}
  @endsection
