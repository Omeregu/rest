<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Online Food Delivery Service in Pune | OnlineFoodOrderingWebsite.com</title>
    <link rel="stylesheet" href="FoodOrderingWebsite.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.png" alt="OnlineFoodOrderingWebsite.com">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#client-section">Our Clients</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to Online Food Ordering Website: FOOD MANIA</h1>
        <p>Where every flavor tells a story! </p>
        <p>Explore curated lists of top restaurants, cafes, pubs, and bars in Pune, based on trends. </p>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services" class="d-flex justify-content-around">
            <div class="box">
                <h2 class="h-secondary center">Dine Out</h2>
                <img src="dineout.jpg" alt="">
                <p class="center">
                    Discover a tantalizing array of dishes crafted with passion and expertise by our talented chefs.
                     Whether you're craving savory classics, innovative specialties, or indulgent desserts,
                     we have something to satisfy every palate and occasion.</p>
                     <a href="order.php"> 
                        <button>Order Now</button>
                    </a>
            </div>
            <div class="box">
                <h2 class="h-secondary center">Home Delivery </h2>
                <img src="delivery.jpg" alt="">
                <p class="center">At Food Mania , we believe in bringing the finest culinary experiences directly to your doorstep.
                    With our easy-to-use online ordering platform, 
                    you can explore our diverse menu from the comfort of your home and indulge in a delightful feast with just a few clicks.
                   </p>
                    <a href="order.php"> 
                        <button>Order Now</button>
                    </a>
            </div>
            <div class="box">
                <h2 class="h-secondary center">Order Grocery!</h2>
                <img src="grocery.jpeg" alt="">
                <p class="center">Welcome to our hassle-free grocery delivery service,
                    where you can shop for all your essentials from the comfort of your home 
                    and have them delivered straight to your doorstep.
                     Say goodbye to long lines, crowded aisles, and time-consuming trips to the store –
                      we've got you covered!</p>
                      <a href="order.php"> 
                        <button>Order Now</button>
                    </a>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="irani_cafe.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="littleitly.png" alt="Our Client">
            </div>
          
            <div class="client-item">
                <img src="shahi_bhoj.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="vaishali.png" alt="Our Client">
            </div>
        </div>

    </section>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
        <form action="contact.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="Name" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="Email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" name="Number" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea class="form-control" name="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
      </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; OnlineFoodOrderingWebsite.com All rights reserved!
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>