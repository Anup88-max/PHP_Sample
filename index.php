<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="admin/css/style.css" rel="stylesheet">
</head>
<body>
    <header class="section-navbar">
      <div class="container">
        <div class="navbar-logo">
          <a href="/index.php"> FiU</a>
        </div>
        <div class="navbar">
          <ul>
            <li class="navbar-list">
              <a href="#home-section" class="navbar-link">HOME</a>
            </li>
            <li class="navbar-list">
              <a href="#about-section" class="navbar-link">ABOUT</a>
            </li>
            <li class="navbar-list">
              <a href="#ourDesign-section" class="navbar-link">OUR DESIGN</a>
            </li>
            <li class="navbar-list">
              <a href="#shop-section" class="navbar-link">SHOP</a>
            </li>
            <li class="navbar-list">
              <a href="#contractUs-section" class="navbar-link">CONTRACT US</a>
            </li>
          </ul>
        </div>
        <div class="section-searchOption">
          <input class="search-input" type="text" name="" id="" />
          <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
        </div>
        <div class="section-login">
          <a class="login-button" href="admin/login.php">Login</a>
        </div>
      </div>
    </header>
     <section class="section-home" id="home-section">
      <section class="section-hero">
        <div class="container grid grid-two--cols">
          <div class="section-content">
            <h1 class="section-heading">Best <br />Design <br />of Furnitur</h1>
            <p class="section-para">
              It is a long established fact that a reader will <br />
              bedistracted by the readable content of
            </p>
            <a href="#contractUs-section" class="contactus-button">Contact US</a>
          </div>
          <div class="section-image">
            <div class="image"><img src="admin/img/img-1.png" alt="" /></div>
          </div>
        </div>
      </section>
    </section>
    <!-- About section -->
    <section class="section-about" id="about-section">
      <div class="container grid grid-two--cols">
        <div class="section-image">
          <div class="image">
            <img src="admin/img/img-2.png" alt="" />
          </div>
        </div>
        <div class="section-content">
          <h2 class="section-heading">About Us</h2>
          <p class="section-para">
            There are many variations of passages of Lorem Ipsum available, but
            the majority have suffered alteration in some form, by injected
            humour, or randomised Lorem, ipsum dolor sit amet consectetur
            adipisicing elit. Dolores sed cupiditate ullam fugit odit quos earum
            autem labore exercitationem cumque quibusdam cum error, sunt
            delectus velit? Nobis veniam nemo fuga!
          </p>
          <div class="section-readMore">
            <a class="readMore-button" href="">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Work Section -->
    <section class="section-ourWork" id="ourDesign-section">
      <div class="container">
        <h2 class="section-heading">Our Work Furniture</h2>
        <p class="section-para">
          There are many variations of passages of Lorem Ipsum available, but
          the majority have suffered alteratio
        </p>
      </div>
      <div class="product-container grid grid-three--cols">
        <div class="card">
          <p class="card-heading">Chair 1</p>
          <div class="card-image">
            <img class="image" src="/admin/img/img-3.png" alt="" />
          </div>
          <p class="card-price">Price $100</p>
          <a class="buyNow-button" href="">BUY NOW</a>
        </div>
        <div class="card">
          <p class="card-heading">Chair 2</p>
          <div class="card-image">
            <img class="image" src="/admin/img/img-4.png" alt="" />
          </div>
          <p class="card-price">Price $100</p>
          <a class="buyNow-button" href="">BUY NOW</a>
        </div>
        <div class="card">
          <p class="card-heading">Table</p>
          <div class="card-image">
            <img class="image" src="/admin/img/img-5.png" alt="" />
          </div>
          <p class="card-price">Price $100</p>
          <a class="buyNow-button" href="">BUY NOW</a>
        </div>
      </div>
      <!-- <div class="section-slider">
        <i class="fa-solid fa-arrow-left"></i>
        <i class="fa-solid fa-arrow-right"></i>
      </div> -->
      <div class="section-readMore">
        <a class="readMore-button" href="designs.html" target="_blank"
          >Look More</a
        >
      </div>
    </section>
    <!-- Email Section -->
    <section class="section-email" id="shop-section">
      <div class="container grid grid-two--cols">
        <div class="section-image">
          <div class="image">
            <img src="admin/img/img-6.png" alt="" />
          </div>
        </div>
        <div class="section-content">
          <h2 class="section-heading">Subscribe Newsletter</h2>
          <input
            class="section-input"
            type="email"
            name=""
            id=""
            placeholder="Enter Your Email"
          />
          <div class="section-button">
            <a class="subscribeNow-button" href="">Subscribe Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Contract Us section -->
    <section class="section-contractUs" id="contractUs-section">
      <div class="container grid grid-two--cols">
        <div class="section-form">
          <h3 class="section-heading">Contact Us</h3>
          <form class="form-area" action="#">
            <input type="text" name="" id="" placeholder="Name" />
            <input type="email" name="" id="" placeholder="Email" />
            <input type="tel" name="" id="" placeholder="Phone Number" />
            <textarea name="message" id="" placeholder="Message"></textarea>
          </form>
          <div class="section-button">
            <a class="send-button" href="">SEND</a>
          </div>
        </div>
        <div class="section-map">
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.6067590699517!2d84.4284924761543!3d27.698546425878288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb49a5fb5741%3A0x72b0768dd53f3d4f!2sForbes%20College!5e0!3m2!1sen!2snp!4v1734543421779!5m2!1sen!2snp"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </section>
    <footer class="section-footer">
      <div class="box">
        <ul>
          <li class="box-list">
            ><i class="fa-solid fa-location-dot"></i>
            <a href="">Loram Ipusm hosting web</a>
          </li>
          <li class="box-list">
            <i class="fa-solid fa-tty"></i
            ><a href="tel:9855085855">9855085855</a>
          </li>
          <li class="box-list">
            <i class="fa-solid fa-envelope"></i
            ><a href="mailto:example98@gmail.com">example98@gmail.com</a>
          </li>
        </ul>
      </div>
      <div class="container grid grid-four--cols">
        <div class="section-useFulLink">
          <h2 class="section-heading">USEFUL LINK</h2>
          <ul>
            <li><a href=""></a><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Our Design</a></li>
            <li><a href="">Contract Us</a></li>
          </ul>
        </div>
        <div class="section-repair">
          <h2 class="section-heading">REPAIE</h2>
          <p class="section-para">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
            debitis magnam praesentium cum fugit
          </p>
        </div>
        <div class="section-socialMedia">
          <h2 class="section-heading">SOCIAL MEDIA</h2>
          <ul>
            <li>
              <a href="" title="Facebook"
                ><i class="fa-brands fa-facebook-f"></i
              ></a>
            </li>
            <li>
              <a href="" title="Twitter"
                ><i class="fa-brands fa-twitter"></i
              ></a>
            </li>
            <li>
              <a href="" title="Google"
                ><i class="fa-brands fa-google-plus-g"></i
              ></a>
            </li>
            <li>
              <a href="" title="Linkedin"
                ><i class="fa-brands fa-linkedin"></i
              ></a>
            </li>
          </ul>
        </div>
        <div class="section-ourRepairCenter">
          <h2 class="section-heading">OUR REPAIR CENTER</h2>
          <p class="section-para">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
            debitis magnam praesentium cum fugit
          </p>
        </div>
      </div>
    </footer>
</body>
</html>