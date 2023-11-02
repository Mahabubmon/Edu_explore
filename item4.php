<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <link rel="stylesheet" href="style.css"> 
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          max-width: 400px;
          margin: auto;
          text-align: center;
          font-family: arial;
        }
        
        .price {
          color: grey;
          font-size: 22px;
        }
        
        .card button {
          border: 2px;
          outline: 0;
          padding: 12px;
          color: white;
          background-color: #555;
          text-align: center;
          cursor: pointer;
          width: 100%;
          font-size: 18px;
        }
        
        .card button:hover {
          opacity: 0.7;
        }
        </style>
</head>
<body>
<header>
    <h1 class="heading">Services</h1>
    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Services.php">Services</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="login.php">Log In</a></li>
        </ul>
   </nav>
</header>
    <section style='padding: 150px; margin: 30px;'>
            <div class="card">
                <img src="graphic.jpg" alt="Graphic Design Courses" style="width:100%">
                <h1>Graphic Design Courses</h1>
                <p class="price" style='font-size: 20px;'>$19.99</p>
                <p style='font-size: 20px;'>Join thousands of learners in taking a graphic design course on Udemy. You’ll learn through simple, easy-to-learn video tutorials and hands-on exercises that fit into your schedule. ...</p>
                <p><button>Add to Cart</button></p>
              </div>
        
    </section>

    <div class="footer">

        <div class="box-container">
    
            <div class="box">
                <h3>why choose us?</h3>
                <p>Edu-Xplorer is the best learning site with a huge collection of many different types of learning methods and content.</p>
            </div>
    
            <div class="box">
                <h3>quick links</h3>
                <a href="Home.php">Home</a>
                <a href="About.php">About</a>
                <a href="Services.php">Services</a>
                <a href="signup.php">Sign Up</a>
                <a href="login.php">Log In</a>
                <a href="Contact.php">Contact</a>
            </div>
    
            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe us for latest updates</p>
                <form action="Services.php" autocomplete="on">
                    <input type="email" name="email" placeholder="your email">
                    <input type="submit" class="btn" value="subscribe">
                </form>
            </div>
    
        </div>
    
    </div>

    <script src="script.js"></script>
</body>

</html>