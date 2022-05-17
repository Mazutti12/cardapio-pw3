<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link type="text/css" href="style/styleindex.css" rel="stylesheet"/>
    <title>Cardápio RU</title>
  </head>
  <body>
  <div class="w3-container">
    <br>
    <div class="form-floating mb-3" class="f">
      <input type="text" class="form-control" id="floatingInput" placeholder="">
      <label for="floatingInput">Pesquisar pratos</label>
      </div>
 
    <div class="input-group">

     <select id="dia" class="form-select" aria-label="dia">
        <option selected>-Dia-</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>

        
      </select>
      <select id="mes" class="form-select" aria-label="mes">
        <option selected>-Mês-</option>
        <option value="jan">Janeiro</option>
            <option value="fev">Fevereiro</option>
            <option value="mar">Março</option>
            <option value="abr">Abril</option>
            <option value="mai">Maio</option>
            <option value="jun">Junho</option>
            <option value="jul">Julho</option>
            <option value="ag">Agosto</option>
            <option value="set">Setembro</option>
            <option value="out">Outubro</option>
            <option value="nov">Novembro</option>
            <option value="dez">Dezembro</option>
      </select>
      
      <select id="ano" class="form-select" aria-label="ano">
        <option selected>-Ano-</option>
        <option value="22">2022</option>
        <option value="23">2023</option>
      </select>

      <select id="ano" class="form-select" aria-label="ano">
        <option selected>-Refeição-</option>
        <option value="cafe">Café</option>
        <option value="almoco">Almoço</option>
        <option value="janta">Janta</option>
        
      </select>

      <div class="buttons">
        <button type="button" class="btn btn-dark">Buscar</button>
        <button type="button" class="btn btn-danger">Limpar filtros</button>
      </div>

    </div>

    <div class="tb">
    <table class="table">
        <thead>
            <tr>
                <th>Prato</th>
                <th>Calorias</th>
            </tr>
            <tr>
                <td>Salada de alface</td>
                <td>5cal./100g</td>
            </tr>
            <tr>
                <td>Sopa de legumes</td>
                <td>20cal./100g</td>
            </tr>
            <tr>
                <td>bife ao molho</td>
                <td>50cal./100g</td>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <button type="button" class="btn btn-link">Sou nutricionista deste cardápio</button>
    <br><br>
    
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
  </body>
</html>