<!DOCTYPE html>
<html>
    <head>
        <title>Foster Paradise</title>
        <link rel="stylesheet" href="{{asset('cssfile/styles.css')}}">
        <link rel="stylesheet" href="{{asset('cssfile/shop.css')}}">
        <link rel="stylesheet" href="hhtps://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>
    <body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        
                        <a href="#" class="logo" >
                            <img src="images/FosterLogo.png" >
                        </a>
                        
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/pet" class="active">Pets</a></li>
                            <li class="scroll-to-section"><a href="/shop">Shop</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">User</a>
                                <ul>
                                    <li><a href="/home">Logout</a></li>  
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="/contact">Contact Us</a></li> 
                        </ul>        
                        
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="home">
            <video class="video-slide active" src="videos/Dog vdo.mp4" autoplay muted loop></video>
            <video class="video-slide" src="videos/Cat vdo.mp4" autoplay muted loop></video>
            <div class="content">
                <h1>Home<br><span>for Animals</span></h1>
                <p>Interested in supporting Nonprofits focused on supporting Animal Shelter Adoptions? Learn more about how you can partner with FP & help more animals get adopted today. Get Involved Today. Make a Difference. Support Nonprofits Today. Fight for Causes.</p>
                <a href="#">Explore More</a>
            </div>
            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="slider-navigation">
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
            </div>
    </section>
    
    <section class="shop" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h2>Our Items</h2>
                        <h4>Our selection of high quality pet items</h4>
                    </div>
                </div>
            </div>    
        </div>
        <div class="icons">
            <a href="{{url('/showcart')}}"class="fas fa-shopping-cart"></a>
            </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach($data as $data)
                    <form action="{{url('/addcart',$data->id)}}" method="post">
                        @csrf
                    <div class="item">
                        <div class='card'>
                            <div class="image"><img src="{{asset('itemimage/'.$data->image)}}" height="250px" width="300px" alt="Image"></div>
                            <div class="price"><h6>{{$data->price}}</h6></div>
                            <div class="info">
                                <h1 class='title'>{{$data->title}}</h1>
                                <input type="number" name="quantitys" min="1" style="width:150px;height:30px;background-color:white;margin-bottom: 20px;color: black;"><br>
                                <input type="text" name="email" style="width:190px;height:30px;background-color: black;margin-bottom: 20px;color: white;" placeholder="Enter email"><br>
                                <input type="submit" value="Add to Cart" style="color: white;background-color:#cc2d1f;margin-bottom: 20px;width:80px;height:30px;">
                            </div>
                        </div>                                   
                    </div>
                    </form>
                    @endforeach
                    <!--<div class="item">
                        <div class='card card2'>
                            <div class="price"><h6>BDT 90.00</h6></div>
                            <div class="info">
                                <h1 class='title'>Felicia Dry Chicken 2KG</h1>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#purchase">Purchase<i class="fa fa-angle-down"></i></a></div>
                                </div> 
                            </div>
                        </div>                                   
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>BDT 95.00</h6></div>
                            <div class="info">
                                <h1 class='title'>Cat Litter</h1>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#purchase">Purchase<i class="fa fa-angle-down"></i></a></div>
                                </div> 
                            </div>
                        </div>                                   
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price"><h6>BDT 45.00</h6></div>
                            <div class="info">
                                <h1 class='title'>Puppy Collar</h1>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#purchase">Purchase<i class="fa fa-angle-down"></i></a></div>
                                </div> 
                            </div>
                        </div>                                   
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price"><h6>BDT 75.00</h6></div>
                            <div class="info">
                                <h1 class='title'>Jungle Kitten Chicken 1.5KG</h1>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#purchase">Purchase<i class="fa fa-angle-down"></i></a></div>
                                </div> 
                            </div>
                        </div>                                   
                    </div>
                    <div class="item">
                        <div class='card card6'>
                            <div class="price"><h6>BDT 1300.00</h6></div>
                            <div class="info">
                                <h1 class='title'>Dog House</h1>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#purchase">Purchase<i class="fa fa-angle-down"></i></a></div>
                                </div> 
                            </div>
                        </div>                                   
                    </div>
                    <div class="item">
                        <div class='card card7'>
                            <div class="price"><h6>BDT 550.00</h6></div>
                            <div class="info">
                                <h1 class='title'>Cat Costume</h1>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#purchase">Purchase<i class="fa fa-angle-down"></i></a></div>
                                </div> 
                            </div>
                        </div>                                   
                    </div>
                    <div class="item">
                        <div class='card card8'>
                            <div class="price"><h6>BDT 70.00</h6></div>
                            <div class="info">
                                <h1 class='title'>Felicia Cat Weed</h1>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#purchase">Purchase<i class="fa fa-angle-down"></i></a></div>
                                </div> 
                            </div>
                        </div>                                   
                    </div>
                    <div class="item">
                        <div class='card card9'>
                            <div class="price"><h6>BDT 300.00</h6></div>
                            <div class="info">
                                <h1 class='title'>Carriage</h1>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#purchase">Purchase<i class="fa fa-angle-down"></i></a></div>
                                </div> 
                            </div>
                        </div>                                   
                    </div>
                    <div class="item">
                        <div class='card card10'>
                            <div class="price"><h6>BDT 150.00</h6></div>
                            <div class="info">
                                <h1 class='title'>Shoes</h1>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#purchase">Purchase<i class="fa fa-angle-down"></i></a></div>
                                </div> 
                            </div>
                        </div>                                   
                    </div>!-->
    </section>                

    <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Quick links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i> home  </a>
                        <a href="#"><i class="fas fa-angle-right"></i> our team  </a> 
                        <a href="#"><i class="fas fa-angle-right"></i> get involved  </a> 
                        <a href="#"><i class="fas fa-angle-right"></i> help  </a> 
                        
                </div>

                <div class="box">
                    <h3>Extra links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i> FAQ  </a> 
                        <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy  </a> 
                        <a href="#"><i class="fas fa-angle-right"></i> Terms of use  </a>   
                </div>

                <div class="box">
                    <h3>Contact info</h3>
                    <a href="#"><i class="fas fa-phone"></i>+880 1311768602</a> 
                        <a href="#"><i class="fas fa-phone"></i>+880 1773667599</a> 
                        <a href="#"><i class="fas fa-envelope"></i> fosterparadise@gmail.com</a> 
                        <a href="#"><i class="fas fa-map"></i> Ka-161,Nikunja,Dhaka</a> 
                        
                </div>
                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#"><i class="fab fa-facebook"></i> facebook  </a> 
                        <a href="#"><i class="fab fa-twitter"></i> twitter  </a> 
                        <a href="#"><i class="fab fa-instagram"></i> instagram  </a> 
                        <a href="#"><i class="fab fa-youtube"></i> youtube   </a> 
                         
                </div>
            </div>
        </section>
        <script src="https://kit.fontawesome.com/f00190971c.js"></script>
        <script src="https://kit.fontawesome.com/f00190971c.js" crossorigin="anonymous"></script>
        <script src="jsfile/slider.js"></script>
</html>        
