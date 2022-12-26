@extends('dashboard.layouts.main-layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1 class="mb-3">Feedback Yang Masuk</h1>
                                        {{-- <button type="button" class="btn bg-primary my-3">
                                            <a href="/dashboard/posts/create">
                                                <i class="fa-solid fa-circle-plus"></i>
                                                Tambah Post Baru
                                            </a>
                                        </button> --}}
                                    </div>
                                </div>
                               
                                <table class="table table-bordered table-striped dataTable col-lg-10">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">No</th>
                                            <th>Pengirim</th>
                                            <th>Email Pengirim</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Feedback</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($feedback as $feedback)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $feedback->name }}</td>
                                                <td>{{ $feedback->email }}</td>
                                                <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                                                <td>{{ $feedback->pesan }}</td>
                                                <td>                 
                                                    <form action="#"method="post" class="d-inline">
                                                        {{-- @method('delete')
                                                        @csrf --}}
                                                        <button class="btn btn-danger"onclick="return confirm('Yakin Ingin Menghapus?')"><i class="far fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div><!-- /.container-fluid -->
        </section>
@endsection