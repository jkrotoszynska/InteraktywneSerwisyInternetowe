<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Funkcje
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php

  #zadanie 2
  function pierwszaFunkcja(){
    echo("Wiadomosc z pierwszej funkcji" . "</br>");
  }
  pierwszaFunkcja();

  #zadanie 3
  function funkcjaZArgumentami($imie, $nazwisko = "Nowak"){
    echo("Hello ".$imie." ".$nazwisko . "</br>");
  }
  funkcjaZArgumentami("Jan");
  funkcjaZArgumentami("Kapcer","Szymański");

  #zadanie 4
  function funkcjaZNieznanaLiczbaArgumentow(){
    // $val = "";
    // $tab = func_get_args();
    // foreach($tab as $v){
    //   $val .= $v;
    // }
    // echo ($val . "</br>");
  }
  funkcjaZNieznanaLiczbaArgumentow("cytyryny", "kamienie");
  funkcjaZNieznanaLiczbaArgumentow("motylek", "fiołek");

  #zadanie 5
  function funkcjaZReferencja(&$imie){
    $imie = "Andrzej";
    echo($imie." "."zaktualizowany(a) poprzez referecję do zmiennej");

  }
  $imieDoReferencji = "Ania";
  funkcjaZReferencja($imieDoReferencji);

  ?>


</div>