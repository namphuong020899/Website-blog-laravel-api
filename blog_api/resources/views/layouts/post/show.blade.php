@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"style="text-transform: capitalize;">Cập nhật bài viết</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('post.update',[$post->id_post])}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group" style="text-transform: capitalize;">
                            <label for="title">Tiêu đề</label>
                            <input type="text" class="form-control" name="title" value="{{$post->title_post}}">

                            <label for="title">Lượt xem</label>
                            <input type="text" class="form-control" name="post_view" value="{{$post->post_view}}">

                            <label for="title">Ngày cập nhật</label>
                            <input type="text" class="form-control" name="date" value="{{$post->date}}">

                            <label for="short_desc">Mô tả ngắn</label>
                            <textarea type="text" id="ckeditor_short_desc" class="form-control" name="short_desc" rows="5" style="resize: none;">{{$post->short_desc}}</textarea>

                            <label for="desc">Nội dung</label>
                            <textarea type="text" id="ckeditor_desc" class="form-control" name="desc" rows="5">{{$post->desc}}</textarea>

                            <label for="danhmuc">Danh mục</label>
                            <select name="post_category_id" class="form-control">
                                @foreach($category as $cate)
                                <option {{ $cate->id==$post->post_category_id ? 'selected' : '' }} value="{{$cate->id}}">{{$cate->title_category}}</option>
                                @endforeach
                            </select>

                            <label for="hinhanh">Hình ảnh</label>
                            <input type="file" class="form-control" name="image">
                            <p><img class="mt-2" src="{{asset('public/uploads/'.$post->image)}}" height="100px" width="100px"></p>


                            <input type="submit" class="btn btn-primary mt-2" name="thembaiviet" value="Cập nhật">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
