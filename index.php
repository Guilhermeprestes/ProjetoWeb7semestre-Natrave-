<?php
    session_start();
    $valor_endereco;
    if($_SESSION['valorEndereco'] != null){
       $valor_endereco = $_SESSION['valorEndereco'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Na Trave - Home</title>
    <link rel="icon" href="img/icon.png">
   
      <Style>
          #mapa{height: 100%;
                margin: 150px;
                padding: 150px;     
          } 
        
      </Style>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_a8Nd8pQSAuMzHka79SHaosukZW_Hu6Q&callback=initMap"
    async defer></script>
      
    </head>

  <body>
    

    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
      <div class="container">

        <!-- header -->
        <div class="navbar-header" >

          <!--botao toggle-->
          <button type="button" class="navbar-toggle collapsed"
                  data-toggle="collapse" data-target="#barra-navegacao">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>



          <a href="index.html" class="navbar-brand">
            
            <span class="img-logo">Na Trave</span>
          </a>
          
        </div>

        <!-- Navbar -->

        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li><a href="#partida">Partidas</a></li>
            <li><a href="construcao.html">Sobre</a></li>
            <li><a href="construcao.html">Quem Somos</a></li>
            <li class="divisor" role="separator"></li>
            <li><a href="NovaPartida.php">Nova Partida</a></li>
           
          </ul>
        </div>


      </div> <!-- /container -->


</nav> <!-- /nav -->

<!-- =================== carrossel ==================== -->

<div  id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/img1.jpg" >
    </div>

    <div class="item">
      <img src="img/img2.jpg" >
    </div>

    <div class="item">
      <img src="img/img3.jpg" >
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- =================== /carrossel ==================== -->

<!-- =================== album de partidas  ==================== -->
<div id="partida" class="container">

  <br>
  <h1>Partidas</h1>
  <br>
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/thumb.jpg" alt="...">
      <div class="caption">
        <h3>FUTEBOL ENTRE AMIGOS</h3>
        <p>futebolzinho no final de semana</p>
        <p><a href="#" class="btn btn-primary" role="button"> ver patida </a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/thumb.jpg" alt="...">
      <div class="caption">
        <h3>FUTEBOL ENTRE AMIGOS</h3>
        <p>futebolzinho no final de semana</p>
        <p><a href="#" class="btn btn-primary" role="button"> ver patida </a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/thumb.jpg" alt="...">
      <div class="caption">
        <h3>FUTEBOL ENTRE AMIGOS</h3>
        <p>futebolzinho no final de semana</p>
        <p><a href="#" class="btn btn-primary" role="button"> ver patida </a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/thumb.jpg" alt="...">
      <div class="caption">
        <h3>FUTEBOL ENTRE AMIGOS</h3>
        <p>futebolzinho no final de semana</p>
        <p><a href="#" class="btn btn-primary" role="button"> ver patida </a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/thumb.jpg" alt="...">
      <div class="caption">
        <h3>FUTEBOL ENTRE AMIGOS</h3>
        <p>futebolzinho no final de semana</p>
        <p><a href="#" class="btn btn-primary" role="button"> ver patida </a></p>
      </div>
    </div>
  </div>
  
  
  <div class="row">
  <div class="col-sm-2 col-md-2">
    <div class="thumbnail" id="mapa">
        
        <script>
           var rua;
            if(rua != ""){
             var rua = "<?php print $valor_endereco;?>";         
            }
           
            function initMap() {
        map = new google.maps.Map(document.getElementById('mapa'), {
          center: {lat: -22.8533, lng: -47.2147},
          zoom: 11,
           mapTypeId: google.maps.MapTypeId.ROADMAP
        });
      } 
            if(rua == ""){
                
            }else{
                var input = rua;
                var options = {
                types: ['(cities)'],
                componentRestrictions: {country: 'br'}
            };
                
                
            }
            

            
        </script>
      </div>
    </div>
  </div>

</div><!-- /row -->
</div> <!-- /container -->

<!-- =================== /album de partidas  ==================== -->



<!-- =================== footer  ==================== -->

<footer id="rodape">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6">
            <span class="img-logo">Na trave</span>
          </div>         

          <div class="col-md-6">
            <h4>Todos os direitos reservados</h4>           
          </div>



        </div><!-- /row -->
      </div>
    </footer>



<!-- =================== /footer  ==================== -->


<!-- =================== scripts ==================== -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>