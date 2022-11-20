<div class="container">
    <div class="container">
<br><br><h3 style="text-align:center">Votre Panier</h3>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Article</th>
      <th scope="col">Title</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantité</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php
$i = 0;
while($i<count($panier['ref']))
{

   
    $art = $a->liste_one($panier['ref'][$i]);
   
  
?>
 <tr>
      <th scope="row"><?php  echo $art[0]['id']; ?></th>
      <td><img src="<?php   echo $art[0]['id']; ?>" alt=""></td>
      <td><?php   echo $art[0]['Title']; ?></td>
      <td><?php   echo $art[0]['prix']; ?></td>
      <td><?php echo $panier['qte'][$i]; ?></td>
      <td><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
</svg></a></td>
    </tr>
    <?php
   $i=$i+1;
   
}

    ?>
   
   
  </tbody>
</table>
</div>
</div>