<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="contact-form"> 
        <h1>Contact us</h1>
        <h2>We are always ready to serve you</h2>
   </div>
   <div class="contact-us">
        <form action="contact.php" method="post">
              <input type="text" name="name" class="form-control" 
               placeholder="Your name"></br>
               <input type="text" name="mobile" class="form-control" 
               placeholder="Your mobile number"></br>
               <input type="email" name="email" class="form-control" 
               placeholder="Your Email"></br>
               <textarea name="message" class="form-control" id="" cols=""
                rows="3" placeholder="Enter your Message"></textarea> </br>
                <input type="submit" class="form-control submit" value="SEND MESSAGE">
        </form>
    </div>
     

   

</body>
</html>