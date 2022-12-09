@extends('layouts.main')

@section('content')

<form method="POST" action="{{ url('transaksi') }}">
    @csrf
    <div class="mb-3">
        <div class="col-sm-10">
            <label for="">Pilih Pelanggan</label>
            <select name="pelanggan_id" class="form-control selectpicker" id="select-country" data-live-search="true">
                @foreach ($pelanggan as $item)
                    <option value="{{ $item->id }}">{{ $item->username }}</option>
                @endforeach
            </select>

      {{-- <label>Nama Pelanggan</label>
      <input type="text" name="paket"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
    </div>
    <div class="mb-3">
      <label>Jumlah</label >
      <input type="text" name="jumlah" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
