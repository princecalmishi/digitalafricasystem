@extends('layouts.myapp')

@section('content')


<div class="full-width aboutus">
	<div class="overlay"></div>
	  <div class="container">
		 <div class="full-width about-title">
						 			 <h1>Work</h1>
			 	
		 </div>
	  </div>
	</div>               

<div class="full-width about-info inn_padding">
	<div class="container our_work">
   
    <div id="portfoliolist" class="full-width">
      @foreach($compwok as $compwok)
      
            <div class="portfolio web" data-cat="{{$compwok->pcat}}">
        <div class="portfolio-wrapper">
          <div class="full-width port_name">
							
          	  <center>   <a href="{{$compwok->link}}" target=”_blank”><img style="height: 300px;" src="storage/companywork/{{$compwok->image}}" alt="" /><h2>{{$compwok->title}} - In {{$compwok->pcat}}</h2></a></center>
				 
          </div>
        </div>
      </div>
      @endforeach
         
          
    </div>
  </div>
    </div>
<script type="text/javascript" src="../wp-content/themes/twentyseventeen/assets/js/jquery.mixitup.min.js"></script>
<!-- <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js" integrity="sha512-94MnA5fk4ngfEGlKGdjFS+14eskTJP+/m0QhYZKCv74+eeRPleLLqm3J9cvKxjyXu/TUywNtE+DaJni2epBGSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script type="text/javascript">
	//jQuery(function () {
		var filterList = {
			init: function () {
				jQuery('#portfoliolist').mixItUp({
				selectors: {
				  target: '.portfolio',
				  filter: '.filter'	
			  },
			  load: {
			  filter: '.android-app, .design, .ios-app, .software, .web'  
			}     
				});								
			}
		};
		// Run the show!
		filterList.init();	
	//});	
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