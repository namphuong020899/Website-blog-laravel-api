@extends('layout')
@section('content')



	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-one">
						<h3 >Từ Khoá Tìm Kiếm : {{$tukhoa}}</h3>
					</div>

					<div class="about-two">
						@foreach($get_post as $key => $p)
						<a href="{{route('bai-viet.show',['id'=>$p->id_post,'slug'=>Str::slug($p->title_post)])}}"><img src="{{asset('public/uploads/'.$p->image)}}" alt="{{Str::slug($p->title_post)}}" width="730px" height="417px" /></a>
						<p>Đăng bởi <a href="#">Pi Pj</a> Ngày {{$p->date}} <a href="#">Lượt xem ({{$p->post_view}})</a></p>
						<p>{!! substr($p->short_desc,0,210) !!}...</p>
						<div class="about-btn">
							<a href="{{route('bai-viet.show',['id'=>$p->id_post,'slug'=>Str::slug($p->title_post)])}}">Chi Tiết</a>
						</div><br><br>

						@endforeach
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