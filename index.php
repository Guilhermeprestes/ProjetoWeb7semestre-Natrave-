<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
      <a class="navbar-brand" href="index.php">
         <span class="img-logo">Na Trave</span>
      </a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">HOME</a></li>
            <li><a href="#partida">PARTIDAS</a></li>
            <li><a href="QuemSomos.php">QUEM SOMOS</a></li>
            <li class="divisor" role="separator"></li>
            <li><a href="NovaPartida.php">NOVA PARTIDA</a></li>
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
<div id="partida" class="container list-group">

  <br>
  <h1>Partidas</h1>
  <br>



   <?php
    include ('conexao.php');

      // executa a consulta
  $sql = "SELECT * FROM partidatb ORDER BY data ";
  $res = mysqli_query($mysqli, $sql);

  // conta o número de registros
  $total = mysqli_num_rows($res);
  echo "<p>Total de Partidas encontradas: " . $total . "</p>";
// loop pelos registros
  
  if ($res) {

    while ($reg = mysqli_fetch_array($res)){
      echo "<a href='#' class='list-group-item'>";

      echo "<h1 class='list-group-item-heading'>".$reg['nome_partida'].'</h1>'.'<h4>('.$reg['descricao_partida'].')</h4>';
      echo "<h4> ENDEREÇO:Rua".$reg['rua'].','.$reg['bairro'].','.$reg['cidade'].'-'.$reg['estado']."</h4>";
      echo "<h4>".'DATA:'.$reg['data']."</h4>";
      echo "<h2>Contato:</h2>";
      echo "<h4>".'NOME:'.$reg['nome']."</h4>";
      echo "<h4>".'EMAIL:'.$reg['email']."</h4>";
      echo "<h4>".'CELULAR/TELEFONE:'.$reg['telefone']."</h4>";



      echo "</a>";
    }

  } else {

    echo 'erro no banco de dados';

  } 


  ?>
  
  

  


</div><!-- /row -->

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
* @version 0.5
*
*
 -->
