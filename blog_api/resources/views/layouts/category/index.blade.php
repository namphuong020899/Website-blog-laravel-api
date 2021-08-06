@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"style="text-transform: capitalize;">Liệt kê danh mục</div>

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
                          <th scope="col">Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($category as $key => $cate)
                        <tr>
                          <th scope="row">{{$key+=1}}</th>
                          <td>{{$cate->title_category}}</td>
                          <td>
                            <form action="{{route('category.destroy',[$cate->id])}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-danger mb-2 btn-sm" value="Delete">
                            </form>
                            <a class="btn btn-success btn-sm"  href="{{route('category.show',[$cate->id])}}">Edit</a></td>
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
