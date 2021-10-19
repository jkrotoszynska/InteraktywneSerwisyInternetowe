<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Funkcje
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  function pierwszaFunkcja(){
    echo("Wiadomosc z pierwszej funkcji" . "</br>");
  }
  pierwszaFunkcja();

  function funkcjaZArgumentami($imie, $nazwisko = "Nowak"){
    echo("Hello ".$imie." ".$nazwisko . "</br>");
  }
  funkcjaZArgumentami("Jan");
  funkcjaZArgumentami("Kapcer","Szymański");
  ?>
</div>