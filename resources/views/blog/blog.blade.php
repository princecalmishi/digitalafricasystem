@extends('layouts.myapp2')

@section('content')

<div class="full-width aboutus">
	<div class="overlay"></div>
	  <div class="container">
		 <div class="full-width about-title">
						 			 <h1>Our Blog</h1>
			 	
		 </div>
	  </div>
	</div>               




<div class="full-width blog-info inn_padding">
	<div class="container">

	<hr>
	<h2>@include('inc.messages')</h2>
		<hr>
		
		<div class="row">
			<div class="col-lg-8 col-md-8 sol-sm-12 col-xs-12">
			@foreach($blogd as $blogd)                   
				<div class="blog-info-details full-width">
					<div class="blog-images full-width">
						<a href=""><img src="storage/blog/{{$blogd->image}}" alt="" /></a>
					</div>
					<div class="blog-content full-width">
						<div class="row">
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<div class="box full-width">
									<h4>16</h4>
									<P>Dec<br/>2019</P>
								</div>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
							<div class="full-width blog-title">	
								<h5><a href="">{{$blogd->title}}</a></h5>
								<span>By admin</span>
								<span>{{$blogd->category}}</span>
							</div>	
							</div>
						</div>
						<p>{!!  substr(strip_tags($blogd->body), 0, 200) !!} ...</p>
						<a href="{{route('read', $blogd->id)}}" class="btn">Continue Reading</a>
					</div>
				</div>@endforeach	
										
				<div class="pagination">
					                </div>		
				
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="full-width Proposal">
					<h2>Request for Quick <span>Proposal</span></h2>
					
<div class="wpcf7 no-js" id="wpcf7-f283-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="{{route('contactus')}}" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
 	@csrf
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="283" />
<input type="hidden" name="_wpcf7_version" value="5.7.4" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f283-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
<input type="hidden" name="_wpcf7_recaptcha_response" value="" />
</div>
<p><span class="wpcf7-form-control-wrap" data-name="typeyourname"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Type Your Name" value="" type="text" name="Name" /></span><br />
<span class="wpcf7-form-control-wrap" data-name="typeyouremailaddress"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Type Your Email Address" value="" type="email" name="YourE-mail" /></span><br />
<span class="wpcf7-form-control-wrap" data-name="PhoneNumber"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" value="Phone Number" type="tel" name="phone" /></span><br />
<span class="wpcf7-form-control-wrap" data-name="PhoneNumber"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" value="Subject" type="text" name="Yoursubject" /></span><br />
<span class="wpcf7-form-control-wrap" data-name="typeyourmessagehere"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Type Your Message Here" name="Message"></textarea></span><br />
<span class="wpcf7-form-control-wrap kc_captcha" data-name="kc_captcha"><span class="wpcf7-form-control wpcf7-radio"> 
  </span></span><br />

<button class="btn" type="submit">Schedule A Call</button>
</p><div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
</div>
				</div>
			</div>
		</div>
		
	</div>
</div>



@endsection
