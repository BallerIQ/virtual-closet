

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Closet</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/index.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />  
</head>
<body>

    <style>
        .error-message {
        color: red;
        }
    </style>
    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-5 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row logo-wrapper" id="logo-wrapper">
                                    <img src="../thumbnails/hanger.svg" alt="logo" class="hanger">
                            </div>
                            <form id="loginForm" method="post" action="validate.php">
                                <input type="text" name="username" id="username" class="form-control my-4 py-2" placeholder="Enter username" required>
                                <input type="password" name="password" id="password" class="form-control my-4 py-2" placeholder="Enter password" required> 
                                
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-danger col-12 mb-4">Login</button>
                                    <?php
                                session_start();

                                // Check if there's an error message in the session
                                if (isset($_SESSION['error_message'])) {
                                    // Display the error message
                                    echo "<div class='error'>" . $_SESSION['error_message'] . "</div>";

                                    // Unset the error message to prevent it from persisting
                                    unset($_SESSION['error_message']);
                                }
                                ?>
                                    <a href="signup.php" class="nav-link">Do you have an account? <span class="c-account">Create account</span></a>
                                    <a href="#" class="nav-link">Forgot password</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
