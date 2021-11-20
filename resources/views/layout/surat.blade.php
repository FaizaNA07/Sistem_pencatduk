@extends('layout.template')

@section('content')
<div class="content">
    <h2>Surat Keterangan</h2>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Surat Keterangan Tinggal Sementara(SKTS)</h4>
        </div>
        <div class="card-body">
            <h6>jkdbakjbcekfugabcka</h6>
        </div>
        <a href="/surat/cetakSKTS" target="_blank" class="d-flex justify-content-center">
            <button type="button" class="btn btn-success btn-round"><i class="material-icons">printer</i>Cetak SKTS</button>
        </a>
    </div><br>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Surat Keterangan Domisili Sementara (SKDS)</h4>
        </div>
        <div class="card-body">
            <h6>jkdbakjbcekfugabcka</h6>
        </div>
        <a href="/surat/cetakSKDS" target="_blank" class="d-flex justify-content-center">
            <button type="button" class="btn btn-success btn-round"><i class="material-icons">printer</i>Cetak SKDS</button>
        </a>
    </div>
</div>

@endsection
