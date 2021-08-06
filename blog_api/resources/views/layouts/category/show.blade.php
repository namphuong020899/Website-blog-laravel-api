@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"style="text-transform: capitalize;">Cập nhật danh mục</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('category.update',[$category_show->id])}}" method="post"  autocomplete="off">
                        @method('PUT')
                        @csrf
                        <div class="form-group" style="text-transform: capitalize;">
                            <label for="title">Tiêu đề</label>
                            <input type="text" class="form-control" name="title" value="{{$category_show->title_category}}">
                            <input type="submit" class="btn btn-primary mt-2" name="themdanhmuc" value="Cập nhật">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
