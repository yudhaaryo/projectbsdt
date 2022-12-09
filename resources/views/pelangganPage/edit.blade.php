@extends('layouts.main')

@section('content')
<form method="POST" action="{{ url('pelanggan/'.$pelanggan->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
      <label>Username</label>
      <input type="text" name="username"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $pelanggan->username }}">
    </div>
    <div class="mb-3">
      <label>Password</label >
      <input type="text" name="password" class="form-control" id="exampleInputPassword1" value="{{ $pelanggan->password }}">
    </div>
    <div class="mb-3 form-check">
      <input type="text" name="no_hp" class="form-check-input" id="exampleCheck1" value="{{ $pelanggan->no_hp }}">
      <label>No Hp</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
