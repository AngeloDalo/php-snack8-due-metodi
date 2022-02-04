const App = new Vue(
    {
      el: '#app',
      data: {
        products: [],
        textSearch: 'all',
      },
      created() {
        console.log(this.textSearch);
        //valore impostato di defautl
        axios.get('http://localhost/PHP/04-02-2022_snack8_esercitazione/php-snack8-due-metodi/metodo_select_in_pagina/server/controller.php?tipologia=' + this.textSearch) .then((result) => {
          this.products = result.data.results;
        }).catch((error) => { console.log(error); });
      },

      methods: {
        //cambiando valore della select andremo a creare un nuovo link
        changeTipologia: function (textSearch) {
          console.log(this.textSearch);
          axios.get('http://localhost/PHP/04-02-2022_snack8_esercitazione/php-snack8-due-metodi/metodo_select_in_pagina/server/controller.php?tipologia=' + textSearch) .then((result) => {
            this.products = result.data.results;
          }).catch((error) => { console.log(error); });
        }
     }
  }
);