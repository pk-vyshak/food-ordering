 <?php include('partials-front/menu.php'); ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">  
 <style>
     h1   {
        color:tomato;
        padding: 30px;
        font-family: "Raleway", sans-serif;
        font-size:4em;
        font-weight:700;
        }
        .contact-p{
            margin:1.5em;
            font-size:1.5em;
            font-family:"Roboto Condensed",sans-serif;

        }
        .contact-pr{
            font-size:1.5em;
            font-family:"Roboto Condensed",sans-serif;
            margin-left:1.5em;
        }
        .contact-container{
            display:flex;
            flex-direction:row;
            justify-content: space-between;
        }
        .img-contact{
            width: 50%;
        }
        .contact{
            width: 50%;
            padding:2em;
        }
        .im{
            width: 100%;
            height: 90vh;
            object-fit: cover;
        }
</style>
 </head>
 <body>
     <div class="contact-container">
         <div class="img-contact">
     <img src ="images/notso.jpg" class="im" alt="background image">
     </div>
     <div class="contact">
         <h1>We'd Love to Hear From You</h1>
         <p class="contact-pr">Whether you're curious about features,a free trial,or even press--</p>
         <p class="contact-pr">We are ready to answer any and all questions</p>
      <p class = "contact-p">Phone : +91-9446847849,+91-7736161540</p>
       <p class = "contact-p">Email : wowfoods@gmail.com</p>
     </div>
    </div>
 </body>
 </html>
