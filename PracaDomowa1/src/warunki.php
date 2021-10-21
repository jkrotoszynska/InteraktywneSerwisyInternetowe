<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Warunki
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  $liczba = 8;

  if($liczba < 10 ){
    echo('true'. '</br>');
  } else {
    echo('false'. '</br>');
  };

  $liczbaInna = 10;
  if($liczbaInna < 10){
    echo('Mniejsze niz 10' . '</br>');
  }else if($liczbaInna == 10){
    echo('Równe 10' . '</br>');
  }else{
    echo('Musi byc wieksze niz 10' . '</br>');
  }

  $a = 12;
  switch($a){
    case 7: echo('To musi byc LICZBA_SŁOWNIE!' . '</br>');
    break;
    case 8: echo('To musi byc LICZBA_SŁOWNIE!' . '</br>');
    break;
    case 9: echo('To musi byc LICZBA_SŁOWNIE!' . '</br>');
    break;

    default:echo('Żadna z powyższych');
    break;
  }

  ?>
</div>
