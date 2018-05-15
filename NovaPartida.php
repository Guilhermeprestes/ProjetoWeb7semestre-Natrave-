
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Na Trave - Nova Partida</title>
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
        <span class="icon-bar"></span>
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
            <li><a href="QuemSomos.php">QUEM SOMOS</a></li>
            <li class="divisor" role="separator"></li>
            <li><a href="NovaPartida.php">NOVA PARTIDA</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- =================== Nova Partida ==================== -->

  <div class="container">
      
      <div class="page-header">
        <h1>Cadastrar Nova Partida</h1>
      </div>
    <div class="row">
      <div class="col-sm-8">        
        <form name="partidanatrave" action="cadastro.php" method="post">
    <h3>Informações da partida</h3>

          <div class="form-group">
            <label>Nome da partida</label>
            <input type="text" name="nome_partida" class="form-control" id="nome_partida">
          </div>         
          
          <div class="form-group">
            <label>Descrição da partida</label>
            <input type="text" name="descricao_partida" class="form-control" id="descricao_partida">
          </div>  

          <div class="form-group row">
            <label>Data</label>
            <input class="form-control" type="date" name="data" value="yyyy-mm-dd" id="data">
          </div>     

    <h3>Endereço da Partida</h3>

          <div class="form-group">
            <label>Rua</label>
            <input type="text" name="rua" class="form-control" id="rua">
          </div>         

          <div class="form-group">
            <label>Bairro</label>
            <input type="text" name="bairro" class="form-control" id="bairro">
          </div>

          <div class="form-group">
            <label>Cidade</label>
            <input type="text" name="cidade" class="form-control" id="cidade">
          </div>

          <div class="form-group">
            <label>Estado</label>
            <input type="text" name="estado" class="form-control" id="estado">
          </div>

    <h3>Seus Dados</h3>

          <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" id="nome">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label>Telefone/Celular</label>
            <input type="text" name="telefone" class="form-control" id="telefone">
          </div>


          <button type="submit" id="botao" class="btn btn-success" value="Cadastrar">Cadastrar</button>
          <a href="index.php" class="btn btn-danger" role="button">Cancelar</a>

        </form>

       

      </div>      
    </div><!-- /row -->
  </div> <!-- /container -->
  <br><br><br><br><br>

<!-- =================== /Nova Partida ==================== --> 

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