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
     $num = func_num_args();
     $get = func_get_args();
    
    for($i=0; $i<$num; $i++){
       echo("arg ".($i+1).": ".$get[$i]." ");
     };
   }

  funkcjaZNieznanaLiczbaArgumentow("cytyryny", "kamienie");
  echo("</br>");
  funkcjaZNieznanaLiczbaArgumentow("motylek", "fiołek");
  echo("</br>");

  #zadanie 5
  $imieDoReferencji = "Marek";
  echo ($imieDoReferencji. " to ");
  function funkcjaZReferencja(&$imie){
    $imie = "Mariusz";
    echo($imie." "."zaktualizowany(a) poprzez referecję do zmiennej");

  }
  funkcjaZReferencja($imieDoReferencji);

  ?>
</div>