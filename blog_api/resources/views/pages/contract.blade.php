
@extends('layout')
@section('content')

	<!----start-contact---->
	<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>LIÊN HỆ</h3>
			</div>
			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59587.97785449142!2d105.8019440895495!3d21.022736016285187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sin!4v1628147764199!5m2!1svi!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				<div class="contact-text">
					<div class="col-md-4 contact-left">
						<h4>Tìm Kiếm Tài Năng</h4>
						<p>Tôi luôn tìm kiếm những người tài năng để
						gia nhập đội ngũ của chúng tôi.</p>
						<div class="address">
							<h4>Địa Chỉ</h4>
							<p>XXX/3/4 tổ 10 khu 0 Phú Lợi Bình Dương, 
							<span>ĐT: <a style="color: #999;" href="+84 773 654 033">+84 773 654 033</a></span>
							</p>
						</div>
					</div>	
					<div class="col-md-8 contact-right">
					    @if(Session::has('thongbao'))
					        <div style="height: 50px" class="alert alert-success form-control" style="width: 100%">{{Session::get('thongbao')}}</div> 
					    @endif
						<form action="{{route('lien-he.store')}}" method="post">
				        	<input type="hidden" name="_token" value="{{csrf_token()}}">

							<input placeholder="Name" type="text" name="name" required style="margin-left: 0px;">
							<input placeholder="Email" type="text" name="email" required>
							<textarea placeholder="Message" name="content" required></textarea>
							<div class="submit-btn">
								<input type="submit" value="GỬI">
							</div>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!----end-contact---->


@endsection