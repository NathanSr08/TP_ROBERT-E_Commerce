<div class="container">
    <div class="container">
        <h2>Liste des Videos</h2>
        <br><br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Video_Id</th>
      <th scope="col">Titre</th>
      <th scope="col">likes</th>
      <th scope="col">Video</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; while($i<count($vl)){ ?>
    <tr>
      <th scope="row"><?php echo $vl[$i]['id_video']; ?></th>
      <td><?php echo $vl[$i]['title']; ?></td>
      <td><?php echo $vl[$i]['likes']; ?></td>
      <td></td>
    </tr>
    <?php $i=$i+1; } ?>
  </tbody>
</table>
    </div>
</div>