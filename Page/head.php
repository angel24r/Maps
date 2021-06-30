<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/about.css">        
        <link rel="stylesheet" href="../css/new.css">         
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <script defer src="../main.js"></script> 
        <title>Viorbe</title>
      </head>
      <body style="background-color: #34495e;">
        <div id="contenedor_carga">
          <div id="carga">
          </div>
        </div>
        <div class="menu-wrap">
          <input type="checkbox" class="toggler">
          <div class="hamburger"><div></div></div>
          <div class="menu">
            <div>
              <div>
                <ul>
                <li><a href="../index.php">Home</a></li>                  
                  <li><a href="datos.php">Figures from Oaxaca</a></li>
                  <li><a href="#">Open data</a></li>
                  <li><a href="About.php">About</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <script>
          // Contenedor de carga
          window.onload = function(){
            var contenedor = document.getElementById('contenedor_carga');
            contenedor.style.visibility = 'hidden';
            contenedor.style.opacity = '0';
          }          
        </script>
       