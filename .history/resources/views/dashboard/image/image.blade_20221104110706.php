@extends('dashboard.layouts.main-layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h1>Foto Kegiatan</h1>
                        <p class="mt-3">Foto Kegiatan Ambulance Hebat</p>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="card-body">
            <button type="button" class="btn bg-primary">
                <a href="/dashboard/galeri/create">
                    <i class="fa-solid fa-circle-plus"></i>
                    Tambah Upload
                </a>
            </button>

            <div class="mt-4">
                <table class="table table-bordered col-lg-10">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama Kegiatan</th>
                            <th>Image</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        
        </div>
    </div>
    
@endsection
