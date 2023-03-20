@extends('layouts.myapp')

@section('content')





<div class="full-width devloper_form inn_padding">
	<div class="container">
		<hr style="background-color: white;">
	@include('inc.messages')
		<hr>
		<h2>Fill in the form to hire a Dev</h2>
		
<div class="wpcf7 no-js" id="wpcf7-f175-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="{{route('hiredevpost')}}" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
@csrf

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<p><span class="wpcf7-form-control-wrap" data-name="Name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" value="" type="text" name="Name" /></span>
		</p>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<p><span class="wpcf7-form-control-wrap" data-name="Email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" value="" type="email" name="YourE-mail" /></span>
		</p>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<p><span class="wpcf7-form-control-wrap" data-name="Phone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Phone number" value="" type="phone" name="phone" /></span>
		</p>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<p><span class="wpcf7-form-control-wrap" data-name="hours"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Number of hours to hire " value="" type="number" name="hours" /></span>
		</p>
	</div>	
	
	
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

				<select class="form-control" name="services">
				<option  class="form-control" value="" disabled>Select option</option>

                      @foreach($devserv as $d)                    
					  <option  class="form-control" value="{{$d->Name}}">{{$d->Name}}</option>
                      @endforeach
                </select>
	</div>

	
	
   </span></span>
		</p>
	</div>
	<p><button class="btn" type="submit">Send <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
	</p>
</div><div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
</div>
	</div>
</div>

</div><!--end ruby_sec_5-->
<script type="text/javascript">
jQuery(".request").click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery(".devloper_form").offset().top},
        'slow');
    return false;
});
</script>
<div class="get_quote full-width">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
				<h3>{{$name}} has everything you need to create an awesome web-based application!</h3>
				<span>The Best in Class IT Service Provider in/from Kenya</span>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
				<a href="{{route('contact')}}" class="btn">Get Free Quote Now!!</a>
			</div>
		</div>
	</div>
</div>


@endsection
