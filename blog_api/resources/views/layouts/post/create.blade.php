@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-transform: capitalize;">Thêm bài viết</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('post.store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group" style="text-transform: capitalize;">
                            <label for="title">Tiêu đề</label>
                            <input type="text" class="form-control" name="title">
                            <label for="short_desc">Mô tả ngắn</label>
                            <textarea type="text" id="ckeditor_short_desc" class="form-control" name="short_desc" rows="5" style="resize: none;"></textarea>
                            <label for="desc">Nội dung</label>
                            <textarea type="text" id="ckeditor_desc" class="form-control" name="desc" rows="5"></textarea>
                            <label for="danhmuc">Danh mục</label>
                            <select name="post_category_id" class="form-control">
                                @foreach($category as $cate)
                                <option value="{{$cate->id}}">{{$cate->title_category}}</option>
                                @endforeach
                            </select>
                            <label for="hinhanh">Hình ảnh</label>
                            <input type="file" class="form-control" name="image">


                            <input type="submit" class="btn btn-primary mt-2" name="thembaiviet" value="Thêm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
