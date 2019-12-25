@include('include.header')
<!-- Page Banner Start -->
<?php
 //update total_view
  $id=$_GET["id"];
	$shares = DB::table('resources')->where('id',$id)->first();
  $count_view=$shares->total_view+1;
  $up = DB::table('resources')->where('id',$id)->update(['total_view' => $count_view]);


?>
<div class="slide-single slide-single-page">
	<div class="overlay"></div>
	<div class="text text-page">
		<div class="this-item">
			<h2>{{$shares->book_name}}</h2>
		</div>
	</div>
</div>
<!-- Page Banner End -->

<!-- Channel Page Start -->
<div class="single-channel">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-md-8">
						<div class="channel-text">
							<div class="channel-text">
								<div class="book-table">
									<div class="book-table-row">
										<div class="book-table-cell">Title</div>
										<div class="book-table-cell">{{$shares->book_name}}</div>
									</div>
									<div class="book-table-row">
										<div class="book-table-cell">Author</div>
										<div class="book-table-cell">{{$shares->book_author}}</div>
									</div>
									<div class="book-table-row">
										<div class="book-table-cell">Description</div>
										<div class="book-table-cell">{{$shares->book_des}}	</div>
									</div>
									<div class="book-table-row">
										<div class="book-table-cell">Total View</div>
										<div class="book-table-cell">{{$shares->total_view}}</div>
									</div>

									<!-- <div class="book-table-row">
										<div class="book-table-cell">Total Downloads</div>
										<div class="book-table-cell">{{$shares->total_download}}</div>
									</div> -->

									<div class="book-table-row">
										<div class="book-table-cell">File Size</div>
										<div class="book-table-cell">{{$shares->file_size}} MB</div>
									</div>
									<div class="book-table-row">
										<div class="book-table-cell">Download</div>
										<div class="book-table-cell">
                      <a href="assets/uploads/resources/{{$shares->file_name}}" target="_blank">
											<button  class="btn btn-success">Download Now</button>
										 </a>
                   </form>
									</div>
									</div>

									<div class="book-table-row">
										<div class="book-table-cell">Category</div>
										<div class="book-table-cell">
											@if($shares->book_catagory=='ug')
											    Undergraduate
											@elseif($shares->book_catagory=='pg')
											  Postgraduate
											@else
											  Others
											@endif

										</div>
									</div>

									<div class="book-table-row">
										<div class="book-table-cell">Sub Category</div>
										<div class="book-table-cell">
											@if($shares->book_sub_catagory=='eng')
											    EETE

                      @elseif($shares->book_sub_catagory=='bba')
    										BBA
                      @elseif($shares->book_sub_catagory=='civil')
          							CIVIL
                      @elseif($shares->book_sub_catagory=='cse')
            						CSE

                      @elseif($shares->book_sub_catagory=='law')
                          LAW
                      @elseif($shares->book_sub_catagory=='english')
                           ENGLISH
                      @elseif($shares->book_sub_catagory=='sociology')
                        SOCIOLOGY
                      @elseif($shares->book_sub_catagory=='pharmacy')
                        PHARMACY
											@elseif($shares->book_sub_catagory=='it')
											  Information Technology
										  @elseif($shares->book_sub_catagory=='cp')
												  Conference Papers
											@elseif($shares->book_sub_catagory=='js')
														  Journal Papers
											@elseif($shares->book_sub_catagory=='sf')
													Software
											@elseif($shares->book_sub_catagory=='nv')
													Novel Books
											@else
											  --
											@endif

										</div>
									</div>

								</div>

								<div class="gap-small"></div>
								<h2></h2>
								<div class="sharethis-inline-share-buttons"></div>
								<div class="gap-small"></div>
								<h2></h2>
																<!-- Facebook Comment Main Code (got from facebook website) -->
								<div class="fb-comments" data-href="https://demosly.com/xicia/ebook/book.php?slug=color-mixing-the-van-wyk-way-a-manual-for-oil-painters" data-numposts="5"></div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="channel-text">
							<div class="channel-video">
								<img src="assets/uploads/cover_images/{{$shares->book_image}}" alt="" style="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
	<div class="channel-categories">
	<h2>Sub-Categories</h2>
	<ul>
		<li><a href="/eng">EETE</a></li>
    <li><a href="/bba">BBA</a></li>
    <li><a href="/civil">CIVIL</a></li>
    <li><a href="/cse">CSE</a></li>
    <li><a href="/law">LAW</a></li>
    <li><a href="/english">ENGLISH</a></li>
    <li><a href="/sociology">SOCIOLOGY</a></li>
    <li><a href="/pharmacy">PHARMACY</a></li>
		<li><a href="it">Information Technology</a></li>
		<li><a href="/cp">Conference Paper</a></li>
		<li><a href="/jn">Journal Paper</a></li>
		<li><a href="/sf">Software</a></li>
		<li><a href="/nv">Novel </a></li>
	</ul>
</div>

<div class="channel-categories">
<h2>Add Request</h2>
<ul>
	<li>
		<form method="POST" action="{{ route('add_request') }}">
				@csrf
			<div class="form-group">
					<label for="exampleFormControlTextarea1">Request Details</label>
					<textarea class="form-control" name="details" id="exampleFormControlTextarea1"  rows="3" required></textarea>
			</div>

  <button type="submit" class="btn btn-primary">Send Request</button>
</form>
	</li>

</ul>
</div>

	<div class="sidebar-adv">
					<a href="#"><img src="assets/uploads/advertisement-sidebar-1.png" alt="advertisement"></a>

	</div>
		<div class="sidebar-adv">
					<img src="assets/uploads/advertisement-sidebar-2.png" alt="advertisement">

	</div>


			</div>
		</div>
	</div>
</div>
<!-- Channel Page  End -->
@include('include.footer')
