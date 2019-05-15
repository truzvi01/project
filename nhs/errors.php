<?php  if (count($data_errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($data_errors as $error) : ?>
  	  <br><?php echo $error ?><br>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
