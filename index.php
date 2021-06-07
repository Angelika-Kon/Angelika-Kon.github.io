<!DOCTYPE HTML>
<html lang="pl">

    <head>
        <meta charset="utf-8">
        <title>Szukaj w Google</title>
        <link rel="icon"  href="icon.png">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style2.css">
        <link rel="stylesheet" type="text/css" href="autocompleter.css">
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
       
        <script src="./autocompleter.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      </head>

      <body> 

        <div id="app" :class="[change_class == 1 ? 'results' : 'home']"> 
          
        <nav class="nav_tools">
            <a href ="#">Gmail</a>
            <a href ="#">Grafika</a>
            <img src="google-img/app.jpg" class="google_apps" role="button"></img>
            <button>Zaloguj się</button>
        </nav>
    
        <section class="search">
            <img src="google-img/logo.png" class="logo">
            <form><br><br>
                <div class="search_elements">
                <!--  <v-autocompleter v-model="googleSearch" :options="cities" @enter="showResults"></v-autocompleter>-->
                <div id="app">
                {{ googleSearch }}
                <input type="text" v-model="googleSearch" @input="findResultsDebounced" />
                <div v-for="city in results" :key="city.name">
                <span class="name">{{ city.name }}</span>
                </div>
            	</div>
                    <img src="google-img/szukaj.png" class="search_icon"/>
                    <img src="google-img/mikrofon.png" class="search_voice"/>
                    <input  type="button" class="search_button" value="Sukaj w google"/>
                    <input  type="button" class="search_button" value="Szczęśliwy traf"/>
                </div>
            </form>
        </section>
    
        <footer class="home_futter">
            <h4>Polska</h4>
            <div class="links">
                <div class="link_1">
                    <a href="#">O nas</a>
                    <a href="#">Reklamuj się</a>
                    <a href="#">Dla firm</a>
                    <a href="#">Jak działa wyszukiwarka</a>
                </div>
                <div class="link_2">
                    <a href="#"><img src="google-img/leaf.png" class="leaf">Nautralność węglowa od 2007 roku</a>
                </div>
                <div class="link_3">
                    <a href="#">Prywatność</a>
                    <a href="#">Warunki</a>
                    <a href="#">Ustawienia</a>
                </div>
            </div>
        </footer>
    
        <div class="top_nav">
    
            <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png"  alt="">
    
            <ul class="accountOptions">
              <li><a href="#"><img src="google-img/app.jpg" class="google_apps" role="button"></a></li>
              <li><button class="signIn" type="button" name="button">Zaloguj się</button></li>
            </ul>
    
            <div class="search_tools">
    
              <div class="search_elem">
                <input ref="second" type="text" v-model="googleSearch"/>
                <img src="google-img/szukaj.png" class="search_icon">
                <img src="google-img/mikrofon.png" class="search_voice">
                <img src="google-img/klawiatura.png" class="search_keyboard">
                <div class="line"></div>
                <img src="google-img/x.png" class="search_x">
              </div>
    
              <ul class="search_options">
                <li class="left active"><a href="#">Wszystko</a></li>
                <li class="left"><a href="#">Wiadomości</a></li>
                <li class="left"><a href="#">Grafika</a></li>
                <li class="left"><a href="#">Wideo</a></li>
                <li class="left"><a href="#">Mapy</a></li>
                <li class="left"><a href="#">Więcej</a></li>
                <li class="right"><a class="tools" href="#">Narzędzia</a></li>
                <li class="right"><a href="#">Ustawienia</a></li>
              </ul>
              
            </div>
    
        </div> 
    
        <div class="searchResults">

          <p class="results_number">Około 966 000 000 wyników (0,60 s) (0,79 s)</p>

          <div class="result">
              <a class="link" href="#">https://pl.wikipedia.org/wiki/Portoryko</a>
              <h2><a href="#">Portoryko – Wikipedia, wolna encyklopedia ...</a></h2>
              <p>Wyspa Puerto Rico w okresie prekolumbijskim zamieszkiwana była przez ... Państwo Stowarzyszone Portoryko” (Estado Libre Asociado de Puerto Rico) nie jest ...</p>
          </div>
      
          <div class="result">
              <a class="link" href="#">https://pl.wikipedia.org/wiki/Puerto_Rico</a>
              <h2><a href="#"> Puerto Rico – Wikipedia, wolna encyklopedia</a></h2>
              <p>Poniżej znajdują się różne znaczenia hasła „Puerto Rico”. Puerto Rico, Portoryko – terytorium zorganizowane nieinkorporowane Stanów Zjednoczonych. Miasta.</p>
          </div>
      
          <div class="result">
              <a class="link" href="#">https://en.wikipedia.org/wiki/Puerto_Rico</a>
              <h2><a href="#">Puerto Rico - Wikipedia</a></h2>
              <p>('Free Associated State of Puerto Rico') is a Caribbean island and unincorporated territory of the United States. It is located in the northeast Caribbean Sea, ...</p>
          </div>
      
          <div class="result">
              <a class="link" href="#">https://www.blue-sails.com/puerto-rico-czartery-jachtow/</a>
              <h2><a href="#">Puerto Rico – Tropikalna róznorodność | Czartery ... - Blue Sails</a></h2>
              <p>Bogactwo Puerto Rico stanowią kilometry piaszczystych plaż, tropikalne lasy, góry i doliny, rum, egzotyczna kuchnia oraz kolonialna architektura. Wszystko to ...</p>
          </div>
      
          <div class="result">
              <a class="link" href="#">https://www.discoverpuertorico.com/</a>
              <h2><a href="#">Discover Puerto Rico: Puerto Rico Travel Guide | Visitor ...</a></h2>
              <p>Dare to discover the many treasures of Puerto Rico. Find travel information, tips and more from the island's official tourism website.</p>
          </div>
      
      
      
          <div class="result">
              <a class="link" href="#">https://www.lacerta.pl/nasze-gry/puerto-rico</a>
              <h2><a href="#">Puerto Rico - Wydawnictwo Lacerta</a></h2>
              <p>Puerto Rico jest grą, która wielu miesięcy utrzymuje się na pierwszym miejscu największego na świecie internetowego rankingu gier planszowych ...</p>
          </div>
      
          <div class="result">
              <a class="link" href="#">https://r.pl/florida-puerto-rico-latynoski-rytm/zakwaterowanie-ust</a>
              <h2><a href="#">Florida & Puerto Rico - Latynoski rytm (Stany Zjednoczone ...</a></h2>
              <p>Miami i bajeczne plaży Florydy * pełna gwiazd South Beach i pachnąca cygarami Little Havana * centrum lotów kosmicznych – Cape Canaveral * Centrum ...</p>
          </div>
      
          <div class="result">
              <a class="link" href="#">https://www.trivago.pl/puerto-rico-33659/hotel</a>
              <h2><a href="#">Puerto Rico — hotele | Znajdź i porównaj znakomite oferty na ...</a></h2>
              <p>Porównaj ceny 13013 hoteli — Puerto Rico, Puerto Rico. Wybierz idealną dla siebie ofertę spośród tych dostępnych na trivago.pl i zaoszczędź!</title></p>
          </div>
      

<br>

<div class="related_results">

  <h2>Wyszukiwania podobne do: star trek</h2>

  <table>
    <tr>
      <td>Star trek (2009)</td>
      <td>star strek: następne pokolenie</td>
    </tr>
    <tr>
      <td>Star Trek: W nieznane</td>
      <td>Star Trek chronologia</td>
    </tr>
    <tr>
      <td>star trek: seria orginalna</td>
      <td>Star Trek: Picard</td>
    </tr>
    <tr>
      <td>Star Trek: Discovery</td>
      <td>Star Trek: Picard Netflix</td>
    </tr>
  </table>

</div>

<br><br>

<table class="pages">
    <tr>
      <td><span class="blue">G</span></td>
      <td><span class="red">o</span></td>
      <td><span class="yellow">o</span></td>
      <td><span class="yellow">o</span></td>
      <td><span class="yellow">o</span></td>
      <td><span class="yellow">o</span></td>
      <td><span class="yellow">o</span></td>
      <td><span class="yellow">o</span></td>
      <td><span class="yellow">o</span></td>
      <td><span class="yellow">o</span></td>
      <td><span class="yellow">o</span></td>
      <td><span class="blue">g</span></td>
      <td><span class="green">l</span></td>
      <td><span class="red">e</span></td>
      <td rowspan="2" style="width: 10px;"></td>
      <td><span class="blue arrow">></span></td>
    </tr>

    <tr>
      <td class="page_nr"></td>
      <td class="page_nr" style="color: black; cursor: text;">1</td>
      <td class="page_nr">2</td>
      <td class="page_nr">3</td>
      <td class="page_nr">4</td>
      <td class="page_nr">5</td>
      <td class="page_nr">6</td>
      <td class="page_nr">7</td>
      <td class="page_nr">8</td>
      <td class="page_nr">9</td>
      <td class="page_nr">10</td>
      <td colspan="3"></td>
      <td class="page_nr">Następna</td>
    </tr>

  </table>
</div>

<div class="footer">

  <div class="localization">
  <p>
    <a class="country">Polska</a>
    <a class="loc"><strong>26-332</strong> - Z Twojego adresu internetowego </a>
    <a class ="loc_more">- Sławno</a><a class ="loc_more"> - Dowiedz się więcej</a>
  </p>
</div>

  <ul>
      <li><a href="#">Pomoc</a></li>
      <li><a href="#">Prześlij opinię</a></li>
      <li><a href="#">Prywatność</a></li>
      <li><a href="#">Warunki</a></li>
  </ul>
  
</div>
</div>
</body>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            googleSearch: '',
            results: []
        },
        methods : {
            findResultsDebounced : Cowboy.debounce(100, function findResultsDebounced() {
                console.log('Fetch: ', this.googleSearch)
                console.log(`http://localhost:8080/search?name=${this.googleSearch}`);
                fetch(`http://localhost:8080/search?name=${this.googleSearch}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log('Data: ', data);
                        this.results = data;
                    });
            })
        }
    })
  </script>
<!--<script>
    var app = new Vue({
      el: '#app',
      data: {
        enterValues: [],
        cities: window.cities,
        change_class: 0,
        googleSearch: '',
      },
      methods: {
        showResults(newValue) {
          this.enterValues.push(newValue);
  
          if (this.change_class == 0){
            this.change_class = 1;
          }
          else{
            this.$emit('input', '');
            this.change_class = 0;
          }
        }
      }
  });
  </script>-->
  </html>