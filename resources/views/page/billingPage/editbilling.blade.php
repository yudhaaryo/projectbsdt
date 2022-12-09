@extends('layouts.main')

@section('content')
<form method="POST" action="{{ url('billing/'.$billing->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
      <label>Paket</label>
      <input type="text" name="paket"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $billing->paket }}">
    </div>
    <div class="mb-3">
      <label>Harga</label >
      <input type="text" name="harga" class="form-control" id="exampleInputPassword1" value="{{ $billing->harga }}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
