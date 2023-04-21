<?php echo form_open('menu/add'); ?>
<div class="form-group">
  <label for="namamenu">Nama Menu</label>
  <input type="text" class="form-control" id="namamenu" name="namamenu">
</div>
<div class="form-group">
  <label for="namacontroller">Nama Controller</label>
  <input type="text" class="form-control" id="namacontroller" name="namacontroller">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>