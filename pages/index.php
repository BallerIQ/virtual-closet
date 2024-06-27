<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PfekaOnline</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/features.css">
    <link rel="stylesheet" href="../styles/faq.css">
    <link rel="stylesheet" href="../styles/testimonials.css">
    <link rel="stylesheet" href="../styles/trends.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../javascript/trends.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header id="home" >
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container  pt-4">
              <div class="row logo-wrapper" id="logo-wrapper">
                <img src="../thumbnails/hanger.svg" alt="logo" class="hanger">
              </div>
              <a class="navbar-brand" href="#">Virtual Closet</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active-link fs-6 mx-1" aria-current="page" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-6" href="#trends">Fashion Trends</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-6" href="#features">Features & Benefits</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-6" href="#faq">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-6" href="#testimonials">Testimonials</a>
                  </li>
                  <li class="nav-item">
                  <a href="login.php" class="btn btn-danger fs-6 px-4">Login</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>


    <section>
        <div class="container pt-5 mb-4" >
            <div class="row alig-items-center justify-content-center" >
                <div class="col-12 col-lg-5">
                        <p class="start">start now for 100% free</p>
                        <h2>Dive In To Endless Style Exploration and Inspiration</h2>
                        <p>Discover a curated collection of clothing items, create stylish outfits effortlessly
                             and stay ahead of the fashion game with personized recommendations tailored to your 
                             unique taste
                        </p>
                        <button id="explore" class="btn btn-danger col-5">Explore</button>
                        <div class="social-rape">
                            <img class="social1" src="../thumbnails/social11.jpg">
                            <img class="social2" src="../thumbnails/social12.jpg">
                            <img class="social3" src="../thumbnails/social3.jpg">
                            <img class="social4" src="../thumbnails/social4.jpg">
                            <p class="trust">Trusted by Baller and other 10000+ users</p>
                        </div>
                <div class="social-proof">

                </div>
                </div>
                <div class="col-12 col-lg-7 mb-4">
                    <img src="../thumbnails/closet.jpg" alt="Responsive image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>




    <section>
      <div id="trends" class="container">
        <div class="trends-slider">
          <button class="slider-button prev-slide">&lt;</button>
          
          <div class="slides-container">
            <h2 class="text-center mb-4">Current Fashion Trends</h2>
            <p class="text-center">Current fashion trends prioritize sustainability, streetwear, and bold colors, combining comfort <br> with unique, expressive styles</p>
              <div class="slide active">
                  <div class="profile">
                      <img src="../thumbnails/slide1.jpg" alt="Profile Picture" class="image">
                      <img src="../thumbnails/slide2.jpg" alt="Profile Picture" class="image">
                      <img src="../thumbnails/slide3.jpg" alt="Profile Picture" class="image">
                  </div>
              </div>

              <div class="slide active">
                <div class="profile">
                    <img src="../thumbnails/slide4.jpg" alt="Profile Picture" class="image">
                    <img src="../thumbnails/slide5.jpg" alt="Profile Picture" class="image">
                    <img src="../thumbnails/slide6.jpg" alt="Profile Picture" class="image">
                </div>
            </div>

            <div class="slide active">
              <div class="profile">
                  <img src="../thumbnails/slide7.jpg" alt="Profile Picture" class="image">
                  <img src="../thumbnails/slide8.jpg" alt="Profile Picture" class="image">
                  <img src="../thumbnails/slide9.jpg" alt="Profile Picture" class="image">
              </div>
          </div>
             
          </div>
          
          <button class="slider-button next-slide">&gt;</button>
      </div>
      
      </div>
    </section>





    <section class="features-wrapper">
      <div id="features" class="container features-benefits">
            <div class="row">
              <div class="h-wrapper">
                <h2 class="f-head">Features and Benefits</h2>
                <p>Explore PfekaOnline's virtual closet for personalized outfit recommendations
                   and easy capsule wardrobe planning. Stay <br> stylish with quick, trend-based fashion insights, 
                   saving time and effort in your daily wardrobe choices</p>
              </div>
            <div class="col-md-4">
              <div class="f-card">
                <img class="features-icon" src="../thumbnails/effortless.webp" alt="effortless">
                 <h6 class="f-head">Effortless Wardrobe Organization</h6>
                 <p class="cookieDescription">Digital storage, categorization, and accessibility for streamlined closet management</p>
               </div>
            </div>

            <div class="col-md-4">
              <div class="f-card">
                <img class="features-icon" src="../thumbnails/personilized.png" alt="effortless">
                 <h6 class="f-head">Outfit Recommendations</h6>
                 <p class="cookieDescription">Tailored suggestions based on style, weather, and upcoming events</p>
               </div>
            </div>

            <div class="col-md-4">
              <div class="f-card">
                <img class="features-icon" src="../thumbnails/planning.png" alt="effortless">
                 <h6 class="f-head">Capsule Wardrobe Planning</h6>
                 <p class="cookieDescription">Curate versatile outfits for seasons, occasions, and activities easily</p>
               </div>
            </div>

            <div class="col-md-4">
              <div class="f-card">
                <img class="features-icon" src="../thumbnails/time.png" alt="effortless">
                 <h6 class="f-head">Time-saving Outfit Selection</h6>
                 <p class="cookieDescription">Quickly find stylish outfits for any occasion effortlessly</p>
               </div>
            </div>

            <div class="col-md-4">
              <div class="f-card">
                <img class="features-icon" src="../thumbnails/streamlined.png" alt="effortless">
                 <h6 class="f-head">Streamlined Closet Management</h6>
                 <p class="cookieDescription">Organize, categorize, and access wardrobe inventory seamlessly</p>
               </div>
            </div>

            <div class="col-md-4">
              <div class="f-card">
                <img class="features-icon" src="../thumbnails/style.jpg" alt="effortless">
                 <h6 class="f-head">Enhanced Style Confidence</h6>
                 <p class="cookieDescription">Personalized recommendations and curated capsule wardrobes boost confidence</p>
            </div>
          </div>
      </div>
    </section>
 








    <section>
      <div id="faq" class="FAQ-wrapper">
        <div class="container FAQ-heading">
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="container">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  How do I sign up for PfekaOnline?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Signing up for PfekaOnline is easy! Simply click on the "Sign Up" button on the homepage, fill out the registration form with your details, and follow the instructions to create your account.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Can I upload my own clothing items to PfekaOnline?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Yes, you can! PfekaOnline allows you to upload photos of your clothing items directly to your virtual closet. Simply click on the "Upload" button in your closet and follow the prompts to add your items.</div>
              </div>
            </div>
  
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  How does PfekaOnline recommend outfits for me?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">PfekaOnline uses advanced algorithms to analyze your style preferences, the weather forecast, and upcoming events to provide personalized outfit recommendations tailored to your unique tastes and needs.</div>
              </div>
            </div>
  
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Can I create multiple capsule wardrobes on PfekaOnline?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Yes, you can create multiple capsule wardrobes on PfekaOnline for different seasons, occasions, or activities. Simply navigate to the Capsule Wardrobe section and follow the prompts to create a new capsule.</div>
              </div>
            </div>
  
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Is PfekaOnline available on mobile devices?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> Yes, PfekaOnline is fully responsive and optimized for use on mobile devices. You can access your virtual closet, create outfits, and explore fashion trends on the go, anytime and anywhere.</div>
              </div>
            </div>
  
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  How secure is my data on PfekaOnline?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> We take the security and privacy of your data seriously. PfekaOnline uses industry-standard encryption and security measures to protect your personal information and ensure a safe browsing experience.</div>
              </div>
            </div>
  
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Can I share my outfits from PfekaOnline on social media?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> Absolutely! PfekaOnline allows you to easily share your favorite outfits and looks on social media platforms like Facebook, Instagram, and Twitter, so you can inspire others with your style.</div>
              </div>
            </div>
  
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  How can I contact PfekaOnline for support or inquiries?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> If you have any questions, concerns, or feedback, please don't hesitate to contact us through our website's contact form or email us directly at support@pfekaonline.com. We're here to help!</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section>
      <section id="testimonials" class="testimonials py-5">
        <div class="container">
            <h2 class="text-center mb-4">Testimonials</h2>
            <p class="text-center">Dont just take our word for it, see what actual users of our site  have to say<br> about their experiance</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="t-card shadow-sm mb-4 p-4">
                        <div class="card-body text-center">
                            <p class="testimonial-message">"PfekaOnline has revolutionized my wardrobe. It's so easy to find the perfect outfit for any occasion!"</p>
                            <img src="../thumbnails/test-3.jpg" alt="User Name" class="rounded-circle my-3" width="80" height="80">
                            <h5 class="card-title">King Gogo</h5>
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="t-card shadow-sm mb-4 p-4">
                        <div class="card-body text-center">
                            <p class="testimonial-message">"The capsule wardrobe feature saves me so much time and energy. I highly recommend this app!"</p>
                            <img src="../thumbnails/social4.jpg" alt="User Name" class="rounded-circle my-3" width="80" height="80">
                            <h5 class="card-title">Shallom Mucheto</h5>
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="t-card shadow-sm mb-4 p-4">
                        <div class="card-body text-center">
                            <p class="testimonial-message">"The outfit recommendations are spot on! I've never looked better since using this site!"</p>
                            <img src="../thumbnails/test-2.jpg" alt="User Name" class="rounded-circle my-3" width="80" height="80">
                            <h5 class="card-title">Emmanuel Gwandingwa</h5>
                            <div class="rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    </section>




   

    <section>
      <footer class="footer text-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Welcome to PfekaOnline-your ultimate destination for effortless style! Discover endless fashion possibilities, curated just for you. Explore trends, create your 
                      capsule wardrobe, and unlock your unique fashion journey with us today</p>
                    
                </div>
                
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-dark">Home</a></li>
                        <li><a href="#features" class="text-dark">Features & Benefits</li>
                        <li><a href="#testimonials" class="text-dark">Testimonials</a></li>
                        <li><a href="#trends" class="text-dark">Fashion Trends</a></li>
                        <li><a href="#faq" class="text-dark">FAQs</a></li>
                    </ul>
                </div>
              
                <div class="col-md-4">
                  <h5>Contact Us</h5>
                    <p>Email: support@pfekaonline.com</p>
                    <p>Phone: +263 778 513 990</p>
                    <h5>Follow Us</h5>
                    <div class="fs-card">
                      <a href="#" class="socialContainer containerOne">
                        <svg class="socialSvg instagramSvg" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path> </svg>
                      </a>
                      
                      <a href="#" class="socialContainer containerTwo">
                        <svg class="socialSvg twitterSvg" viewBox="0 0 16 16"> <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path> </svg>              </a>
                        
                      <a href="#" class="socialContainer containerThree">
                        <svg class="socialSvg linkdinSvg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
                      </a>
                      
                      <a href="#" class="socialContainer containerFour">
                        <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path> </svg>
                      </a>
                    </div>             
                    
                    
                </div>
            </div>
            <hr class="border-dark">
          
            <p class="text-center mb-0">© 2024 PfekaOnline. All rights reserved.</p>
        </div>
    </footer>
    
    </section>



  
    <script src="../javascript/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>
</html>