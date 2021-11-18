@extends('layout.template')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Data Penduduk</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th width="100px">NIK</th>
                                    <th width="30px">:</th>
                                    <th>{{$penduduk->nik}}</th>
                                </tr>
                                <tr>
                                    <th width="100px">Nama</th>
                                    <th width="30px">:</th>
                                    <th>{{$penduduk->name}}</th>
                                </tr>
                                <tr>
                                    <th width="100px">Jenis Kelamin</th>
                                    <th width="30px">:</th>
                                    <th>{{$penduduk->jk}}</th>
                                </tr>
                                <tr>
                                    <th width="100px">No Telepon</th>
                                    <th width="30px">:</th>
                                    <th>{{$penduduk->no_telpon}}</th>
                                </tr>
                                <tr>
                                    <th width="100px">Alamat</th>
                                    <th width="30px">:</th>
                                    <th>{{$penduduk->alamat}}</th>
                                </tr>
                                <tr>
                                    <th width="100px">Foto KTP</th>
                                    <th width="30px">:</th>
                                    <th><img src="{{url('foto_ktp/'.$penduduk->foto)}}" width="150px"></th>
                                </tr>
                                <th>
                                    <div class="form-group">
                                        <a href="/penduduk" class="btn btn-success btn-sm">Kembali</a>
                                    </div>
                                </th>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
