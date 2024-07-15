<?php
    session_start();
    if(!isset ($_SESSION['AdminLoginId']))
    {
        header("location: Admin Login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Connection Succesfully</h2>

    <!--<div class="admin-container">
        <aside class="sidebar">
            <h2>Admin Panel</h2>
            <nav>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </aside>
        <main class="content">
            <h1>Welcome, Admin</h1>
            <p>This is your admin panel where you can manage the website.</p>
            <div class="dashboard">
                <div class="card">
                    <h3>Users</h3>
                    <p>Number of users: 120</p>
                </div>
                <div class="card">
                    <h3>Posts</h3>
                    <p>Number of posts: 75</p>
                </div>
                <div class="card">
                    <h3>Comments</h3>
                    <p>Number of comments: 200</p>
                </div>
            
            </div>

        </main>
    </div>-->
    <div>
        <form method="POST">
        <h2>
            Welcome to admin pannel - <?php echo $_SESSION['AdminLoginId'] ?>
        </h2>
        <button name="Logout">Logout</button>
        </form>
    </div>

<?php
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("location: Admin Login.php");
    }
?>

</body>
</html>
