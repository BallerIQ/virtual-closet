<?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $subject = $_POST["subject"];

        // Set up the email details
        $to = "virtualcloset76@gmail.com"; // Replace with the recipient's email address
        $body = "Name: " . $name . "\n";
        $body .= "Email: " . $email . "\n";
        $body .= "Message: " . $message . "\n";
        $headers = "From: " . $email;

        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for communicating with Virtual Closet ,We will get back to you";
        } else {
            echo "Email not send. Try again";
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <title>Virtual Closet</title>
    <link rel="stylesheet" href="../styles/feedbacksupport.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../javascript/home.js">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../javascript/feedbacksupport.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <header>
    <nav class="navbar feed-nav navbar-expand-lg fixed-top">
        <div class="container  pt-4">
          <div class="row logo-wrapper" id="logo-wrapper">
            <img src="../thumbnails/hanger.svg" alt="logo" class="hanger">
          </div>
         <div class="navbar-brand">
          <a class="navbar-brand" href="#">Virtual Closet</a>
         </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active-link fs-6 mx-1" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6" href="profile.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link f-link fs-6 px-2" href="feedbacksupport.php">Feedback & support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6" href="closet.php">Closet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6" href="outfits.php">Outfit Recommendation</a>
              </li>
              
              <li class="nav-item">
              <a href="login.php" class="btn btn-danger fs-6 px-4">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>


    <section>
        <div class="container mt-4 mb-4">
            <h2 class="text-center mb-2">Feedback and Support</h2>
            <p class="text-center mb-5">Your feedback matters! Reach out for support or questions. We aim to respond within 24-48 hours. Thanks <br>for contacting us!</p>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST">
                       <div class="col-md-6 px-4">
                        <div class="mb-3">
                            <div class="input-field">
                                <input required="" name="text" type="text" />
                                <label>Name</label>
                              </div>                              
                        </div>
                        <div class="mb-3">
                            <div class="input-field mt-2">
                                <input required="" name="text" type="email" />
                                <label>Email</label>
                              </div>                              
                        </div> 
                        
                        <div class="mb-3">
                          <div class="textarea-container mt-2">
                            <textarea id="user-message" rows="1" placeholder=" "></textarea>
                            <label for="user-message">Enter your message</label>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-danger">Submit</button>
                       </div>


                       <div class="col-md-6 px-4">
                        <div class="mb-3">
                          <div class="input-field">
                              <input required="" name="text" type="text" />
                              <label>Subject</label>
                            </div>      
                                
                      </div>
                       </div>
                    </form>
                    <img src="../thumbnails/fdbk1.svg" alt="Support Image" class="support-image">
                </div>
            </div>
        </div>
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
                        <li><a href="#home" class="text-dark">Home</a></li>
                        <li><a href="closet.html" class="text-dark">Closet</a></li>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>