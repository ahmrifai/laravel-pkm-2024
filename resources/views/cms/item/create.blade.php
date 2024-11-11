@extends('layouts.theme')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6 offset-3 py-5 bg-white px-5">
            <h1>Tambah Data</h1>
            <form action="">
                <div class="mb-10">
                    <label class="required form-label">Nama</label>
                    <input type="email" class="form-control" placeholder="Example input"/>
                </div>
                <div class="mb-10">
                    <label class="required form-label">Tipe</label>
                    <input type="email" class="form-control" placeholder="Example input"/>
                </div>
                <div class="mb-10">
                    <label class="required form-label">Kondisi</label>
                    <input type="email" class="form-control" placeholder="Example input"/>
                </div>
                <div class="mb-10">
                    <label class="required form-label">Kuantitas</label>
                    <input type="email" class="form-control" placeholder="Example input"/>
                </div>
                <div class="mb-10">
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
