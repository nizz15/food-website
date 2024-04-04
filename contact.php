<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="contact.css">
    <title>contact us</title>
</head>
<body style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkD5oLwOZP02G50BprE4S_W5lTyQZQl8KZMnxvMTLu1i_ORCokggdhsgLolPSp8PlbhhM&usqp=CAU)no-repeat;background-size: cover;">
  <header>
    <nav>
    <div class="logo">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWbBNAEC-psu2yEJblJnj0EbUAShDNdId-wh4kfn_Qbv6gDC_yYV9GLx2KEWfQ_9S-WCA&usqp=CAU" alt="logo" >
</div>
    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="resevesion.php">Reservation</a></li>
        <li><a class="ac" href="contact.php">Contact</a></li>
    </ul>


</nav>
   </header> 
    <section>
    
        <div class="section-header">
          <div class="container">
            <h2>Contact Us</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
        </div>
        
        <div class="container">
          <div class="row">
            
            <div class="contact-info">
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="fa fa-home"></i>
                </div>
                
                <div class="contact-info-content">
                  <h4>Address</h4>
                  <p>4671 Sugar Camp Road,
     Owatonna, Minnesota, 
    55060</p>
                </div>
              </div>
              
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="fa fa-phone"></i>
                </div>
                
                <div class="contact-info-content">
                  <h4>Phone</h4>
                  <p>571-457-2321</p>
                </div>
              </div>
              
              <div class="contact-info-item">
                <div class="contact-info-icon">
                  <i class="fa fa-envelope"></i>
                </div>
                
                <div class="contact-info-content">
                  <h4>Email</h4>
                 <p>ntamerrwael@mfano.ga</p>
                </div>
              </div>
            </div>
            
            <div class="contact-form">
              <form action="cont.php" method="post" id="contact-form">
                <h2>Send Message</h2>
                <div class="input-box">
                  <input type="text" required="true" id="name" name="name">
                  <span>Full Name</span>
                </div>
                
                <div class="input-box">
                  <input type="email" required="true" id="email" name="email">
                  <span>Email</span>
                </div>
                
                <div class="input-box">
                  <textarea required="true" id="message" name="message"></textarea>
                  <span>Type your Message...</span>
                </div>
                
                <div class="input-box">
                  <input type="submit" value="Send" name="submit">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </section>
</body>
</html>