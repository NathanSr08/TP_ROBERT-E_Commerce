<div class="container">
    <div class="container">
        <br><br>
        <h3>Ajouter un Article</h3>
        <br>
        <form action="" method="post">
            <br>
            <label for="exampleInputEmail1">Categorie </label>

        <select class="form-select" aria-label="Default select example" name="cat">
  <?php $i=0; while($i<count($cl)) { ?>
  <option value="<?php echo $cl[$i]['id']; ?>"><?php echo $cl[$i]['Title']; ?></option>
  <?php $i = $i+1; } ?>

</select>
<br>
  <div class="form-group">
    <label for="exampleInputEmail1">Title </label>
    <input type="texte" class="form-control" name="title">
  </div>
  <br>
  <div class="row">
    <div class="col">
    <label for="exampleInputEmail1">Description </label>

      <input type="text" class="form-control"  name="des">
    </div>
    <div class="col">
    <label for="exampleInputEmail1">Prix </label>

      <input type="text" class="form-control"  name="prix">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Picture</label>
    <input type="texte" class="form-control" id="exampleInputPassword1" name="pic">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  
    </div>
</div>