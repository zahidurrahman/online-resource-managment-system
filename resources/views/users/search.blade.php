@include('include.header')

<div class="home-search">
	<div class="container">
		<div class="row">
		</div>
	</div>
</div>

<div class="videos">
	<div class="container">
		<div class="row">

			@foreach($userdata as $share)
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 prop-4-col">
					<div class="single-room">
						<div class="photo-col3" style="background-image:url(assets/uploads/cover_images/{{$share->book_image}});"></div>
						<div class="single-room-text">
							<h2><a href="/user?id={{$share->id}}">{{$share->book_name}}</a></h2>
							<p>Author:{{$share->book_author}} </p>
							<p class="detail"><a href="/user?id={{$share->id}}">View Details</a></p>
							<p class="detail"><a href="/user?id={{$share->id}}">Download Now</a></p>
						</div>
					</div>
				</div>
			@endforeach

</div>

	</div>
</div>
@include('include.footer')
