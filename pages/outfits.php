
<?php

// Establish a database connection
$hostname = 'localhost';
$username = 'baller';
$password = '1234';
$database = 'pfekaonline';

$db  = new mysqli($hostname, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>



<?php
$apiKey = '900e15ce40594e9a975192208241805';
$city = 'London'; // Replace with the desired city

$url = "http://api.weatherapi.com/v1/current.json?key=$apiKey&q=$city";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

$temperature = $data['current']['temp_c'];
$description = $data['current']['condition']['text'];
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Closet</title>
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/outfits.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .shirts {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }
        .shirts img {
            height: 250px;
            width: 242px;
        }

        .trousers {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }
        .trousers img {
            height: 250px;
            width: 242px;
        }

        .skirts {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 40px;
        }
        .skirts img {
            height: 220px;
            width: 242px;
        }

        .suits {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }
        .suits img {
            height: 250px;
            width: 242px;
        }

        .jackets {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }
        .jackets img {
            height: 250px;
            width: 242px;
        }

        .reco-occasion {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .occasion-label {
            display: inline-block;
            margin-right: 5px;
        }

        .occasion-select {
            font-size: 20px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

    </style>

</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container  pt-4">
              <div class="row logo-wrapper" id="logo-wrapper">
                <img src="../thumbnails/hanger.svg" alt="logo" class="hanger">
              </div>
              <div class="nav-brand">
                <a class="navbar-brand" href="#">PfekaOnline</a>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link  fs-6 mx-1"  href="profile.php">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  fs-6 mx-1"  href="feedbacksupport.php">Feedback & Support</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-6" href="closet.php">Closet</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active-link fs-6" href="outfits.php">Outfit Recommendation</a>
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
        <div class="container">
             <div class="row">
                <div class="col-12">
                    <h3>Create Outfits Based On Weather and Occassion</h3>   
                    <hr>
                    
                    <div>
                    <style>
                        .weather-occasion-container {
                            display: flex;
                            align-items: center;
                            font-size: 20px;
                        }

                        #weatherDiv {
                            margin-right: 20px;
                        }
                    </style>

                    <div class="weather-occasion-container">
                        <div id="weatherDiv">
                        <div class="todaytemp">
                            <span id="temperature">
                                <p>Current Temperature: <?php echo $temperature; ?> &#8451; / Description: <?php echo $description; ?></p>
                            </span>
                        </div>
                        </div>
                    </div>
                    
                        <form method="POST">
                        <div class="row">
                          <div class="col-md-2">
                              <div class="reco-occasion">
                              <select name="occasion" id="occasion" required class="occasion-select form-control ">
                                <option class="filter-active" value="" selected disabled>Select occasion</option>
                                <option value="wedding" id="wedding">wedding</option>
                                <option value="interview" id="interview">interview</option>
                                <option value="funeral" id="funeral">funeral</option>
                                <option value="traditional" id="traditional">traditional</option>
                                <!-- Add more occasion options as needed -->
                                </select>
                              </div>

                              <div class="reco-occasion">
                              <select name="location" id="location" required class="location-select form-control">
                                <option class="location" value="location">Select location</option>
                                <option value="rural" id="rural">rural</option>
                                <option value="urban" id="urban">urban</option>
                                <!-- Add more occasion options as needed -->
                                </select>
                              </div>


                          </div>
                          <div class="col-md-6">
                            <button type="submit" class="btn btn-danger recommend-button">Recommend</button>
                          </div>
                      </div>

                        </form>
                      <hr>


                        <div class="row">
                        <div class="col-md-12">
                            <h4>Shirts</h4>
                            <div class="shirts" id="shirts">
                            <?php

                            // Check if the form has been submitted
                            if (isset($_POST['occasion']) && isset($_POST['location'])) {
                                $occasion = $_POST['occasion'];
                                $location = $_POST['location'];

                                if ($occasion == "wedding") {
                                    $query = "SELECT * FROM clothes WHERE category='shirt' AND description='formal'";
                                } elseif ($occasion == 'interview') {
                                    $query = "SELECT * FROM clothes WHERE category='shirt' AND description='formal' AND length='long'";
                                } elseif ($occasion == 'funeral') {
                                    $query = "SELECT * FROM clothes WHERE category='shirt' AND length='long' AND color='black'";
                                } elseif ($occasion == 'tradition') {
                                    $query = "SELECT * FROM clothes WHERE category='shirt' AND description='traditional'";
                                } else {
                                    // Display all skirts
                                    $query = "SELECT * FROM clothes WHERE category='shirt'";
                                }

                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <img src="images/<?php echo $data['image']; ?>" alt="<?php echo $data['category']; ?>">
                                    <?php
                                }
                            } 



                            if ($temperature) {
                                if ($temperature > 28) {
                                    // Display summer skirts
                                    $query = "SELECT * FROM clothes WHERE category='shirt' AND season='summer'";
                                } elseif ($temperature < 28) {
                                    // Display winter skirts
                                    $query = "SELECT * FROM clothes WHERE category='shirt' AND season='winter'";
                                } else {
                                    // Display all skirts
                                    $query = "SELECT * FROM clothes WHERE category='shirt'";
                                }

                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <img src="images/<?php echo $data['image']; ?>" alt="<?php echo $data['category']; ?>">
                                    <?php
                                }
                            }
                            ?>


                            </div>
                            <hr>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-12">
                            <h4>Skirts</h4>
                            <div class="skirts" id="skirts">
                            <!-- Skirts content -->
                            <?php

                            // Check if the form has been submitted
                            if (isset($_POST['occasion']) && isset($_POST['location'])) {
                                $occasion = $_POST['occasion'];
                                $location = $_POST['location'];

                                if ($occasion == "wedding") {
                                    $query = "SELECT * FROM clothes WHERE category='skirt' AND description='formal'";
                                } elseif ($occasion == 'interview') {
                                    $query = "SELECT * FROM clothes WHERE category='skirt' AND description='formal' AND length='long'";
                                } elseif ($occasion == 'funeral') {
                                    $query = "SELECT * FROM clothes WHERE category='skirt' AND length='long' AND color='black'";
                                } elseif ($occasion == 'tradition') {
                                    $query = "SELECT * FROM clothes WHERE category='skirt' AND description='traditional'";
                                } else {
                                    // Display all skirts
                                    $query = "SELECT * FROM clothes WHERE category='skirt'";
                                }

                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <img src="images/<?php echo $data['image']; ?>" alt="<?php echo $data['category']; ?>">
                                    <?php
                                }
                            } 


                            
                            if ($temperature) {
                                if ($temperature > 28) {
                                    // Display summer skirts
                                    $query = "SELECT * FROM clothes WHERE category='skirt' AND season='summer'";
                                } elseif ($temperature < 28) {
                                    // Display winter skirts
                                    $query = "SELECT * FROM clothes WHERE category='skirt' AND season='winter'";
                                } else {
                                    // Display all skirts
                                    $query = "SELECT * FROM clothes WHERE category='skirt'";
                                }

                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <img src="images/<?php echo $data['image']; ?>" alt="<?php echo $data['category']; ?>">
                                    <?php
                                }
                            }
                            ?>


                            </div>
                            <hr>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-12">
                            <h4>Trousers</h4>
                            <div class="trousers" id="trousers">
                            <!-- Trousers content -->
                            <?php

                            // Check if the form has been submitted
                            if (isset($_POST['occasion']) && isset($_POST['location'])) {
                                $occasion = $_POST['occasion'];
                                $location = $_POST['location'];

                                if ($occasion == "wedding") {
                                    $query = "SELECT * FROM clothes WHERE category='trouser' AND description='formal'";
                                } elseif ($occasion == 'interview') {
                                    $query = "SELECT * FROM clothes WHERE category='trouser' AND description='formal' AND length='long'";
                                } elseif ($occasion == 'funeral') {
                                    $query = "SELECT * FROM clothes WHERE category='trouser' AND length='long' AND color='black'";
                                } elseif ($occasion == 'tradition') {
                                    $query = "SELECT * FROM clothes WHERE category='trouser' AND description='traditional'";
                                } else {
                                    // Display all skirts
                                    $query = "SELECT * FROM clothes WHERE category='trouser'";
                                }

                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <img src="images/<?php echo $data['image']; ?>" alt="<?php echo $data['category']; ?>">
                                    <?php
                                }
                            } 



                            if ($temperature) {
                                if ($temperature > 28) {
                                    // Display summer skirts
                                    $query = "SELECT * FROM clothes WHERE category='trouser' AND season='summer'";
                                } elseif ($temperature < 28) {
                                    // Display winter skirts
                                    $query = "SELECT * FROM clothes WHERE category='trouser' AND season='winter'";
                                } else {
                                    // Display all skirts
                                    $query = "SELECT * FROM clothes WHERE category='trouser'";
                                }

                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <img src="images/<?php echo $data['image']; ?>" alt="<?php echo $data['category']; ?>">
                                    <?php
                                }
                            }
                            ?>


                            </div>
                            <hr>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-12">
                            <h4>Suits</h4>
                            <div class="suits" id="suits">
                            <!-- Suits content -->
                            <?php

                            // Check if the form has been submitted
                            if (isset($_POST['occasion']) && isset($_POST['location'])) {
                                $occasion = $_POST['occasion'];
                                $location = $_POST['location'];

                                if ($occasion == "wedding") {
                                    $query = "SELECT * FROM clothes WHERE category='suit' AND description='formal'";
                                } elseif ($occasion == 'interview') {
                                    $query = "SELECT * FROM clothes WHERE category='suit' AND description='formal' AND length='long'";
                                } elseif ($occasion == 'funeral') {
                                    $query = "SELECT * FROM clothes WHERE category='suit' AND length='long' AND color='black'";
                                } elseif ($occasion == 'tradition') {
                                    $query = "SELECT * FROM clothes WHERE category='suit' AND description='traditional'";
                                } else {
                                    // Display all skirts
                                    $query = "SELECT * FROM clothes WHERE category='suit'";
                                }

                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <img src="images/<?php echo $data['image']; ?>" alt="<?php echo $data['category']; ?>">
                                    <?php
                                }
                            } 



                            if ($temperature) {
                                if ($temperature > 28) {
                                    // Display summer skirts
                                    $query = "SELECT * FROM clothes WHERE category='suit' AND season='summer'";
                                } elseif ($temperature < 28) {
                                    // Display winter skirts
                                    $query = "SELECT * FROM clothes WHERE category='suit' AND season='winter'";
                                } else {
                                    // Display all skirts
                                    $query = "SELECT * FROM clothes WHERE category='suit'";
                                }

                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <img src="images/<?php echo $data['image']; ?>" alt="<?php echo $data['category']; ?>">
                                    <?php
                                }
                            }
                            ?>

                            </div>
                            <hr>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-12">
                            <h4>Jackets</h4>
                            <div class="jackets" id="jackets">
                            <!-- Jackets content -->
                            <?php

                            // Check if the form has been submitted
                            if (isset($_POST['occasion']) && isset($_POST['location'])) {
                                $occasion = $_POST['occasion'];
                                $location = $_POST['location'];

                                if ($occasion == "wedding") {
                                    $query = "SELECT * FROM clothes WHERE category='jacket' AND description='formal'";
                                } elseif ($occasion == 'interview') {
                                    $query = "SELECT * FROM clothes WHERE category='jacket' AND description='formal' AND length='long'";
                                } elseif ($occasion == 'funeral') {
                                    $query = "SELECT * FROM clothes WHERE category='jacket' AND length='long' AND color='black'";
                                } elseif ($occasion == 'tradition') {
                                    $query = "SELECT * FROM clothes WHERE category='jacket' AND description='traditional'";
                                } else {
                                    // Display all skirts
                                    $query = "SELECT * FROM clothes WHERE category='juacket'";
                                }

                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <img src="images/<?php echo $data['image']; ?>" alt="<?php echo $data['category']; ?>">
                                    <?php
                                }
                            } 



                            if ($temperature) {
                                if ($temperature > 28) {
                                    // Display summer skirts
                                    $query = "SELECT * FROM clothes WHERE category='jacket' AND season='summer'";
                                } elseif ($temperature < 28) {
                                    // Display winter skirts
                                    $query = "SELECT * FROM clothes WHERE category='jacket' AND season='winter'";
                                } else {
                                    // Display all skirts
                                    $query = "SELECT * FROM clothes WHERE category='jacket'";
                                }

                                $result = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <img src="images/<?php echo $data['image']; ?>" alt="<?php echo $data['category']; ?>">
                                    <?php
                                }
                            }
                            ?>

                            </div>
                        </div>
                        </div>
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
                        <li><a href="closet.html" class="text-dark">Outfits</a></li>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>