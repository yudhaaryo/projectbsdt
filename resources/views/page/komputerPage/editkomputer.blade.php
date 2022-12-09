@extends('layouts.main')

@section('content')
<form method="POST" action="{{ url('komputer/' .$komputer->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
      <label>Nomor</label>
      <input type="text" name="nomor"class="form-control" value="{{ $komputer->nomor }}"id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label>Billing</label >
        <select name="billing_id" class="form-control selectpicker" id="select-country"
                        data-live-search="true">
                        @foreach ($billing as $item)
                            <option @if ($komputer->billing_id == $item->id) selected="selected" @endif
                                value="{{ $item->id }}">{{ $item->komputer->nomor }}</option>
                        @endforeach
                    </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
