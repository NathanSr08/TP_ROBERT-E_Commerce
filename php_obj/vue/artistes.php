<div class="container">
    <div class="container">
<h2 style="text-align:center">Listes des Artistes</h2>

<div class="cards" style="text-align:center">
    <?php $i=0; while($i<count($al)){ ?>
    <article class="card">
        <header>
         <!-- <a style="text-decoration:none;" href="../PHP/liste_video.php?id=<?php echo $al[$i]['chanel_id'] ?>"> -->
         <h5><?php echo $al[$i]['Title']; ?></h5>
        <!-- </a>    -->
        </header>    
        <img src="<?php echo $al[$i]['picture']; ?>" alt="Hot air balloons">
        <div class="content">
            <p><?php echo $al[$i]['prix']; ?>€</p>
        </div>
          
    </article>
    <?php $i=$i+1; } ?>
    </div>
</div>
</div>