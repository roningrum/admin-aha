@extends('dashboard.layouts.main-layout')
@section('content')
<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Default Modal</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
    <p>One fine body…</p>
    </div>
    <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
    </div>
    </div>
    
    </div>
    
    </div>
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
                                        <h1 class="mb-3">Blog Yang Diunggah</h1>
                                        <button type="button" class="btn bg-primary my-3">
                                            <a href="/dashboard/posts/create">
                                                <i class="fa-solid fa-circle-plus"></i>
                                                Tambah Post Baru
                                            </a>
                                        </button>
                                    </div>
                                </div>
                               
                                <table class="table table-bordered table-striped dataTable col-lg-10">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">No</th>
                                            <th>Artikel</th>
                                            <th>Kategori</th>
                                            <th>Penulis</th>
                                            <th>Diunggah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->category->name }}</td>
                                                <td>{{ $post->user->name }}</td>
                                                <td>{{\Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</td>
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

                                            
                                                 
                                                    {{-- <form action="/dashboard/posts/{{ $post->slug }}"method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger"onclick="return confirm('Yakin Ingin Menghapus?')"><i class="far fa-trash-alt"></i></button>
                                                    </form> --}}
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
        <div class="container">
            
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
