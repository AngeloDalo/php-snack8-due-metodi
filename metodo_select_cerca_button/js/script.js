const App = new Vue(
  //js non serve in questo caso
  //quando andiamo a cambiare il valore della select filtro fatto tramite php
    {
      el: '#app',
      data: {
        products: [],
        textSearch: 'all',
      },
      created() {
        console.log(this.textSearch);
        axios.get('http://localhost/PHP/04-02-2022_snack8_esercitazione/php-snack8-due-metodi/metodo_select_in_pagina/server/controller.php?tipologia=' + this.textSearch) .then((result) => {
          this.products = result.data.results;
        }).catch((error) => { console.log(error); });
      },
  }
);