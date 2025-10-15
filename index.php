 <html>

 <head>
   <title>Cuenta Regresiva con FlipDown.JS</title>
   <link href="assets/css/flipdown.css?v=<?php echo rand(); ?>" rel="stylesheet">
   <style>
    body, html {
    height: 100%;
    margin: 0;
    overflow: hidden;
  }
   h1 {
    font-size: 2.5rem;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    text-shadow:
      1px 1px 0 #000,
      2px 2px 0 #000,
      3px 3px 0 #000,
      4px 4px 0 #000,
      5px 5px 0 #000;
  }
  .fondo-animado {
    height: 100%;
    background: linear-gradient(270deg, #08C, #05A, #08C);
    background-size: 600% 600%;
    animation: moverFondo 10s ease infinite;
  }

  @keyframes moverFondo {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
  }

     .example {
       font-family: 'Roboto', sans-serif;
       width: 550px;
       height: 378px;
       margin: auto;
       padding: 20px;
       box-sizing: border-box;
     }

     .example .flipdown {
       margin: auto;
     }


     .example p {
       text-align: center;
       font-weight: 100;
       margin-top: 0;
       margin-bottom: 35px;
     }



     @media(max-width: 550px) {
       .example {
         width: 100%;
         height: 362px;
       }

       .example h1 {
         font-size: 2.5em;
       }

       .example p {
         margin-bottom: 25px;
       }

       .example .buttons {
         width: 100%;
         margin-top: 25px;
         text-align: center;
         display: block;
       }

       .example .buttons p,
       .example .buttons a {
         float: none;
         margin: 0 auto;
       }

       .example .buttons p {
         padding-right: 0px;
       }

       .example .buttons a {
         display: inline-block;
       }
     }
   </style>
 </head>

 <body class="fondo-animado">
   <div class="example">
     <h1>⏰ Gran Lanzamiento</h1>
     <div id="flipdown" class="flipdown"></div><br><br>
    
      <center>      <a href="https://jaimefranko.com/" target="_blank"><img width="200" src="https://jaimefranko.com/poweredby/poweredbyjaimefranko_fullwhitenosv.png"></a>
<br>

    </center>
   </div>
   

   <script src="assets/js/flipdown.js"></script>
   <script>
     document.addEventListener('DOMContentLoaded', () => {

       // Unix timestamp (in seconds) to count down to
       var fechaObjetivo = new Date('2026-01-01T00:00:00'); // sábado 11 de octubre de 2025, 7:00 p.m.
       var timestampObjetivo = fechaObjetivo.getTime() / 1000;

       // Set up FlipDown
       var flipdown = new FlipDown(timestampObjetivo)

         // Start the countdown
         .start()


         // Do something when the countdown ends
         .ifEnded(() => {
           alert("Conteo Regresivo Terminado");
           console.log('El contador ha terminado!');
         });

       let body = document.body;
       body.classList.toggle('dark-theme');

       var ver = document.getElementById('ver');
       ver.innerHTML = flipdown.version;
     });
   </script>
 </body>

 </html>