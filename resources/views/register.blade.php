  <!DOCTYPE html>
  <html lang="en" >

  <head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>


        <link rel="stylesheet" href="{{asset('css/register.css')}}">

    
  </head>

  <body>

    <div class="signup__container" style="width: 100%;height: 100%;">
    <div class="container__child signup__thumbnail">

      <div class="thumbnail__content text-center">
        <h1 class="heading--primary">Sistema de Gerenciamento de Monitoria</h1><br>
        <h2 class="heading--primary">Crie já sua conta</h2>
      </div>
      <div class="thumbnail__links">
        <ul class="list-inline m-b-0 text-center">
          <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://github.com/Murielson/SGM" target="_blank"><i class="fa fa-github"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
      <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form">
      <form action="#">

        <div class="row">
          <div class="col-md-6 col-xs-6">
            <div class="form-group">
            <label for="name">Nome</label>
            <input class="form-control" data-width="100%" type="text" name="name" id="name" required/>
          </div>
        </div>

        <div class="row">
           <div class="col-md-6 col-xs-6">
          <div class="form-group">
          <label for="lastname">Sobrenome</label>
          <input class="form-control" type="text" name="lastname" id="lastname" required/>
          </div>
          </div>
        </div>
        </div>

        <div class="form-group">
          <label for="matricula">Matrícula</label>
          <input class="form-control" type="text" name="matricula" id="matricula" required />
        </div>

        <div class="row">
    <div class="col-md-4 col-xs-4">
      <div class="form-group">
        <label for="Cursos">Curso</label>
        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="Cursos" required>
              <option selected disabled>Selecionar</option>
              <option>Informática para Internet</option>
              <option>Logística</option>
              <option>Gestão da Qualidade</option>
          </select>
      </div>
    </div>
    <div class="col-md-4 col-xs-4">
      <div class="form-group">
        <label for="Periodo">Período</label>
        <select class="form-control" data-sizer="5" data-live-search="true" data-width="100%" name="Período" required>
              <option selected disabled>Selecionar</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>  
              <option>7</option>
              <option>8</option>  
        </select>
      </div>
    </div>
    <div class="col-md-4 col-xs-4">
      <div class="form-group">
        <label for="Turnos">Turno</label>
        <select class="form-control" data-size="5" data-live-search="true" data-width="100%" name="Turnos" required>
              <option selected disabled>Selecionar</option>
              <option>Manhã</option>
              <option>Tarde</option>
          </select>
      </div>
    </div>
  </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="text" name="email" id="email" required />
        </div>

        <div class="row">
          <div class="col-md-6 col-xs-6">
            <div class="form-group">
            <label for="passwordRepeat">Senha</label>
            <input class="form-control" data-width="100%" type="password" name="password" id="password" required/>
          </div>
        </div>

        <div class="row">
        	 <div class="col-md-6 col-xs-6">
      	  <div class="form-group">
          <label for="passwordRepeat">Repetir Senha</label>
          <input class="form-control" type="password" name="passwordRepeat" id="passwordRepeat" required/>
          </div>
          </div>
        </div>
        </div>

        <div class="m-t-lg">
          <ul class="list-inline" style="padding-left: 40px !important;">
            <li>
              <input class="btn btn--form" type="submit" value="Cadastrar" />
            </li>
            <li>
              <a class="signup__link" href="login.blade.php">Já possui uma conta? Entrar</a>
            </li>
          </ul>
        </div>
      </form>  
    </div>
  </div>


  </body>

  </html>
