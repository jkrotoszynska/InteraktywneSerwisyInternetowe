<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Pętle
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  #zadanie 2
  for($count = 0; $count <= 10; $count++){
    echo($count);
  }

  echo('</br>');

  #zadanie 3
  $i = 0;
  while($i++ <= 10){
    echo($i-1);
  }

  echo('</br>');

  $j = 5;
  do{
    echo($j);
    $j++;
  }while($j<=10);

  echo('</br>');

  #zadanie 4
  echo("<div>");
  $p = 1;
  while($p<=2){
    echo("Kategoria numer $p: ");
    for($u=0; $u<=2; $u++){
      echo("<ul>");
      echo("Grupa ".($u+1).": ");
      for($l=0; $l<=1; $l++){
        echo("<li> "."* punkt ".($l+1)."</li>");
      }
    }
    echo("</ul>");
    $p+=1;
  }
  echo("<div>")

  ?>
</div>
