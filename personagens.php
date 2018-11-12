<?php

 $personalidades = array(
     "Ada Lovelace",
     "Grace Hopper",
     "Nice da Silveira",
     "Maria Quitéria",
     "Lota de Macedo Soares",
     "Chica da Silva",
     "Anita Garibaldi",
     "Hipatia de Alexandria",
     "Hedy Lamarr",
     "Valerie Thomas",
     "Marie Curie",
     "Elizabeth Schuyler",
     "Anne Frank",
     "Amelia Earhart",
     "Valentina Tereshkova",
     "Rosa Parks",
     "Joana D' Arc",
     "Ana Néri",
     "Irmã Dulce",
     "Eva Perón"
 ); 

asort($personalidades);
echo "Itens em ordem crescente <br>";
 
 foreach($personalidades as $personalidade){
     echo $personalidade. "<br>";
 
 }
 
arsort($personalidades);
echo "<br>Itens em ordem decrescente <br> <br>";

foreach($personalidades as $personalidade){
    echo $personalidade. "<br>";
   
}

shuffle($personalidades);
echo "<br> Itens em ordem aleatória <br> <br>";

foreach($personalidades as $personalidade){
    echo $personalidade. "<br>";

}
 