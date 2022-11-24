<div class="container">
    <div class="container">
        <br><br>
        <h3>Edit Article</h3>
        <br>
        <?php if(isset($_GET['pre'])) { ?>
        <div class="row">
  <div class="col">

  <section class="py-0">
            <div class="container px-2 px-lg-5 mt-3">
                <div class="row gx-4 gx-lg-3 row-cols-4 row-cols-md-1 row-cols-xl-2 justify-content-center">
                 
                    <div class="col mb-5">
                        <div class="card h-100" id="test">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo $_GET['pic']; ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <p class="fw-bolder"><?php echo $_GET['title']; ?></p>
                                    <!-- Product price-->
                                  <?php echo $_GET['pr']; ?>€
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a> <a href="../php/add_panier.php?idart=<?php echo $al[$i]['id'] ;?>"><button type="button" class="btn btn-success">+</button></a> </div> -->
                              
                            </div>
                        </div>
                    </div>
                  
                  
        </section>
  </div>
  <div class="col">
    <?php } $nc = $c->liste_id($al[0]['cat'])[0]['Title']; ?>
        <form action="" method="post">
            <br>
            <label for="exampleInputEmail1">Categorie </label>

        <select class="form-select" aria-label="Default select example" name="cat">
            <option value="<?php echo $al[0]['cat'] ?>"><?php echo $nc; ?></option>
  <?php $i=0; while($i<count($cl)) { ?>
  <option value="<?php echo $cl[$i]['id']; ?>"><?php echo $cl[$i]['Title']; ?></option>
  <?php $i = $i+1; } ?>

</select>
<br>



  <div class="form-group">
    <label for="exampleInputEmail1">Title </label>
    <input type="texte" class="form-control" name="title"  value="<?php if(isset($_GET['pre'])) { echo $_GET['title']; } else { echo $al[0]['Title']; } ?>" required>
  </div>
  <br>
  <div class="row">
    <div class="col">
    <label for="exampleInputEmail1">Description </label>

      <input type="text" class="form-control"  name="des" value="<?php if(isset($_GET['pre'])) { echo $_GET['des']; } else { echo $al[0]['Description']; } ?>">
    </div>
    <div class="col">
    <label for="exampleInputEmail1">Prix </label>

      <input type="text" class="form-control"  name="prix" value="<?php if(isset($_GET['pre'])) { echo $_GET['pr']; } else { echo $al[0]['prix']; } ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Picture</label>
    <input type="texte" class="form-control" id="exampleInputPassword1" name="pic" value="<?php if(isset($_GET['pre'])) { echo $_GET['pic']; } else { echo $al[0]['picture']; } ?>" required>
  </div>
  <br>
  <button type="submit" class="btn btn-primary" name="pre">Previsualiser</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  <?php if(isset($_GET['pre'])) { ?>
    </div>
</div>
<?php } ?>
<br><br>
</div>
</div>