<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Estate Agency Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .navbar a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #007BFF;
        }

        .hero {
            position: relative;
            background-image: url('images/house1.jpg');
            background-size: cover;
            background-position: center;
            height: 90vh;
            color: white;
            text-align: center;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.4);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero h1 {
            font-size: 48px;
            margin: 0;
        }

        .welcome {
            background: #f2f2f2;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            position: relative;
        }

        .logout-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            padding: 8px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #218838;
        }

        .about-section {
            padding: 50px;
            background-color: #f9f9f9;
        }

        .about-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .about-image {
            max-width: 400px;
            width: 100%;
            border-radius: 10px;
        }

        .about-text {
            max-width: 600px;
        }

        .about-text h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .about-text p {
            font-size: 18px;
            line-height: 1.6;
        }

        .accordion {
            background-color: #f8f9fa;
            color: #333;
            cursor: pointer;
            padding: 15px 20px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s;
            border-bottom: 1px solid #ddd;
        }

        .accordion:hover {
            background-color: #e2e6ea;
        }

        .accordion:after {
            content: '\25BC';
            float: right;
            margin-left: 10px;
            transition: transform 0.3s;
        }

        .accordion.active:after {
            transform: rotate(180deg);
        }

        .panel {
            padding: 15px 20px;
            display: none;
            overflow: hidden;
            background-color: white;
            border-bottom: 1px solid #ddd;
        }

        .read-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .read-btn:hover {
            background-color: #0056b3;
        }

        form input, form select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        form input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #218838;
        }
        .welcome {
    background:rgb(235, 9, 9);
    padding: 15px;
    text-align: center;
    font-size: 18px;
    position: relative;
    color: white;
    font-weight: bold;
}
.logout-btn {
    position: absolute;
    top: 15px;
    right: 20px;
    padding: 8px 15px;
    background-color:OliveDrab;
    color:rgb(46, 239, 16);
    border: 2px solidrgb(84, 246, 8);
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
}

.logout-btn:hover {
    background-color:rgb(70, 239, 8);
}


    </style>
</head>
<body>

<h1 style="background-color:rgb(9, 9, 9); color: white; margin: 0; padding: 20px; text-align: center;">
    Estate Agency Dashboard
</h1>


    <div class="welcome">
        <b>Welcome, <?php echo htmlspecialchars($name); ?></b>
        <form action="logout.php" method="post" style="display:inline;">
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

    <div class="navbar">
        <a href="#home">HOME</a>
        <a href="#about">ABOUT</a>
        <a href="#articles">ARTICLES</a>
        <a href="#sell">SELL YOUR HOME</a>
        <a href="#contact">CONTACT</a>
    </div>

    <div class="hero" id="home">
        <div class="overlay">
            <img src="images/house1.jpg" alt="Logo" style="width: 100px; margin: auto;">
            <h1>TRUE HOMES</h1>
            <p>Property Group, LLC</p>
        </div>
    </div>

    <div id="about" class="about-section">
        <div class="about-content">
            <img src="images/About us.jpg" alt="About Us" class="about-image">
            <div class="about-text">
                <h2>About Us</h2>
                <p>Since 2005, True Homes has been a trusted name in real estate, dedicated to helping families find their dream homes. Our commitment to excellence and personalized service has made us a leader in the industry.</p>
            </div>
        </div>
    </div>

    <div id="articles" style="padding: 50px; text-align: center;">
        <h2>Articles</h2>
        <p>Browse helpful tips and updates in the world of property buying and selling.</p>

        <button class="accordion">First-Time Home Buyers</button>
        <div class="panel">
            <img src="images/article1.jpg" alt="First Time Home Buyers" style="width: 100%; max-width: 600px;">
            <p>Learn the essential steps to make smart buying decisions, from budgeting to closing a deal.</p>
            <a href="#" class="read-btn">Read More</a>
        </div>

        <button class="accordion">Simple Renovations That Boost Property Value</button>
        <div class="panel">
            <img src="images/article2.jpg" alt="Home Renovation" style="width: 100%; max-width: 600px;">
            <p>Find out which small upgrades can make a big impact on your home's resale value.</p>
            <a href="#" class="read-btn">Read More</a>
        </div>

        <button class="accordion">Understanding Home Loan Basics</button>
        <div class="panel">
            <img src="images/article3.jpg" alt="Home Loan Basics" style="width: 100%; max-width: 600px;">
            <p>Get clarity on mortgage types, interest rates, and what to prepare when applying for a home loan.</p>
            <a href="#" class="read-btn">Read More</a>
        </div>
    </div>

    <!-- ✅ Sell Section with Accordion Form -->
    <div id="sell" style="padding: 50px; text-align: center;">
        <h2>Sell Your Home</h2>
        <p>Want to sell your property? Fill in the details below and we’ll get in touch!</p>

        <button class="accordion">Submit Property Form</button>
        <div class="panel">
            <form action="submit_property.php" method="POST" style="max-width: 600px; margin: auto; text-align: left;">
                <label>Owner Name:</label>
                <input type="text" name="owner_name" required>

                <label>Property Address:</label>
                <input type="text" name="property_address" required>

                <label>Property Type:</label>
                <select name="property_type" required>
                    <option value="">Select Type</option>
                    <option>Apartment</option>
                    <option>Independent House</option>
                    <option>Villa</option>
                    <option>Commercial Space</option>
                    <option>Plot/Land</option>
                </select>

                <label>No. of Bedrooms:</label>
                <input type="number" name="bedrooms" required>

                <label>No. of Bathrooms:</label>
                <input type="number" name="bathrooms" required>

                <label>Area (in sq ft):</label>
                <input type="number" name="area" required>

                <label>Expected Selling Price:</label>
                <input type="number" name="price" required>

                <label>Contact Number:</label>
                <input type="tel" name="contact" required>

                <input type="submit" value="Submit Property Details">
            </form>
        </div>
    </div>

    <div id="contact" style="padding: 50px; text-align: center;">
        <h2>Contact Us</h2>
        <p>Email: info@truehomes.com | Phone: +91-1234567890</p>
    </div>

    <script>
        const acc = document.querySelectorAll(".accordion");
        acc.forEach(button => {
            button.addEventListener("click", function () {
                this.classList.toggle("active");
                const panel = this.nextElementSibling;
                panel.style.display = panel.style.display === "block" ? "none" : "block";
            });
        });
    </script>

</body>
</html>
