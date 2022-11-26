<header class="bg-dark py-5">
            <div class="container px-2  px-lg-2 my-2">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Livraison</h1>
                </div>
            </div>
        </header>
<div class="container">
    <div class="container">
<br><b><br></b>
 
        <h4>Vos Adresses :   <a href="../php/add_adr.php"><button type="button" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-add-fill" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0Z"></path>
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"></path>
  <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"></path>
</svg>
                Button
              </button>   </a></h4>
        <hr>
        <form action="" method="post">

        
        <div class="row">
          <?php $i = 0; while($i<count($adl)) { ?>
            <div class="col">
            <div class="card">
              
      <div class="card-body">
   
        <input type="radio" name="1" id="1" value="<?php echo $adl[$i]['id']; ?>" checked>
        <a href="../php/edit_adr.php?id=<?php echo $adl[$i]['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a>
<a href="../php/del_adr.php?id=<?php echo $adl[$i]['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-dash-fill" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
  <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7ZM11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 1 1 0-1Z"/>
</svg></a>
       
        <h5 class="card-title"><?php echo $adl[$i]['Title']; ?></h5>
        <p class="card-text"><?php echo $adl[$i]['N°']." ".$adl[$i]['Rue']." ".$adl[$i]['Code_postal']." ".$adl[$i]['Ville']; ?><br><?php echo $adl[$i]['Pays']; ?></p>
        

      </div>
    </div>
            </div>
            <?php $i = $i+1; } ?>
            
        </div>
        </form>
        <br>
        <button style="position:relative;left : 93%;text-align:right" type="submit" class="btn btn-success">Suivant</button>
    </div>   
</div>
<br>