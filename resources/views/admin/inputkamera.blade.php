@extends('layout.admin')
@section('content')
<div class="content">
    <div class="col-lg-12">
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-12">ID</label>
                <div class="col-lg-10">
                    <input type="text" name="id_transaksi" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-12">Rekening</label>
                <div class="col-lg-10">
                    <input type="text" name="rekening" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-12">Jumalah Pembayaran</label>
                <div class="col-lg-10">
                    <input type="text" name="jumlah" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-12">Tanggal Transaksi</label>
                <div class="col-lg-10">
                    <input type="text" name="tgl_transaksi" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <button type="submit">BAYAR</button>
            </div>
        </div>
    </div>
</div>
@endsection