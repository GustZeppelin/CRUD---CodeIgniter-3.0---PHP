<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title><?= $title ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

    <div class="form-signin">

      <?=form_open("signup/store")?>
      
      <img class="mb-4" src="https://getbootstrap.com/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Registro</h1>
      
      <label for="name" id="labelName">Nome</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="Nome Completo" value="" size="50"/>
      <div class="alert-danger">
      <?php echo form_error('name');?>
      </div>
      
      <input type="text" name="country" class="form-control" placeholder="País de Nascimento" value="" size="50"/>
      <div class="alert-danger">
      <?php echo form_error('country');?>
      </div>
      
      
      <input type="text" name="email" class="form-control" placeholder="Digite Um Email Valido" value="" size="50"/>
      <div class="alert-danger">
      <?php echo form_error('email');?>
      </div>

      <input type="password" name="password" class="form-control" placeholder="Digite Uma Senha" value="" size="50"/>
      <div class="alert-danger">
      <?php echo form_error('password');?>
      </div>

      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Registrar"/>
    
      <p>
      <a href="<?= base_url()?>index.php/login">Já Tem Uma Conta?</a>
      </p>
    
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>

  </form>
</div>

      <script src="<?= base_url()?>./js/validacao.js"></script>


</body>
</html>
