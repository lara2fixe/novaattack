@extends('layouts.two-column')

@section('center-column')
    @include('widgets.head-blog')
		<!-- BLOG -->
		<section id="blog">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
				
	@include($page)
	
					<!-- SIDEBAR -->
					<div class="sidebar col-lg-3 col-md-3 padbot50">
	
    @include('parts.sidebar')

					</div>
					<!-- //SIDEBAR -->


				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BLOG -->
@endsection