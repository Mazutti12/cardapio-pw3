<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" href="style/stylenu.css" rel="stylesheet"/>
    <title>Cardápio RU</title>
  </head>
  <body>

  <style>
    .w3-container{background-color: white; width: 600px; height: 180%; border-radius: 5px; margin-left: 31%;}
    body {background-color: rgb(84, 174, 96);}
    .fundo {background-color: rgb(250, 252, 250); margin-top: 0px; margin-left: -3%; width: 110%;}
    h2 {margin-bottom: 50px;margin-left: 10%; font-family: "Lucida Console", "Monaco", monospace}

  </style>
      
      <div class = "fundo">
  <div class="w3-container">
  <img src="img/logo.png" alt="Logo IFRS" width="500" height="200">
    <form>
        <br>
        <h2>Registro de nutricionista</h2>
    <div class="form-group">
    <label for="exampleInputEmail1">Usuário</label>
    <input type="text" class="form-control" id="nome" placeholder="Usuário">
    <br>
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="senha" placeholder="Senha">
    <br>
    <button type="submit" class="btn btn-primary">Acessar cardápio</button>
  <button type="button" class="btn btn-link" onclick= "window.location.href = 'http://localhost/cardapio/cardapiopw3/frontend/login/index.php'">Voltar</button>
  <br><br>
  </div>
</form> 
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
  </body>
</html>