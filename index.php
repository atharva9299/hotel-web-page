<?php 
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Hotel</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap');

        *{
            font-family: 'Marcellus SC', serif;
        }
    </style>
  </head>
  <body>
    <header>
        <h1><a href="Index.html">Aura Hotel</a></h1>
        <nav>
            <a href="ohotel.html">The Hotel</a>&etc;
            <a href="faleconosco.html">Contact us</a>&etc;
            <a href="logout.php">To go out</a>
        </nav>
        


        
     </header>
        <form action="brahma.jpg" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="brahma" id="brahma">
        <input type="submit" value="brahma" name="submit">
    </form>




    <div class="linha">
        <div class="coluna-25">
            <div class="grid-navbar" >
                <nav>
                    <ul class="navbar" >
                        <li class="navbar"><a href="reserva.html">Reserve</a></li>
                        <li class="navbar"><a href="acomodacoes.html">Accomodates</a></li>
                        <li class="navbar"><a href="comodidades.html">Comodities</a></li>
                        <li class="navbar"><a href="ofertas.html">Offers</a></li>
                    </ul>
                </nav>
            </div>
    </div>
     
    <div class="coluna-50" style="background-color: #ccffff">
        <div class="grid-conteudo">
            <img class="imginicial" src="./images/hotel.webp" alt="" height="250px" width="400px">
            <img class="imginicial"  src="./images/pio.jpg" alt=""height="250px" width="400px">
            <img class="imginicial"  src="./images/the-westin-doha-hotel-spa-1-1950.webp" alt=""height="250px" width="400px">
                    
            <h2>Come and discover the Azevedo Hotel</h2>
            <u>Good quality hotel</u>, close to the center, close to the main tourist attractions
                of the city that provides the customer with a great stay.
            <p>Come to Aura Hotel!</p>
            <a href="#top">Return to top of site</a>
        </div>
    </div>
        <div class="coluna-22">
            <aside>
            <p>
            <img src="./images/uber-logo-2BB8EC4342-seeklogo.com.png" alt="" >
            <img src="./images/99-app-logo-0.png" alt="">    
            </p>
            </aside>                     
        </div>               
    </div>
   
    <footer class="infos">
        <ul>
            <ol>Aura Hotel - 2024</ol>
            <ol><img src="./images/whatsapp.png" alt="">(+91)984175288</ol>
            <ol><address><img src="./images/email.png" alt=""><a href="hotelmaromba@gmail.com">aura@gmail.com</a></ol>
        </ul>
    </footer>   
  </body>
</html>