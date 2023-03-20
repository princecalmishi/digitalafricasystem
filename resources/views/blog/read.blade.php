@extends('layouts.myapp2')

@section('content')

<div class="full-width aboutus">
	<div class="overlay"></div>
	  <div class="container">
		 <div class="full-width about-title">
						 			 <h1>{{$blogread->title}}</h1>
			 	
		 </div>
	  </div>
	</div>               




<div class="full-width inn_padding">
	<div class="container">
		<hr>
	<h2>@include('inc.messages')</h2>
		<hr>
<div class="row Blogs_page Blogs_detail_page">
	<div class="col-md-9 col-sm-8 all_blogs">
		<div class="full-width sp_blog">
			<div class="full-width blog_detail">
				<div class="full-width">
					<div class="blog_title_info">
						<h2>{{$blogread->title}}</h2> 
					</div>
				</div>
				<div class="full-width">
					
<div class="wp-block-image"><figure class="aligncenter is-resized">
	<img decoding="async" src="" alt="storage/blog/{{$blogread->image}}" class="wp-image-1346" width="805" height="403" srcset="/storage/blog/{{$blogread->image}} 1024w, /storage/blog/{{$blogread->image}} 300w, /storage/blog/{{$blogread->image}} 768w, /storage/blog/{{$blogread->image}} 1200w" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px" />
	</figure>
</div>

<p>{{$blogread->body}}</p>


				</div>
			</div>
			<div class="clearfix"></div>
			<br />
			<br />
			<div class="full-width blog-content"><a href="{{route('blog')}}" class="btn">Back To Our Blogs</a></div>
		</div>  
	</div>
	<div class="col-md-3 col-sm-4 Sidebar">
				<div class="full-width blog-categories all_side_category follw_us">
			<h5>Follow Us:</h5>
			<ul class="f_social">
																						<li><a href="https://www.facebook.com/{{$facebook}}/" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
																								<li><a href="https://twitter.com/{{$twitter}}" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
																								<li><a href="https://www.instagram.com/{{$instagram}}/" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							</li>
																								<li><a href="https://in.pinterest.com/{{$pinterest}}/" target="_blank">
								<i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
							</li>
																								<li><a href="skype:{{$skype}}?call" target="_blank">
								<i class="fa fa-skype" aria-hidden="true"></i></a>
							</li>
											  
							</ul>
		</div>
		<div class="full-width blog-categories all_side_category quick_contact">
			<h5>Quick Contact</h5>
			<ul>
				<li><a href="mailto:info@sinontechs.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$email1}}</a></li>
				<li><a href="tel:+91 8141374997"><i class="fa fa-phone" aria-hidden="true"></i> {{$phone1}}</a></li>
			</ul>
		</div>
		<div class="full-width subscribe_newsletter quick_response Proposal">
			<h2>Request for Quick <span>Proposal</span></h2>
			
<div class="wpcf7 no-js" id="wpcf7-f283-p1345-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="{{route('contactus')}}" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
@csrf
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="283" />
<input type="hidden" name="_wpcf7_version" value="5.7.4" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f283-p1345-o1" />
<input type="hidden" name="_wpcf7_container_post" value="1345" />
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
</div>	</div>
</div>

@endsection

