@extends('layouts.main')

@section('content')
<form method="POST" action="{{ url('komputer') }}">
    @csrf
    <div class="mb-3">
      <label>Nomor</label>
      <input type="text" name="nomor"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label>Billing</label >
        <select name="billing_id" class="form-control selectpicker" id="select-country" data-live-search="true">
            @foreach ($billing as $item)
            {{-- <option> --}}
                <option value="{{ $item->id }}">{{ $item->paket }}</option>
            {{-- </option> --}}
          @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
