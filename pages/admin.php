
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Closet</title>
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/outfits.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
        .container {
            width: 430px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            display: flex;
            margin-bottom: 20px;
        }

        .form-group label {
            flex: 1;
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            text-align: left;
        }

        .form-group input {
            flex: 2;
            padding: 8px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #f2f2f2;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .logo-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70px;
            width: 70px;
            border-radius: 35px;
            border: 2px solid red;
            margin: 4px;
            padding: 2px;
            margin: 20px auto;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }

        .label{
            font-size: 20px;
            font-style: normal;
        }

        .success-message {
            color: green;
            margin-top: 10px;
        }
        </style>

        <div class="container">
        <div class="row logo-wrapper" id="logo-wrapper">
            <img src="../thumbnails/hanger.svg" alt="logo" class="hanger">
        </div>
        <form id="login-form">
            <div class="form-group">
            <label class="label" for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
            <label class="label" for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button class="btn btn-danger" type="submit">Login</button>
        </form>
        <div id="message"></div>
        </div>

        <script>
        var form = document.getElementById("login-form");
        var message = document.getElementById("message");

        form.addEventListener("submit", function(event) {
            event.preventDefault();
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "ADMIN" && password === "Admin") {
            // Redirect to admin panel.php
            window.location.href = "adminpanel.php";
            } else {
            message.innerHTML = "<p class='error-message'>Wrong username or password.</p>";
            }

            // Reset form fields
            form.reset();
        });
        </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>