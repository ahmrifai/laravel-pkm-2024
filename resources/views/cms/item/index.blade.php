@extends('layouts.theme')
@section('content')
    <div class="container-fluid bg-white">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-end pt-4">
                    <a href="{{ route('items.create') }}" class="btn btn-success" style="border-radius: 20px">Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-semibold fs-6 text-muted">
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Kondisi</th>
                                <th>Kuantitas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($semuanya as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->condition }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" style="border-radius: 20px">Edit</a>
                                        <a class="btn btn-danger btn-sm" style="border-radius: 20px">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Kondisi</th>
                                <th>Kuantitas</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
