<?php
// Save contact form queries to query.txt
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare the content to save to the text file
    $queryContent = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    // Save the data to query.txt
    file_put_contents('query.txt', $queryContent, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Goviral Media Technology, Delhi: Expert in Digital Marketing in Delhi, Business Websites in Delhi, Ecommerce in Delhi, Web Portals in Delhi, Real Estate Portals in Delhi, Travel Portals in Delhi, Blogging Websites in Delhi, CRM Solutions in Delhi, API Integration in Delhi, and Payment Gateway Integration in Delhi. Your trusted partner for scalable and innovative IT solutions, serving clients in Delhi and beyond.">
    <meta name="keywords" content="Digital Marketing in Delhi, Business Website in Delhi, Ecommerce Website in Delhi, Web Portal in Delhi, Real Estate Portal in Delhi, Travel Portal in Delhi, Blogging Website in Delhi, CRM Solutions in Delhi, API Integration in Delhi, Payment Gateway Integration in Delhi, Goviral Media Technology, IT Services in Delhi, Custom IT Solutions in Delhi">
    <meta name="author" content="Goviral Media Technology">
    <title>Goviral Media Technology</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Goviral Media Technology</h1>
            <p>Your trusted partner for scalable and innovative IT solutions in Delhi and beyond.</p>
        </div>
    </header>

    <section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <ul>
                <li>Digital Marketing</li>
                <li>Business Websites</li>
                <li>Ecommerce Websites</li>
                <li>Web Portals</li>
                <li>Real Estate Portals</li>
                <li>Travel Portals</li>
                <li>Blogging Websites</li>
                <li>CRM Solutions</li>
                <li>API Integration</li>
                <li>Payment Gateway Integration</li>
            </ul>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form method="POST" action="index.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Goviral Media Technology | All rights reserved</p>
        </div>
    </footer>
</body>
</html>

