<?php
session_start();
// Establish a database connection
$hostname = 'localhost';
$username = 'baller';
$password = '1234';
$database = 'pfekaonline';

$db = new mysqli($hostname, $username, $password, $database);

if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit;
}

// Retrieve user information from the database
$query = "SELECT userid, username, email FROM users";
$result = $db->query($query);

if (!$result) {
    echo "Error retrieving user information: " . $db->error;
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Closet Admin Panel</title>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../styles/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                  <a href="admin.php" class="btn btn-danger fs-6 px-4">Logout</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
    </header>


    <div class="container">
    <h3 style="margin-bottom: 20px;">Admin Panel</h3>
    </div>

    <div class="container">
    <table id="userTable">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['userid']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    </div>
    <div class="container">
        <button class="btn btn-danger" onclick="printTable()">Print</button>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable();
        });

        function printTable() {
            window.print();
        }
    </script>
</body>
</html>