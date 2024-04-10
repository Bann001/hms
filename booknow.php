<?php 
    include 'configs/bn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link rel="stylesheet" href="styles/bn.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="booknow.php">Book Now</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <h1>Book Now</h1>
        <form action="booknow.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="phone">Phone Number:</label>
            <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="checkin">Check-in Date and Time:</label>
            <input type="datetime-local" id="checkin" name="checkin" required><br><br>
            
            <label for="checkout">Check-out Date and Time:</label>
            <input type="datetime-local" id="checkout" name="checkout" required><br><br>
            
            <input type="submit" value="Book">
            <input type="submit" value="Reserve">
        </form>
    </div>

    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>
</body>
</html>
