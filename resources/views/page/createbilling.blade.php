@extends('layouts.main')

@section('content')
<form method="POST" action="{{ url('billing') }}">
    @csrf
    <div class="mb-3">
      <label>Paket</label>
      <input type="text" name="paket"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label>Harga</label >
      <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
