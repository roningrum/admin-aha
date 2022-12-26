@extends('dashboard.layouts.main-layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-sm-6">
                                    <h1>Foto Kegiatan</h1>
                                    <p class="mt-3">Foto Kegiatan Ambulance Hebat</p>
                                </div>
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
                                            <?php $no=1?>
                                            @foreach ($gallery as $img)
                                                <tr>
                                                    <td>{{$no}}</td>
                                                    <td>{{ $img->title}}</td>
                                                    <td>
                                                        <a href="#" class="pop">
                                                            <img src="{{ url('storage/'.$img->image) }}" 
                                                            width="200px"
                                                            class="img-thumbnail"
                                                            data-toggle="modal"
                                                            data-target="#imgModal{{ $no}}"
                                                            alt="Foto kegiatan">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <button type="button" class="btn btn-warning">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                        </a>
                                                        <button class="btn btn-danger"onclick="return confirm('Yakin Ingin Menghapus?')"><i class="far fa-trash-alt"></i></button>
                                                    </td>
                                                </tr>
                                                <?php $no++?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <?php $no=1?>
        @foreach ( $gallery as $img )
        <div class="modal fade" id="imgModal<?php echo $no?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <img src="{{ url('storage/'.$img->image) }}" alt="" class="img-responsive" width="90%" height="auto">
                        </center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php $no++?>   
        @endforeach  
    </div>
    
@endsection
