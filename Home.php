<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 0.2rem;
            text-align: center;
        }

        header img.leftimage {
            max-width: 50%;
            height:70px;
            border-radius: 50%;
            position: absolute;
            top: 0; 
            left: 0; 
            margin: 0.5rem;
        }
         header img.rightimage{
            max-width: 50%;
            height:70px;
            border-radius: 50%;
            position: absolute;
            top: 0; 
            right: 0;
            margin: 0.5rem;
        }

        nav {
            background-color: #555;
            padding: 0.5rem;
            text-align: right;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            margin: 0 1rem;
            font-weight: bold;
          
        }

        section {
            background-image: url("home_bg.jpg");
            padding: 13rem;
        }

        h2{
            color: White;
            font-size: 2rem;
            margin-left: 100px;
            margin-bottom:100px;     
        }

        footer {
            background-color: white;
            color: black;
            padding: 1rem;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Food Ordering System</h1>
        <img class="leftimage" src="Online.png" alt="Left image">
        <img class="rightimage" src="Online.png" alt="Right Image">
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact Us</a>
        <a href="#">Login</a>
        <a href="#">Admin Login</a>
    </nav>

    <section>
       <div>
        <h2>Order food from the widest range of restaurants.</h1>
       </div>
    </section>

    <footer>
        &copy; 2024 Food Ordering System
    </footer>

</body>
</html>
