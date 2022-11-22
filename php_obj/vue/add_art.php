<div class="container">
    <div class="container">
        <br><br>
        <h2>Ajouter un Artiste</h2>
    <form method="POST">

    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Artistes</label>
      <select class="form-select" id="exampleSelect1" name="artiste">
        <?php $i=0; while($i<count($al)){ ?>
        <option value="<?php echo $al[$i]['id']; ?>"><?php echo $al[$i]['nom']; ?></option>
       <?php $i=$i+1; } ?>
      </select>
    </div>
  

 
   <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
    </div>
</div>