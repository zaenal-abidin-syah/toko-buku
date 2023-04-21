<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<h1>Edit Menu</h1>
<?= form_open('/menu/update/' . $menu['id']) ?>
<?= csrf_field() ?>

<div class="form-group">
  <?= form_label('Nama Menu', 'nama_menu') ?>
  <?= form_input('nama_menu', $menu['nama_menu'], ['class' => 'form-control']) ?>
  <?php if (isset($validation)) : ?>
    <div class="validation">
      <?= $validation->showError('nama_menu') ?>
    </div>
  <?php endif; ?>
</div>
<div class="form-group">
  <?= form_label('Nama Controller', 'controller') ?>
  <?= form_input('controller', $menu['controller'], ['class' => 'form-control']) ?>
  <?php if (isset($validation)) : ?>
    <div class="validation">
      <?= $validation->showError('controller') ?>
    </div>
  <?php endif; ?>
</div>
<?= form_submit('submit', 'Update', ['class' => 'btn btn-primary mt-3']) ?>
<?= form_close() ?>

<?= $this->endSection() ?>