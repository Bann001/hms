<?php 
    include 'configs/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HM.INC</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">HM.INC</h1>
            <nav>
                <ul>
                    <li><a href="home.php" class="home">Home</a></li>
                    <li><a href="about.php" class="about">About</a></li>
                    <li><a href="services.php" class="services">Services</a></li>
                    <li><a href="contact.php" class="contact">Contact</a></li>
                    <li><a href="booknow.php" class="book-now btn-book-now">Book Now</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="main-content">
        <div class="container">
            <h2>Rooms and Rates</h2>

            <div class="room-cards">
                <div class="room-card">
                    <img src="https://i.pinimg.com/564x/06/09/12/060912db19ae3c89079d6f2cd14aa054.jpg" alt="Room 1">
                    <div class="room-info">
                        <h3>Deluxe Suite</h3>
                        <p class="description">Sofa | King Size Bed | Cabinet | Lounge | Tv | 2 Aircons | Kitchen | Family Table</p>
                        <p class="rate">$200 per night</p>
                    </div>
                </div>
                <div class="room-card">
                    <img src="https://i.pinimg.com/564x/da/57/25/da5725162d7332bbd20fecb1e03e1d33.jpg" alt="Room 2">
                    <div class="room-info">
                        <h3>Standard Room</h3>
                        <p class="description">Queen Size Bed | Sofa | Aircon | Tv | Kitchen</p>
                        <p class="rate">$120 per night</p>
                    </div>
                </div>
                <div class="room-card">
                    <img src="https://i.pinimg.com/564x/94/ea/76/94ea76d26eb7742923839894cc4bae27.jpg" alt="Couple Room">
                    <div class="room-info">
                        <h3>Couple Room</h3>
                        <p class="description">Queen Size Bed | Romantic Decor | Jacuzzi | Ocean View</p>
                        <p class="rate">$250 per night</p>
                    </div>
                </div>
                <div class="room-card">
                    <img src="https://i.pinimg.com/736x/8b/61/86/8b6186d3a2365532ae3d584ffa54776f.jpg" alt="Single Room Gaming">
                    <div class="room-info">
                        <h3>Single Room Gaming</h3>
                        <p class="description">Gaming Setup | High-Speed Internet | Comfortable Seating</p>
                        <p class="rate">$150 per night</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 HM.INC. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>