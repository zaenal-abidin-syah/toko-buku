<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<h1>Delete Menu</h1>

<p>Are you sure you want to delete this menu?</p>

<p><strong><?= $menu['namamenu'] ?></strong></p>

<?= form_open('menu/delete/' . $menu['idmenu']) ?>

<button type="submit" class="btn btn-danger">Yes</button>
<a href="<?= base_url('menu') ?>" class="btn btn-secondary">No</a>

<?= form_close() ?>

<?= $this->endSection() ?>