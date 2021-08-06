@extends('layout')
@section('content')
    <!--about-starts-->
    <div class="about">
        <div class="container">
            <div class="about-main">
                <div class="col-md-8 about-left">
                    <div class="about-one">
                        <p>Bài Viết Mới</p>
                        <h3>{{$post_new->title_post}}</h3>
                    </div>
                    <div class="about-two">
                        <a href="{{route('bai-viet.show',['id'=>$post_new->id_post,'slug'=>Str::slug($post_new->title_post)])}}"><img src="{{asset('public/uploads/'.$post_new->image)}}" alt="{{Str::slug($post_new->title_post)}}" width="730px" height="521px" /></a>
                        <p>Đăng bởi <a href="#">Pi Pj</a> Ngày {{$post_new->date}} <a href="#">Lượt xem ({{$post_new->post_view}})</a></p>
                        <p>{!! substr($post_new->short_desc,0,220) !!}...</p>
                        <div class="about-btn">
                            <a href="{{route('bai-viet.show',['id'=>$post_new->id_post,'slug'=>Str::slug($post_new->title_post)])}}">Chi Tiết</a>
                        </div>
                        <ul>
                            <li><p>Chia Sẻ : </p></li>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse"><span class="fb"> </span></a></li>
                            <li><a href="http://twitter.com/share?url={{$url_canonical}}"><span class="twit"> </span></a></li>
                            <li><a href="http://pinterest.com/pin/create/button/?url={{$url_canonical}}&description={{$description_home}}&media={{$image_og_home}}"><span class="pin"> </span></a></li>
                            <li><a href="#"><span class="rss"> </span></a></li>
                            <li><a href="#"><span class="drbl"> </span></a></li>
                        </ul>
                    </div>  
                    <div class="about-tre">
                        @foreach($post as $cate_pst)

                        <div class="a-1">
                            <div class="col-md-6 abt-left">
                                <a href="{{route('bai-viet.show',['id'=>$cate_pst->id_post,'slug'=>Str::slug($cate_pst->title_post)])}}"><img src="{{asset('public/uploads/'.$cate_pst->image)}}" alt="{{Str::slug($cate_pst->title_post)}}" height="200px"  /></a>
                            </div>
                            <div class="col-md-6 abt-left">
                                <h6>{{$cate_pst->category->title_category}}</h6>
                                <h3><a href="{{route('bai-viet.show',['id'=>$cate_pst->id_post,'slug'=>Str::slug($cate_pst->title_post)])}}">{{$cate_pst->title_post}}</a></h3>
                                <p>{!!$cate_pst->short_desc!!}</p>
                                <label>{{$cate_pst->date}}</label>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @endforeach
                        {{$post->links()}}

                        <style type="text/css">
                            .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
                                    z-index: 2;
                                    color: #fff;
                                    cursor: default;
                                    background-color: #190608;
                                    border-color: #190608;
                            }
                            .pagination > li > a, .pagination > li > span{
                                    position: relative;
                                    float: left;
                                    padding: 6px 12px;
                                    margin-left: -1px;
                                    line-height: 1.42857143;
                                    color: #190608;
                                    text-decoration: none;
                                    background-color: #fff;
                                    border: 1px solid #ddd;
                            }
                        </style>

                    </div>  
                </div>
                <div class="col-md-4 about-right heading">

                    <div class="abt-1">
                        <h3>LIÊN HỆ</h3>
                        <div class="abt-one">
                            <img src="https://media.tenor.com/images/e40525a77affb845ce40243e7189a9f2/tenor.gif" alt="" width="280px" height="200px" />
                            <p style="text-transform: capitalize;">Oh bạn cần trợ giúp !!!</p>
                            <div class="a-btn">
                                <a href="{{route('lien-he.index')}}">It's Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="abt-2">
                        <h3>BÀI VIẾT MỚI</h3>
                            @foreach($post_page as $page_new)
                            <div class="might-grid">
                                <div class="grid-might">
                                    <a href="{{route('bai-viet.show',['id'=>$page_new->id_post,'slug'=>Str::slug($page_new->title_post)])}}"><img src="{{asset('public/uploads/'.$page_new->image)}}" class="img-responsive" alt=""> </a>
                                </div>
                                <div class="might-top">
                                    <h4><a href="{{route('bai-viet.show',['id'=>$page_new->id_post,'slug'=>Str::slug($page_new->title_post)])}}">{{$page_new->title_post}}</a></h4>
                                    <p>{!! substr($page_new->short_desc,0,100) !!}...</p> 
                                </div>
                                <div class="clearfix"></div>
                            </div>   
                            @endforeach                     
                    </div>
                    <div class="abt-2">
                        <h3>BÀI VIẾT XEM NHIỀU</h3>
                        <ul>
                            @foreach($post_hot as $page_new)
                            
                            <li><a href="{{route('bai-viet.show',['id'=>$page_new->id_post,'slug'=>Str::slug($page_new->title_post)])}}">{{$page_new->title_post}}. </a></li>
                            @endforeach                     
                        </ul>   
                    </div>
                    <div class="abt-2">
                        <h3>ĐĂNG KÝ NGAY</h3>
                        <div class="news">
                            <form>
                                <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                                <input type="submit" value="Gửi">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>            
            </div>      
        </div>
    </div>
    <!--about-end-->
@endsection