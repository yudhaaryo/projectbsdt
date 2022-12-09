@extends('layouts.main')

@section('content')
<form method="POST" action="{{ url('pelanggan') }}">
    @csrf
    <div class="mb-3">
      <label>Username</label>
      <input type="text" name="username"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label>Password</label >
      <input type="text" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="text" name="no_hp" class="form-check-input" id="exampleCheck1">
      <label>No Hp</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
