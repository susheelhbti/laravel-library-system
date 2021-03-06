<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/comments.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-addnav">
                                <li>
									<a href="javascript:void(0);">
										<i style="font-size: 4rem; color: #3e3e3e" class="icon-book"></i>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="icon-home"></i>
										<em>Home</em>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="icon-right"></i>
										<em>My Books</em>
									</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" id="tg-wishlisst" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="tg-themebadge">3</span>
										<i class="icon-heart"></i>
										<span>Favorites</span>
									</a>


                                </li>
							</ul>
							<div class="tg-userlogin">
								<figure><a href="javascript:void(0);"><img style="height: 30px" src="images/users/img-01.jpg" alt="user"></a></figure>
								<span>Hi, User</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
		</header>
        


        
        <div style="padding: 2rem" class="tg-middlecontainer">
            <div class="container">
                <div class="row book-details">
                    <div style="display: inline-block; float: left">
                        <img src="images/books/img-04.jpg" alt="title" />

                    </div>
                    <div style="display: inline-block; width: 50%; padding: 0 2rem">
                            <div>
                                <ul class="tg-bookscategories">
                                    <li><a href="javascript:void(0);">Children’s Book</a></li>
                                    <i class="fa fa-heart love-btn"></i>
                                </ul>
                            </div>
                            
                            <div class="tg-themetagbox"><span class="tg-themetag">5 copies</span></div>
                            
                            <div class="tg-booktitle">
                                <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                            </div>
                            

                            <div>
                                <p class="book-sample"><a href="javascript:void(0);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique error maxime, adipisci nihil saepe laudantium in quos corporis aliquid excepturi quisquam at culpa totam nemo perferendis, eaque harum consequuntur numquam?</a></p>
                            </div>


                            @for ($i = 0; $i < 5; ++$i)
                                <i style="color: #fcd01e" class="fa fa-star{{ 4<=$i?'-o':'' }}" aria-hidden="true"></i>
                            @endfor
                            <div>
                                <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                            </div>
                            <span class="tg-bookprice">
                                <ins>$25.18</ins>
                                <del>$27.20</del>
                            </span>
                            
                            
                            <div>
                                <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                    <i class="fa fa-shopping-basket"></i>
                                    <em>Lease</em>
                                </a>
                            </div>

                    </div>
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-sm-4">
                            <img src="images/books/img-04.jpg" alt="title" />
                        </div>
                        <div class="book-image col-sm-8">
                            sdgsdg
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>


        <div class="tg-middlecontainer">
            <div class="container">



                <div class="post-outer-container">
                    <div class="post-container">
                        
                        <div class="text-right">
                            <a class="btn btn-primary" href="#reviews-anchor" id="open-review-box">Leave Comment</a>
                        </div>
                    
                        <div class="row" id="post-review-box" style="display:none;">
                            <div class="col-md-12">
                                <form accept-charset="UTF-8" action="" method="post">
                                    <input id="ratings-hidden" name="rating" type="hidden"> 
                                    <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your comment here..." rows="5"></textarea>
                    
                                    <div class="text-right">
                                        
                                        <div class="stars">
                                            <input type="radio" name="difficulty" id="difficulty-5" hidden>
                                            <label for="difficulty-5">
                                                <i class="fa fa-star"></i>
                                                 <i class="fa fa-star-o"></i>
                                            </label>
                                            <input type="radio" name="difficulty" id="difficulty-4" hidden>
                                            <label for="difficulty-4">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star-o"></i>
                                          </label>
                                            <input type="radio" name="difficulty" id="difficulty-3" hidden>
                                            <label for="difficulty-3">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star-o"></i>
                                          </label>
                                            <input type="radio" name="difficulty" id="difficulty-2" hidden>
                                            <label for="difficulty-2">
                                               <i class="fa fa-star"></i>
                                             <i class="fa fa-star-o"></i>
                                          </label>
                                            <input type="radio" name="difficulty" id="difficulty-1" hidden checked>
                                            <label for="difficulty-1">
                                               <i class="fa fa-star"></i>
                                          </label>
                                        </div>



                                        <a class="btn btn-danger btn-md" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                                        <i style="padding-right: 1rem" class="fa fa-remove"></i>Cancel</a>
                                        <button class="btn btn-success btn-md" type="submit"><i style="padding-right: 1rem" class="fa fa-comment"></i>Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>


<div class="post-outer-container">
    <div class="post-container">
        <div class="post-details">
            <img src="https://res.cloudinary.com/shivindera/image/upload/v1471087232/11224809_10153609813786294_5753779615144157442_n_zviyjh.jpg" alt="Shivi" class="user-image"/>
            <div class="user-container">
                @for ($i = 0; $i < 5; ++$i)
                                <i style="color: #fcd01e" class="fa fa-star{{ 4<=$i?'-o':'' }}" aria-hidden="true"></i>
                @endfor
                <h3 class="user-container__user"><a href="javascript:;">Nitesh Kabra</a></h3>
                
                <div class="user-container__details">
                    <span class="timing"><a href="javascript:;">Yesterday at 6:20 PM</a></span>
                    {{-- <span class="delimiter"> · </span> --}}
                    {{-- <span class="location"><a href="javascript:;">Goa</a></span> --}}
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, eligendi voluptas. At veritatis modi beatae commodi assumenda! Itaque vel rem pariatur dolores eius eum? Optio corrupti consequuntur deserunt tenetur rem.</p>
       
    </div>
</div>





<div class="post-outer-container">
    <div class="post-container">
        <div class="post-details">
            <img src="https://res.cloudinary.com/shivindera/image/upload/v1471087232/11224809_10153609813786294_5753779615144157442_n_zviyjh.jpg" alt="Shivi" class="user-image"/>
            <div class="user-container">
                @for ($i = 0; $i < 5; ++$i)
                                <i style="color: #fcd01e" class="fa fa-star{{ 4<=$i?'-o':'' }}" aria-hidden="true"></i>
                @endfor
                <h3 class="user-container__user"><a href="javascript:;">Nitesh Kabra</a></h3>
                
                <div class="user-container__details">
                    <span class="timing"><a href="javascript:;">Yesterday at 6:20 PM</a></span>
                    {{-- <span class="delimiter"> · </span> --}}
                    {{-- <span class="location"><a href="javascript:;">Goa</a></span> --}}
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, eligendi voluptas. At veritatis modi beatae commodi assumenda! Itaque vel rem pariatur dolores eius eum? Optio corrupti consequuntur deserunt tenetur rem.</p>
       
    </div>
</div>




<div class="post-outer-container">
    <div class="post-container">
        <div class="post-details">
            <img src="https://res.cloudinary.com/shivindera/image/upload/v1471087232/11224809_10153609813786294_5753779615144157442_n_zviyjh.jpg" alt="Shivi" class="user-image"/>
            <div class="user-container">
                @for ($i = 0; $i < 5; ++$i)
                                <i style="color: #fcd01e" class="fa fa-star{{ 4<=$i?'-o':'' }}" aria-hidden="true"></i>
                @endfor
                <h3 class="user-container__user"><a href="javascript:;">Nitesh Kabra</a></h3>
                
                <div class="user-container__details">
                    <span class="timing"><a href="javascript:;">Yesterday at 6:20 PM</a></span>
                    {{-- <span class="delimiter"> · </span> --}}
                    {{-- <span class="location"><a href="javascript:;">Goa</a></span> --}}
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, eligendi voluptas. At veritatis modi beatae commodi assumenda! Itaque vel rem pariatur dolores eius eum? Optio corrupti consequuntur deserunt tenetur rem.</p>
       
    </div>
</div>





                

            </div>
        </div>





<footer>
        <div class="carousel-wrapper" id="products">
            <ul class="carousel-inner clearfix">
                <li class="item">
                    <div class="col-md-12">
                        <div class="col-md-4 image-container">
                            <img src="images/books/img-02.jpg" alt="title" />
                        </div>
                        
                        <div class="col-md-8 book-info">
                            <div>
                                <ul class="tg-bookscategories">
                                    <li><a href="javascript:void(0);">Children’s Book</a></li>
                                </ul>
                            </div>
                            
                            <div class="tg-themetagbox"><span class="tg-themetag">5 copies</span></div>
                            
                            <div class="tg-booktitle">
                                <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                            </div>
                            
                            <div>
                                <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                            </div>
                            
                            <div>
                                <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                    <i class="fa fa-shopping-basket"></i>
                                    <em>Lease</em>
                                </a>
                            </div>
                            

                            
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="col-md-12">
                        <div class="col-md-4 image-container">
                            <img src="images/books/img-03.jpg" alt="title" />
                        </div>
                        
                        <div class="col-md-8 book-info">
                            <div>
                                <ul class="tg-bookscategories">
                                    <li><a href="javascript:void(0);">Children’s Book</a></li>
                                </ul>
                            </div>
                            
                            <div class="tg-themetagbox"><span class="tg-themetag">5 copies</span></div>
                            
                            <div class="tg-booktitle">
                                <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                            </div>
                            
                            <div>
                                <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                            </div>
                            
                            <div>
                                <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                    <i class="fa fa-shopping-basket"></i>
                                    <em>Lease</em>
                                </a>
                            </div>
                            

                            
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="col-md-12">
                        <div class="col-md-4 image-container">
                            <img src="images/books/img-04.jpg" alt="title" />
                        </div>
                        
                        <div class="col-md-8 book-info">
                            <div>
                                <ul class="tg-bookscategories">
                                    <li><a href="javascript:void(0);">Children’s Book</a></li>
                                </ul>
                            </div>
                            
                            <div class="tg-themetagbox"><span class="tg-themetag">5 copies</span></div>
                            
                            <div class="tg-booktitle">
                                <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                            </div>
                            
                            <div>
                                <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                            </div>
                            
                            <div>
                                <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                    <i class="fa fa-shopping-basket"></i>
                                    <em>Lease</em>
                                </a>
                            </div>
                            

                            
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="col-md-12">
                        <div class="col-md-4 image-container">
                            <img src="images/books/img-01.jpg" alt="title" />
                        </div>
                        
                        <div class="col-md-8 book-info">
                            <div>
                                <ul class="tg-bookscategories">
                                    <li><a href="javascript:void(0);">Children’s Book</a></li>
                                </ul>
                            </div>
                            
                            <div class="tg-themetagbox"><span class="tg-themetag">5 copies</span></div>
                            
                            <div class="tg-booktitle">
                                <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                            </div>
                            
                            <div>
                                <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                            </div>
                            
                            <div>
                                <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                    <i class="fa fa-shopping-basket"></i>
                                    <em>Lease</em>
                                </a>
                            </div>
                            

                            
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="col-md-12">
                        <div class="col-md-4 image-container">
                            <img src="images/books/img-05.jpg" alt="title" />
                        </div>
                        
                        <div class="col-md-8 book-info">
                            <div>
                                <ul class="tg-bookscategories">
                                    <li><a href="javascript:void(0);">Children’s Book</a></li>
                                </ul>
                            </div>
                            
                            <div class="tg-themetagbox"><span class="tg-themetag">5 copies</span></div>
                            
                            <div class="tg-booktitle">
                                <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                            </div>
                            
                            <div>
                                <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                            </div>
                            
                            <div>
                                <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                    <i class="fa fa-shopping-basket"></i>
                                    <em>Lease</em>
                                </a>
                            </div>
                            

                            
                        </div>
                    </div>
                </li>
            </ul>
            <a href="#" class="carousel-left">
                <i class="fa fa-chevron-left slider-btn"></i>
            </a>
            <a href="#" class="carousel-right">
                <i class="fa fa-chevron-right slider-btn"></i>
            </a>
          </div>




        </footer>


        
          
		
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
	{{-- <script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/gmap3.js"></script>
    <script src="js/main.js"></script> --}}
    <script src="js/slider.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/comment.js"></script>
</body>
</html>