<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<h1>Add New Menu</h1>

<?= form_open('/menu/create') ?>
<?= csrf_field() ?>
<div class="form-group">
  <?= form_label('Nama Menu', 'nama_menu') ?>
  <?= form_input('nama_menu', set_value('nama_menu'), ['class' => 'form-control']) ?>
  <?php if (isset($validation)) : ?>
    <div class="validation">
      <?= $validation->showError('nama_menu') ?>
    </div>
  <?php endif; ?>
</div>
<div class="form-group mt-3">
  <?= form_label('Controller', 'controller') ?>
  <?= form_input('controller', set_value('controller'), ['class' => 'form-control']) ?>
  <?php if (isset($validation)) : ?>
    <div class="validation">
      <?= $validation->showError('controller') ?>
    </div>
  <?php endif; ?>
</div>
<?= form_submit('submit', 'Save', ['class' => 'btn btn-primary mt-3']) ?>
<?= form_close() ?>

<?= $this->endSection() ?>