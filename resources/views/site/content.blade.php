@if(isset($pages) && is_object($pages))


@foreach($pages as $k => $page)
  @if($k%2 == 0)

    <section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated">
              {!! $page->text !!}
              <!-- <h2>We create <strong>awesome</strong> web templates</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text  printer took a galley of type and scrambled it to make a type specimen.</p> -->
              <a href="{{ route('page',['alias'=>$page->alias]) }}" class="read_more2">Read more</a> </div>
          </div>
          <div class="col-lg-7 col-sm-5">
      <!-- <img src="{{ asset('assets/img/main_device_image.png') }}" class="zoomIn wow animated" alt="" /> -->
      <img src="{{ asset('assets/img/'.$page->images) }}" class="zoomIn wow animated" alt="" />
      </div>
        </div>
      </div>
    </div>
  </div>
</section>

  @else

  <section id="aboutUs"><!--Aboutus-->
<div class="inner_wrapper">
  <div class="container">
    <h2>{{ $page->name }}</h2>
    <div class="inner_section">
  <div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{ asset('assets/img/'.$page->images) }}" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
        <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
          <div class=" delay-01s animated fadeInDown wow animated">
            {!! $page->text !!}
     <!--  <h3>Lorem Ipsum has been the industry's standard dummy text ever..</h3><br/> 
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.PageMaker including versions of Lorem Ipsum.</p> <br/>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged like Aldus PageMaker including versions of Lorem Ipsum.</p> -->
</div>
<div class="work_bottom"> <span>Want to know more..</span> <a href="{{ route('page',['alias'=>$page->alias]) }}" class="contact_btn">{{ $page->name }}</a> </div>       
     </div>
        
      </div>
    
      
    </div>
  </div> 
  </div>
</section>
<!--Aboutus--> 

  @endif




@endforeach



@endif


<!--Hero_Section--> 




<!--Service-->

@if(isset($services) && is_object($services))

  <section  id="service">
  <div class="container">
    <h2>Services</h2>
    <div class="service_wrapper">
@foreach($services as $k=>$service)
@if($k==0 || $k%3==0)
<div class="row {{ ($k != 0) ? 'borderTop' : '' }}">
@endif

 <div class="col-lg-4 {{ ($k%3>0) ? 'borderLeft' : '' }} {{ ($k>2) ? 'mrgTop' : ''}}">
  <div class="service_block">
    <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa {{ $service->icon }}"></i></span> </div>
    <h3 class="animated fadeInUp wow">{{ $service->name }}</h3>
    <p class="animated fadeInDown wow">{{ $service->text }}</p>
  </div>
</div>

@if(($k+1)%3 ==0)
</div>
@endif

@endforeach
    
    </div>
  </div>
</section>

@endif

<!--Service-->



@if(isset($portfolios) && is_object($portfolios))

<!-- Portfolio -->
<section id="Portfolio" class="content"> 
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>Portfolio</h2>
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio">

@if(isset($tags) && is_object($tags))

    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a></li>
@foreach($tags as $tag)
        <li><a class="" href="#" data-filter=".{{ $tag }}">
          <h5>{{ $tag }}</h5>
          </a></li>
@endforeach
        
      </ul>
    </div>
    <!--/Portfolio Filters --> 

@endif
    

    
    <!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper"> 

@foreach($portfolios as $item)

     <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four {{ $item->filter }} isotope-item">
        <div class="portfolio_img"> <img src="{{ asset('assets/img/'.$item->images) }}" 
          alt="{{ $item->name }}"> </div>        
        <div class="item_overlay">
          <div class="item_info"> 
            <h4 class="project_name">{{ $item->name }}</h4>
          </div>
        </div>
        </div>
      <!--/Portfolio Item --> 
      

@endforeach
      
   
      <!--/Portfolio Item --> 
      
    </div>
    <!--/Portfolio Wrapper --> 
    
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>
<!--/Portfolio --> 


@endif

<section class="page_section" id="clients"><!--page_section-->
  <h2>Clients</h2>
<!--page_section-->
<div class="client_logos"><!--client_logos-->
  <div class="container">
    <ul class="fadeInRight animated wow">
      <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo1.png') }}" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo2.png') }}" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo3.png') }}" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo5.png') }}" alt=""></a></li>
    </ul>
  </div>
</div>
</section>
<!--client_logos-->
@if(isset($peoples) && is_object($peoples))
<section class="page_section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2>Team</h2>
    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
    <div class="team_section clearfix">
@foreach($peoples as $k=>$people)
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-0{{ ($k*3+3) }}s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="{{ asset('assets/img/'.$people->images) }}" alt="{{ $people->name }}">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-0{{ ($k*3+3) }}s">{{ $people->name }}</h3>
        <span class="wow fadeInDown delay-0{{ ($k*3+3) }}s">{{ $people->position }}</span>
        <p class="wow fadeInDown delay-{{ ($k*3+3) }}3s">{{ $people->text }}</p>
      </div>
@endforeach
    
    </div>
  </div>
</section>
@endif
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">	
		 <div class="contact_info">
                            <div class="detail">
                                <h4>UNIQUE Infoway</h4>
                                <p>104, Some street, NewYork, USA</p>
                            </div>
                            <div class="detail">
                                <h4>call us</h4>
                                <p>+1 234 567890</p>
                            </div>
                            <div class="detail">
                                <h4>Email us</h4>
                                <p>support@sitename.com</p>
                            </div> 
                        </div>
       		  
			  
          
          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
          </ul>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          <div class="form">       
				<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		<form name="sentMessage" id="contactForm"  novalidate> 
		<div class="control-group">
		<div class="controls">
		<input type="text" class="form-control input-text" 
		placeholder="Full Name" id="name" required
		data-validation-required-message="Please enter your name" />
		<p class="help-block"></p>
		</div>
		</div> 	
		<div class="control-group">
		<div class="controls">
		<input type="email" class="form-control input-text" placeholder="Email" 
		id="email" required
		data-validation-required-message="Please enter your email" />
		</div>
		</div> 	

		<div class="control-group">
		<div class="controls">
		<textarea rows="10" cols="100" class="form-control input-text" 
		placeholder="Message" id="message" required
		data-validation-required-message="Please enter your message" minlength="5" 
		data-validation-minlength-message="Min 5 characters" 
		maxlength="999" style="resize:none"></textarea>
		</div>
		</div> 		 
		<div id="success"> </div> <!-- For success/fail messages -->
		<button type="submit" class="btn btn-primary input-btn pull-right">Send</button><br />
		</form>
		
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2019. <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank">Free Bootstrap Theme</a> by WebThemez </span> </div>
  </div>
</footer>