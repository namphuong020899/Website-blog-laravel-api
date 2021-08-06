@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"style="text-transform: capitalize;">Liệt kê bài viết</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                      <thead style="text-transform: capitalize;">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Tiêu đề</th>
                          <th scope="col">Mô Tả ngắn</th>
                          <th scope="col">Nội dung</th>
                          <th scope="col">Danh mục</th>
                          <th scope="col">Hình ảnh</th>
                          <th scope="col">Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($post as $key => $pst)
                        <tr>
                          <th scope="row">{{$key+=1}}</th>
                          <td>{{$pst->title_post}}</td>
                          <td>{!!substr($pst->short_desc,0,50)!!}</td>
                          <td>{!!substr($pst->desc,0,200)!!}</td>
                          <td><img src="{{asset('public/uploads/'.$pst->image)}}" height="100px" width="100px"></td>
                          <td>{{$pst->category->title_category}}</td>
                          <td>
                            <form action="{{route('post.destroy',[$pst->id_post])}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-danger mb-2 btn-sm" value="Delete">
                            </form>
                            <a class="btn btn-success btn-sm"  href="{{route('post.show',[$pst->id_post])}}">Edit</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
