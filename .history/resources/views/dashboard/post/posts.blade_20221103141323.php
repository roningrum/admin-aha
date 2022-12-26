@extends('dashboard.layouts.main-layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Daftar Artikel</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="card-body">
            <button type="button" class="btn bg-primary my-2">
                <a href="/dashboard/posts/create">
                    <i class="fa-solid fa-circle-plus"></i>
                    Tambah Post Baru
                </a>
            </button>
            <table class="table table-bordered col-lg-10">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Artikel</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <button type="button" class="btn bg-info">
                                    <a href="/dashboard/posts/{{ $post->slug }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </button>
                                <a href="/dashboard/posts/{{ $post->slug }}/edit">
                                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i>
                                    </button>
                                </a>
                             
                                <form action="/dashboard/posts/{{ $post->slug }}"method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger"onclick="return confirm('Yakin Ingin Menghapus?')"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#success-alert").hide();
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                    $("#success-alert").slideUp(500);
                });
        });
    </script>
@endsection
