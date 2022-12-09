@extends('layouts.main')

@section('content')
<form method="POST" action="{{ url('transaksi/' .$transaksi->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
      <label>Pilih Pelanggan</label>
      <select name="pelanggan_id" class="form-control selectpicker" id="select-country"
                        data-live-search="true">
                        @foreach ($pelanggan as $item)
                            <option @if ($transaksi->pelanggan_id == $item->id) selected="selected" @endif
                                value="{{ $item->id }}">{{ $transaksi->pelanggan->username }}</option>
                        @endforeach
                    </select>
    </div>
    <div class="mb-3">
      <label>Jumlah</label >
        <input type="text" name="jumlah" value="{{ $transaksi->jumlah }}" class="form-control" id="exampleInputPassword1">


    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
