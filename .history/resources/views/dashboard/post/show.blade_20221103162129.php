@extends('dashboard.layouts.main-layout')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-8">
                    <article class="blog-post">
                        <h2 class="blog-post-title mb-3">{{ $posts->title }}</h2>
                        <a href="/dashboard/posts" class="btn btn-success">
                            <i class="fa-solid fa-angle-left"></i>
                            Kembali ke Tabel</a>
                        <a href="/dashboard/posts/{{ $posts->slug }}/edit" class="btn btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                            Ubah</a>
                        <form action="/dashboard/posts/{{ $posts->slug }}"method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger"onclick="return confirm('Yakin Ingin Menghapus?')"><i
                                    class="far fa-trash-alt"></i>Hapus Artikel</button>
                        </form>

                        @if ($posts->img_blog)
                        <div style="max-height: 350px; overflow:hidden">
                            <img src="{{ url('storage/'.$post->img_blog)}}" class="img-fluid my-3"alt="">                
                        </div>
                        @else
                        <div style="max-height: 350px; overflow:hidden">
                            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid my-3"alt="">                
                        </div>
                        @endif
                        <div class="mt-3">
                            {!! $posts->body !!}
                        </div>

                        <div class="pt-3">
                            <p>Kategori :
                                <a href="/categories/{{ $posts->category->slug }}" class="text-decoration-none">
                                    {{ $posts->category->name }}</a>
                            </p>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection