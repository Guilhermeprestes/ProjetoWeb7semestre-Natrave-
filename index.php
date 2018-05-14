<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Na Trave - Home</title>
    <link rel="icon" href="img/icon.png">
   

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar iconi"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">
         <span class="img-logo">Na Trave</span>
      </a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">HOME</a></li>
            <li><a href="#partida">PARTIDAS</a></li>
            <li><a href="construcao.html">SOBRE</a></li>
            <li><a href="QuemSomos.html">QUEM SOMOS</a></li>
            <li class="divisor" role="separator"></li>
            <li><a href="NovaPartida.php">NOVA PARTIDA</a></li>
            <li><a href="teste.php">Teste</a></li
      </ul>
    </div>
  </div>
</nav>

<!-- =================== carrossel ==================== -->

<div  id="myCarousel" class="carousel slide MeuCarousel" data-ride="carousel">
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



   <?php
    include ('conexao.php');

      // executa a consulta
  $sql = "SELECT * FROM partidatb ORDER BY nome";
  $res = mysqli_query($mysqli, $sql);

  // conta o número de registros
  $total = mysqli_num_rows($res);
  echo "<p>Total de Resultados: " . $total . "</p>";

  // loop pelos registros
  while ($f = mysqli_fetch_array($res))
  {
    echo "<p>" . $f['nome'] . " | " . $f['email'] . " | " .  $f['nome_partida'] . " | " . date('d/m/Y', strtotime($f['data'])) . "</p>";
  }
 
  ?>
  
  <!-- <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/thumb.jpg" alt="...">
      <div class="caption">
        <h3>FUTEBOL ENTRE AMIGOS</h3>
        <p>futebolzinho no final de semana</p>
        <p><a href="#" class="btn btn-primary" role="button"> ver patida </a></p>
      </div>
    </div>
  </div> -->

  


</div><!-- /row -->
</div> <!-- /container -->

<!-- =================== /album de partidas  ==================== -->

<!-- =================== footer  ==================== -->

<footer id="rodape">
      <div class="container">
        <div class="row">
          
          <div class="col-md-1">
            <span class="img-logo">Na trave</span>
          </div>         

          
            <div class="col-md-11">
                 <h4>© 2018: Todos os direitos reservados</h4>
            </div>          
        </div><!-- /row -->
      </div>
    </footer> <!--Footer-->               

<!-- =================== /footer  ==================== -->


<!-- =================== scripts ==================== -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

<!-- 
*
*
* @author Guilherme Ola Prestes
* @version 0.1
*
*
 -->
