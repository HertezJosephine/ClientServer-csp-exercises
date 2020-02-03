<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">SJT<span>Parish</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="services.php">Services</a></li>
          <li class="btn-trial"><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Questions? Get in Touch</h2>
          <p>For further questions, you may also leave us a message or send us an email.</p>
          <hr class="bottom-line">
        </div>

        <form action="includes/insert.php" method="POST">
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="name" class="form-control form" placeholder="Your Name" value="" required />
              <!-- <div class="validation"></div> -->
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email_add" placeholder="Your Email Address" value="" required />
              <!-- <div class="validation"></div> -->
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone_no" placeholder="Your Phone Number (optional)" value=""/>
              <!-- <div class="validation"></div> -->
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea type="text" class="form-control" name="message" rows="6" placeholder="Message" value="" required></textarea>
              <!-- <div class="validation"></div> -->
            </div>
          </div>

          <div class="col-xs-12">
            <!-- Button -->
            <!-- <button type="submit" id="submit" class="form contact-form-button light-form-button oswald light">SUBMIT</button>  -->
            <input type="submit" class="form contact-form-button light-form-button oswald light" value="SUBMIT" />
<?php if(isset($_GET['success'])) { ?>
   
    <div class="alert alert-success alert-dismissible in shadowed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-fw fa-check-circle"></i> Send message succesfully!
    </div>
                                 
<?php } ?>
          </div>

        </form>

      </div>
    </div>
  </section>
  <!--/ Contact-->
  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-instagram fa-fw"></i></a></li>
      </ul>
      Copyright © 2019 St. Jude Thaddeus Parish. All rights reserved
    </div>
  </footer>
  <!--/ Footer-->