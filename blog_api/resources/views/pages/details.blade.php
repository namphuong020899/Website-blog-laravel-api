@extends('layout')
@section('content')

	<!--start-single-->
	<div class="single">
		<div class="container">
				<div class="single-top">
						<a href="#"><img class="img-responsive" src="{{asset('public/uploads/'.$post->image)}}" alt=" " width="100%"></a>
					<div class=" single-grid">
						<h4>SED LOREET ALIQUAM LEOTELLUS DOLOR DAPIBUS</h4>				
							<ul class="blog-ic">
								<li><a href="#"><span> <i  class="glyphicon glyphicon-user"> </i>Super user</span> </a> </li>
		  						 <li><span><i class="glyphicon glyphicon-time"> </i>June 14, 2013</span></li>		  						 	
		  						 <li><span><i class="glyphicon glyphicon-eye-open"> </i>Hits:145</span></li>
		  					</ul>		  						
						<p>{!!$post->desc!!}</p>
						
					</div>
<!-- 					<div class="comments heading">
						<h3>Comments</h3>
						<div class="media">
							<div class="fb-comment-embed" data-href="https://www.facebook.com/zuck/posts/10102577175875681?comment_id=1193531464007751&amp;reply_comment_id=654912701278942" data-width="560" data-include-parent="false"></div>
					 	</div>
    				</div> -->
    				<div class="comment-bottom heading">
    					<h3>Nhận Xét</h3>
    					<form>	
    						<div class="fb-comments" data-href="{{$url_canonical}}" data-width="560" data-numposts="5"></div>
						</form>
    				</div>
				</div>	
			</div>					
	</div>
	<!--end-single-->

@endsection