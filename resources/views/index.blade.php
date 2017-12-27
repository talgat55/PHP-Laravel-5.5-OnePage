<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	<!-- Favicon -->
	<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />
	
    <!-- Stylesheets  -->
	<link href="http://fonts.googleapis.com/css?family=Jura:300,400,500,600" rel="stylesheet" type="text/css" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" /> 
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />  
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/onenav.js') }}"></script>   
    <script type="text/javascript" src="{{ asset('js/default.js') }}"></script>
    <!-- Document Title -->
    <title>{{ config('app.name', 'Young | The One-Page HTML5 Template') }} </title>

</head>

<body class="main-body-class">

    <!-- Wrapper -->
    <div id="wrapper" class="clearfix">

        <!-- Header -->
        <header id="header" >
			 <!-- top bar -->
			 <!--
				<div class="top-bar">
					<div class="container clearfix">
						<div class="top-bat-left">
							<span><i class="fa fa-phone"></i>+ 2-22-22-34 </span>
							<span><i class="fa fa-envelope-o"></i><a href="#">lightxdesign@yahoo.com</a></span>
						</div>
						<div class="top-bat-right">
							<ul class="top-social clearfix">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-git"></i></a>
							</ul>
						</div>
					</div>
				</div>-->
			  <!-- end top bar -->
            <div id="header-wrap"> <!-- Header wrap -->
                <div class="container clearfix">
 
                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.html" class="logo"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a> 
                    </div>
					<!-- Logo end -->
						<!-- menu -->
						<div class="mobil-menu">
							<i class="fa fa-bars"></i>
							<i class="fa fa-times"></i>
						</div>
                    <!-- Primary Navigation -->
                    <nav id="primary-menu" class="navigation-one">

                        <ul class="main-navigation">
                            <li class="main-row-menu"><a href="#welcome"><div>Welcome</div></a></li>
							<li class="main-row-menu"><a href="#about"><div>About</div></a></li>
							<li class="main-row-menu"><a href="#works"><div>Work</div></a></li>
							<li class="main-row-menu"><a href="#service"><div>Service</div></a></li>
							
							<li class="main-row-menu"><a href="#price"><div>Price </div></a></li>
							<li class="main-row-menu"><a href="#blog"><div>Blog </div></a></li>
							<li class="main-row-menu"><a href="#addinf"><div>Feature</div></a></li> 
							<li class="main-row-menu"><a href="#contact"><div>Contact</div></a></li> 
							
							
                        </ul>

						<!-- menu end -->



                    </nav><!-- #primary menu end -->

                </div>
 
			</div><!-- Header wrap end -->

        </header><!-- #header end -->
		 
        <!-- Content -->
		<div class="main-wallpapers">
		
			<section class="slide-top">
		 
			<div class="slider-content" >
				<h1>we create you site dreams</h1>
			</div>
			<div class="buttons-slide">
				<div class="button-mouse">
					<span class="animate-mouse-scroll">
						
					</span>			
						
				</div>
				<p>Scroll</p>
			</div>	
			</section>		
			<section id="welcome">
				<div style="background-color: #f9f9f9;">
					<div class="container clearfix">
						<div class="row">
							<div class="col-md-6 padding-row">
								
									<h2 class="content-header">WELCOME TO YOUNG</h2>
									<div class="border-title" style="margin: 0;"></div>
									<h3 class="content-header">SOME  GREAT FACTS</h3>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since..</p>
										<ul class="content-list">
											<li><i class="fa fa-star"></i><p>Exclusive design</p></li>
											<li><i class="fa fa-star"></i><p>100% Responsive design</p></li>
											<li><i class="fa fa-star"></i><p>Cross-browsers</p></li>
											<li><i class="fa fa-star"></i><p>Awesome fonts</p></li>
											<li><i class="fa fa-star"></i><p>Retina graphics</p></li>
										</ul> 
							</div>
							<div class="col-md-6 padding-row" style="text-align: center;">
								<div style="padding-top: 70px;">
								<img src="{{ asset('images/phones.png') }}"  alt="Phones"/>
								</div>
							</div>
						</div>
					</div>
				</div> 
			 	
			</section>	
			<section id="about"> 
				<div class="container clearfix">
					<div class="row">
						<div class="col-md-12 padding-row-top">
							
								<h2 class="content-header text-center" style="margin-top:0;">OUR TEAM</h2>
								<div class="border-title center"></div>
							<div style="padding-top: 20px; overflow: hidden;">
								<div class="team-rows">
									<div class="col-md-4 padding-row-bottom">
										
										<img class="team-images"  src="{{ asset('images/team.jpg') }}"/>
										<div class="team-rows-over">
											<div class="team-rows-over-bg first"></div>										
											<div class="bre-holder">
											<div class="bre-holder-inc">
											<div class="bre-inler">
												<h4 class="team-name text-center"> OLiver Smith</h4> 
												<h6 class="team-rol text-center">SEO</h6>
												<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since..</p>
												<ul class="team-social clearfix">
													<a href="#"><i class="fa fa-twitter"></i></a>
													<a href="#"><i class="fa fa-facebook"></i></a>
													<a href="#"><i class="fa fa-google-plus"></i></a>
													<a href="#"><i class="fa fa-git"></i></a>
												</ul> 
											</div>
											</div>
											</div>
										</div>
									</div>
						
									<div class="col-md-4 padding-row-bottom">
										<div class="team-rows-over white-team">
											<div class="team-rows-over-bg two"></div>
												<div class="team-rows-over-color"></div>
											<div class="bre-holder">
											<div class="bre-holder-inc">
											<div class="bre-inler">
												<h4 class="team-name text-center"> OLivia Smith</h4>
												<h6 class="team-rol text-center">Web Developer</h6>
												<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since..</p>
												<ul class="team-social clearfix">
													<a href="#"><i class="fa fa-twitter"></i></a>
													<a href="#"><i class="fa fa-facebook"></i></a>
													<a href="#"><i class="fa fa-google-plus"></i></a> 
												</ul>
											</div>
											</div>
											</div>
										</div>
										<img class="team-images" src="{{ asset('images/team2.jpg') }}"/>

									
									</div>
									
									<div class="col-md-4 padding-row-bottom">
										
										<img class="team-images"  src="{{ asset('images/team3.jpg') }}"/>
										<div class="team-rows-over">
											<div class="team-rows-over-bg tree"></div>										
											<div class="bre-holder">
											<div class="bre-holder-inc">
											<div class="bre-inler">
												<h4 class="team-name text-center">Taylor Smith</h4>
												<h6 class="team-rol text-center">Manager</h6>
												<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since..</p>
												<ul class="team-social clearfix">
													<a href="#"><i class="fa fa-twitter"></i></a>
													<a href="#"><i class="fa fa-facebook"></i></a>
												</ul>
											</div>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div> 
						</div>
					</div>
				</div>
				<div style="background-color: #f9f9f9;">
					<div class="container clearfix">
						<div class="row padding-row-top"> 
						<h2 class="content-header text-center" style="margin-top:0;">WHAT WE DO</h2>
							<div class="border-title center" style="    margin-bottom: 40px;"></div>
								<div class="col-md-4 icon-feature-box medium padding-row-bottom">
									<div class="fbox-icon medium">
										<a href="#"><i class="wow medium-size-icon color-main fa fa-html5 icon-float-left"></i></a>
										<h3>HTML5 </h3>
									</div>
									
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
								</div>

								<div class="col-md-4 icon-feature-box medium padding-row-bottom">
									<div class="fbox-icon medium">
										<a href="#"><i class="medium-size-icon color-main fa fa-desktop icon-float-left"></i></a>
										<h3>RESPONSIVE LAYOUT</h3>
									</div>
									
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
								</div>

								<div class="col-md-4 icon-feature-box medium padding-row-bottom">
									<div class="fbox-icon medium">
										<a href="#"><i class="medium-size-icon color-main fa fa-lightbulb-o icon-float-left"></i></a>
										<h3>CSS 3</h3>
									</div>
									
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
								</div>
								<div class="col-md-4 icon-feature-box medium padding-row-bottom">
									<div class="fbox-icon medium">
										<a href="#"><i class="wow medium-size-icon color-main fa fa-users icon-float-left"></i></a>
										<h3>DEDICATED TEAM</h3>
									</div>
									
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
								</div>

								<div class="col-md-4 icon-feature-box medium padding-row-bottom">
									<div class="fbox-icon medium">
										<a href="#"><i class="medium-size-icon color-main fa fa-comment icon-float-left"></i></a>
										<h3>CONFIDENTIAL CONSULTING</h3>
									</div>
									
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
								</div>

								<div class="col-md-4 icon-feature-box medium padding-row-bottom">
									<div class="fbox-icon medium">
										<a href="#"><i class="medium-size-icon color-main fa fa-phone icon-float-left"></i></a>
										<h3>LISTEN CAREFULL</h3>
									</div>
									
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
								</div>
						</div>
					</div>
				</div>
			
					<div style="background: url(images/girl.jpg); padding: 0 0 130px; position: relative; background-size: cover!important; color: #fff;">
				<div style="background-color: rgba(0,0,0,0.6);
							color: #fff;
							position: relative;
							z-index: 99;" >
					<div class="container clearfix">
						<div class="row padding-row-top">
							<div class="col-md-6 padding-row-bottom">
											<div class="team-skills medium-weight">  
												 <div class="progress-bar-block"> 
													 <div class="team-skills-progress-bar" style="width: 90%;"> </div>
													 <span>HTML5,%</span> <span class="team-percent-progressbar">90</span>
												 </div>
												 <div class="progress-bar-block"> 
													 <div class="team-skills-progress-bar" style="width: 80%;"> </div>
													 <span>PHOTOSHOP,%</span> <span class="team-percent-progressbar">80</span>	
												</div>
												<div class="progress-bar-block"> 
													 <div class="team-skills-progress-bar" style="width: 90%;"> </div>
													 <span>CSS,%</span> <span class="team-percent-progressbar">90</span>	
												</div>												 
											</div>
							</div>
							<div class="col-md-6 padding-row-bottom">
											<div class="team-skills medium-weight">  
												 <div class="progress-bar-block"> 
													 <div class="team-skills-progress-bar" style="width: 90%;"> </div>
													 <span>WORDPRESS,%</span> <span class="team-percent-progressbar">90</span>
												 </div>
												 <div class="progress-bar-block"> 
													 <div class="team-skills-progress-bar" style="width: 80%;"> </div>
													 <span>DESIGN,%</span> <span class="team-percent-progressbar">80</span>	
												</div>
												<div class="progress-bar-block"> 
													 <div class="team-skills-progress-bar" style="width: 90%;"> </div>
													 <span>PHP FRAMEWORKS,%</span> <span class="team-percent-progressbar">90</span>	
												</div>												 
											</div>
							</div>
						</div>				
					</div>
				</div>
						<div class="overlay-layer"></div>
						<h2 class="content-header text-center" style="position: relative; z-index: 2; color: #fff; padding-top: 130px;">WORDS OUR CLIENTS</h2>
						<div class="border-title center white"></div>
							<div class="container clearfix">
								<ul class="testimonials-slider" style="padding-top: 20px; position: relative; z-index: 2;">
									<li><p class="text-center" style=" font-size: 17px;">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"</p> <span style="font-weight: 600;text-transform: uppercase;">- Antoni Queen</span></li>
									<li><p class="text-center" style=" font-size: 17px;">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"</p> <span style="font-weight: 600;text-transform: uppercase;">- Olivia Right</span></li>
								 
								</ul>
							</div>
					</div>
			 	
			</section>	
			<section id="works">  
					<h2 class="content-header text-center" style="padding-top: 90px;">OUR WORKS</h2>
					<div class="border-title center" style="margin-bottom: 10px;"></div>
					<div class="filter-portfolio filter">
						<li class="active"><a href="#"  data-filter>All</a></li>
						<span class="portfolio-filter-separator">/</span>
						<li><a href="#" data-filter=".term_id_1">Design</a></li>
						<span class="portfolio-filter-separator">/</span>
						<li><a href="#" data-filter=".term_id_2">Print</a></li>
						<span class="portfolio-filter-separator">/</span>
						<li><a href="#" data-filter=".term_id_3">Branding</a></li> 
					</div>
					<ul class="portfolio-rows">
						
						@foreach ($portfolios as $portfolio)

							<li class="portfolio-item term_id_2">
								
								<div class="overportfolio">
									<img src="{{ asset('storage/portfolio/$portfolio->file') }}" alt="{{ $portfolio->name }}"  /> 
								 <i class="fa fa-plus"></i>
								 <a href="#" class="portfolio-item-holder"><i class="fa fa-chevron-right"></i></a>
										<h4 class="title-portfolio-item">
											{{ $portfolio->name }}
										</h4>	
									 
										
								</div>	 
								
							
							</li>

						 @endforeach 

						<!--
							<li class="portfolio-item term_id_2">
								
								<div class="overportfolio">
									<img src="{{ asset('images/portfolio.jpg') }}" alt="Portfolio items"  /> 
								 <i class="fa fa-plus"></i>
								 <a href="#" class="portfolio-item-holder"><i class="fa fa-chevron-right"></i></a>
										<h4 class="title-portfolio-item">
											Canon
										</h4>	
									 
										
								</div>	 
								
							
							</li>
						<li class="portfolio-item term_id_1"> 
							<div class="overportfolio">
								<img src="{{ asset('images/portfolio2.jpg') }}" alt="Portfolio items"  />
								 
								 <i class="fa fa-plus"></i>
								<a href="#" class="portfolio-item-holder"><i class="fa fa-chevron-right"></i></a>
									<h4 class="title-portfolio-item">
										Phone
									</h4>	 
									
							</div>	  
						
						</li>

						<li class="portfolio-item term_id_1"> 
							<div class="overportfolio">
								<img src="{{ asset('images/portfolio3.jpg') }}" alt="Portfolio items"  />
								 <i class="fa fa-plus"></i>
								<a href="#" class="portfolio-item-holder"><i class="fa fa-chevron-right"></i></a>
									<h4 class="title-portfolio-item">
										Interior
									</h4>	
								 
									
							</div>	 
						
						</li>
						
						<li class="portfolio-item term_id_3"> 
							<div class="overportfolio">
								<img src="{{ asset('images/portfolio4.jpg') }}" alt="Portfolio items"  />
								 <i class="fa fa-plus"></i>
								<a href="#" class="portfolio-item-holder"><i class="fa fa-chevron-right"></i></a>
									<h4 class="title-portfolio-item">
										Stools
									</h4> 
									
							</div>	  
						
						</li>
						<li class="portfolio-item term_id_3"> 
							<div class="overportfolio">
								<img src="{{ asset('images/portfolio5.jpg') }}" alt="Portfolio items"  />
								 <i class="fa fa-plus"></i>
								<a href="#" class="portfolio-item-holder"><i class="fa fa-chevron-right"></i></a>
									<h4 class="title-portfolio-item">
										Cups
									</h4>	 
									
							</div>	  
						
						</li>
						<li class="portfolio-item term_id_2"> 
							<div class="overportfolio">
								<img src="{{ asset('images/portfolio6.jpg') }}" alt="Portfolio items"  />
								 <i class="fa fa-plus"></i>
								<a href="#" class="portfolio-item-holder"><i class="fa fa-chevron-right"></i></a>
									<h4 class="title-portfolio-item">
										Women
									</h4> 
									
							</div>	  
						
						</li>
						-->
						
					</ul> 
					<div style="margin: 40px 0 90px 0; text-align: center; ">
						<a href="#" style="text-decoration:none"  class="button-portfolio">SHOW MORE</a> 
					</div>
			</section>	
			<section id="service">		
				<div style="background-color: #f9f9f9;">
					<div class="container clearfix">
						<div class="row">
							<div class="col-md-6 padding-row" style="text-align: center;">
								<div style="padding-top: 70px;">
								<img src="{{ asset('images/redyima.png') }}"  alt="Desktop" style="    padding-top: 25px;"/>
								</div>
							</div>
							<div class="col-md-6 padding-row">
								
									<h2 class="content-header">OUR SERVICE</h2>
									<div class="border-title"></div> 
									<p  style="margin-bottom:30px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since..</p>
										<div class="fbox-icon medium" style="margin-bottom:30px;">
												<a href="#"><i class="fa fa-mobile" style="font-size: 52px;"></i></a>
												<h3>MOBILE APPLICATIONS</h3>
										
											
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
										</div>
											<div class="fbox-icon medium">
												<a href="#"><i class="fa fa-desktop"></i></a>
												<h3>WEB APPLICATIONS</h3>
											
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
											</div>
											
							</div>

						</div>
					</div>
				</div> 
				
						<div class="row">
							<div class="col-md-4 padding-row" style="background-color: #333;">
										<div class="fbox-icon-servi" >
												<a href="#"><i class="fa fa-user"></i></a>
												<h3>SUPPORT</h3>
										
											
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
										</div>
							</div>
							<div class="col-md-4 padding-row"  style="background-color: #444;" >
											<div class="fbox-icon-servi">
												<a href="#"><i class="fa fa-code"></i></a>
												<h3>CLEAN CODE</h3>
											
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
											</div>
							</div>
							<div class="col-md-4  padding-row"  style="background-color: #333;">
											<div class="fbox-icon-servi">
												<a href="#"><i class="fa fa-bolt"></i></a>
												<h3>FLEXABILITY</h3>
											
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
											</div>			
							</div>

						</div>
						
				<div style="background: url(images/image.jpg) center center; position: relative;  background-size: cover;">
				<div class="over-lay-gray"></div>
					<div class="container clearfix">
						<div class="row padding-row-top"  style="    text-align: center;"> 
										<div class="col-md-3 padding-row-bottom"  >
											<img src="{{ asset('images/clients.png') }}"/>
										</div>
										<div class="col-md-3 padding-row-bottom"  >
											<img src="{{ asset('images/clients2.png') }}"/>
										</div>
										<div class="col-md-3 padding-row-bottom"  >
											<img src="{{ asset('images/clients3.png') }}"/>
										</div>
										<div class="col-md-3 padding-row-bottom"  >
											<img src="{{ asset('images/clients4.png') }}"/>
										</div>
						</div>
					</div>
				</div>			
			</section>	
			
			<section id="price"> 
				<div class="container clearfix">
					<h2 class="content-header text-center" style="padding-top: 90px;  ">OUR PRICE</h2>
					<div class="border-title center  "></div>
					<ul class="price-table ">
						<li class="price-item">
							<span class="price-item-bg">
								<h2 class="price-name">START</h2>
							</span>
							<ul>
								<li class="price-term" style=" padding-top: 20px;">$50</li>
								<li class="price-conf">Free Support</li>
								<li class="price-conf">4GB Disk Space</li>
								<li class="price-conf">1 Domains</li>
								<li class="price-conf">-</li>
								<li class="price-conf">-</li>
								<a href="#" class="price-button">BUY</a>
							</ul>
						
						</li>
					
						<li class="price-item select">
							<span class="price-item-bg">
								<h2 class="price-name">BASIC</h2>
							</span>
							<ul> 
								<li class="price-term" style=" padding-top: 20px;">$1O0</li>
								<li class="price-conf">Free Support</li>
								<li class="price-conf">4GB Disk Space</li>
								<li class="price-conf">1 Domains</li>
								<li class="price-conf">Unlimited Users</li>
								<li class="price-conf">-</li>
								<a href="#" class="price-button">BUY</a>
							</ul>
						
						</li>
						
						<li class="price-item">
							<span class="price-item-bg">
								<h2 class="price-name">UNLIMITED</h2>
							</span>
							<ul> 
								<li class="price-term" style=" padding-top: 20px;">$2O0</li>
								<li class="price-conf">Free Support</li>
								<li class="price-conf">4GB Disk Space</li>
								<li class="price-conf">1 Domains</li>
								<li class="price-conf">Unlimited Users</li>
								<li class="price-conf">Automatic Backup</li>
								<a href="#" class="price-button">BUY</a>
							</ul>
						
						</li>
						
					</ul>
				</div>
				
				
				
				
			</section>	
			
			<section id="blog" style="background-color: #f9f9f9;">
			
				<div class="container clearfix">
					<h2 class="content-header text-center padding-row-top " style="padding-top: 90px;  ">OUR BLOG</h2>
					<div class="border-title center"></div>
					<div class="row">
						<div class="col-lg-6 padding-row-bottom">
							<div class="blog-box-wrapper">
								<img class="blog-box-img" src="{{ asset('images/blog4.jpg') }}"/>
								<div class="date-blog">
									28
									<span>DEC</span>
								
								</div>
								<div class="blog-box clearfix">
									<h4>Creative Catalogs by Karlssonwilker inc</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
									<div class="block-blog-button clearfix">
										<a href="#">Read More</a>
										<span><i class="fa fa-eye"></i>23</span>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-lg-6 padding-row-bottom">
							<div class="blog-box-wrapper">
								<img class="blog-box-img" src="{{ asset('images/blog3.jpg') }}"/>
								<div class="date-blog">
									20
									<span>DEC</span>
								
								</div>
								<div class="blog-box clearfix">
									<h4>Epic self-promotion by Jens Lennartsson</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
									<div class="block-blog-button clearfix">
										<a href="#">Read More</a>
										<span><i class="fa fa-eye"></i>993</span>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			
			</section>	
			<div style="background: url(images/image2.jpg); position: relative; background-size: cover;">
					<div class="container clearfix">
						<div class="overlay-pattern-layer"></div>
							<div class="row padding-row-top" style="position: relative; z-index: 2;"> 
									<div class="col-md-3 padding-row-bottom"  >
										<div class="counter-box " > 
										 <div class="counter" data-from="0" data-to="988" data-speed="10000"></div>
										   <h5>Lines of Codes</h5>
										</div>
									</div>

									<div class="col-md-3 padding-row-bottom" >
										<div class="counter-box   " >
											<div class="counter" data-from="0" data-to="550" data-speed="100000"></div>
											<h5>Happy Clients</h5>
										</div>
									</div>

									<div class="col-md-3 padding-row-bottom" >
										<div class="counter-box  " >
											<div class="counter" data-from="0" data-to="990" data-speed="10000"></div>
											<h5>Cups of Cofee</h5>
										</div>
									</div>

									<div class="col-md-3 padding-row-bottom"  >
										<div class="counter-box  " >
											 <div class="counter" data-from="0" data-to="500" data-speed="100000"></div>
											<h5>Hours of Coding</h5>
										</div>
									</div>
							</div>
					</div>
			</div>
			<section id="addinf" >
				<div style="background-color: #FFF;">
					<div class="container clearfix">
						<div class="row">

							<div class="col-md-6 padding-row">
								
									<h2 class="content-header" style="padding-top: 115px;">ALSO WE </h2>
									<div class="border-title"></div> 
									<p  style="margin-bottom:30px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since..</p>
									 
											
							</div>
							<div class="col-md-6 padding-row" style="text-align: center;">
								<div>
								<img src="{{ asset('images/pad.png') }}"  alt="Desktop"/>
								</div>
							</div>
						</div>
					</div>
				</div> 
				<div style="background-color: #f9f9f9;">
					<div class="container clearfix">
						<div class="row">
								<h2 class="content-header text-center padding-row-top " style="padding-top: 90px;">FEATURE WORKS</h2>
								<div class="border-title center"></div>
							<div class="col-md-4 padding-row" style=" padding-top: 6px;">
							<img src="{{ asset('images/feat.jpg') }}">
							<h3 >DESKTOP</h3> 
									
							<p  style="margin-bottom:30px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since..</p>
								<ul class="list-featt-works">
									<li>
										<p>80%</p><span><i class="fa fa-cog"></i>CUSTOMIZE</span>
									</li>									
									<li>
										<p>99%</p><span><i class="fa fa-child"></i>SUPPORT</span>
									</li>									
									<li>
										<p>80%</p><span><i class="fa fa-check"></i>RETINA</span>
									</li>
								</ul>
											
							</div>
							<div class="col-md-4 padding-row" style=" padding-top: 6px;"> 
							<img src="{{ asset('images/feat2.jpg') }}">
							<h3 >XBOX</h3> 
									
							<p  style="margin-bottom:30px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since..</p>
								<ul class="list-featt-works">
									<li>
										<p>80%</p><span><i class="fa fa-cog"></i>CUSTOMIZE</span>
									</li>									
									<li>
										<p>79%</p><span><i class="fa fa-child"></i>SUPPORT</span>
									</li>									
									<li>
										<p>100%</p><span><i class="fa fa-check"></i>RETINA</span>
									</li>
								</ul>		 
									
							</div>	
							<div class="col-md-4 padding-row" style=" padding-top: 6px;"> 
							<img src="{{ asset('images/feat3.jpg') }}">
							<h3>CUPS</h3> 
									
							<p  style="margin-bottom:30px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since..</p>
								<ul class="list-featt-works">
									<li>
										<p>60%</p><span><i class="fa fa-bars"></i>PARALLAX</span>
									</li>									
									<li>
										<p>80%</p><span><i class="fa fa-child"></i>SUPPORT</span>
									</li>									
									<li>
										<p>100%</p><span><i class="fa fa-check"></i>RETINA</span>
									</li>
								</ul>			 
									
							</div>
						</div>
					</div>
				</div> 
			</section>
		</div>
		<!-- Content  end-->
				 
        <!-- Footer -->
        <footer id="contact" class="footer-wallpapers " style="background: url(images/image.jpg) center center;position: relative; background-size: cover;">
		<div class="overlay-layer"></div>
			<div class="container clearfix">
				<div class="row" style="position: relative; color: #fff; z-index: 2;">
					<div class="col-lg-6 padding-row">
						<ul class="contact-information">
							<li><i class="fa fa-phone"></i> +(456) 098-543-34, +5(655) 900-455-44</li>
							<li><i class="fa fa-envelope-o"></i> queen@gamail.com, queen@yahoo.com</li>
							<li><i class="fa fa-map-marker"></i>  30 West New York, USA</li>
						</ul>
					</div>
					<div class="col-lg-6 padding-row">
						<form>
							<div>
								<input type="text" name="name" placeholder="Name"/>
								<input type="email" name="email" placeholder="Email"/>
							</div>
							<textarea placeholder="Entry Content..." name="comment" cols="45" rows="8" ></textarea>
							<div>
								<input name="submit" type="submit"  value="Sent">			
							</div>
						</form>
					</div>
				</div>
			</div>

				<div class="copyright">
					<p>LightX Design Interactive</p>
				</div>
        </footer><!--  footer end -->

    </div><!--  wrapper end -->

     

 


</body>
</html>