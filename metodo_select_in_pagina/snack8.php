<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <title>SNACK</title>
</head>
<body>
  <!-- main -->
  <main id="app">
      <select name="tipologia" id="tipologia" v-model="textSearch"  @change="changeTipologia(textSearch)">
        <option value="all">all</option>
        <option value="elettrodomestico">elettrodomestico</option>
        <option value="elettronica">elettronica</option>
      </select>
    <div class="row mt-5">
        <!-- informazioni prese in js tramite ciclo. impostato di defautl a all una volta cambiato il valore della select parte funzione changeTipologia che andrà a cambiare il valore axios andando a stampare i valori filtrati -->
        <div class="col-2" v-for="product in products">
            <img v-bind:src="product.img" alt="">
            <h1> {{ product.nome }} </h1>
            <p> {{ product.prezzo }} </p>
            <p> {{ product.tipologia }} </p>
        </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>