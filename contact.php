<?php 
    include 'configs/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - HM.INC</title>
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

    <section class="contact-section">
        <div class="container">
            <h2 class="section-heading">Contact Us</h2>
            <p class="section-description">Feel free to get in touch with us for any inquiries or bookings.</p>

            <!-- Contact form -->
            <form class="contact-form" action="submit.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" placeholder="Your message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Submit</button>
            </form>

                <!-- Map and Location -->
                <div class="map-location-container">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.184863860963!2d125.61147741538443!3d7.052859994883914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32622f5b9bc0444f%3A0x8b6f86531a17e725!2sAssumption%20College%20of%20Davao!5e0!3m2!1sen!2sph!4v1648934295669!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="location">
                        <p><strong>Location:</strong> Assumption College of Davao</p>
                        <button class="directions-btn"><a href="https://www.google.com/maps/dir//Assumption+College+of+Davao" target="_blank">Get Directions</a></button>
                    </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 HM.INC. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
