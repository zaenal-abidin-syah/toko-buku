<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<h1>Daftar Menu</h1>
<a href="/menu/create" class="btn btn-primary mb-3">Tambah Menu</a>
<?php if (session()->getFlashdata('pesan')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
  </div>
<?php endif; ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Menu</th>
      <th scope="col">Nama Controller</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($menu as $m) : ?>
      <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $m['nama_menu']; ?></td>
        <td><?= $m['controller']; ?></td>
        <td>
          <a href="/menu/<?= $m['id']; ?>" class="btn btn-info">Detail</a>
          <a href="/menu/edit/<?= $m['id']; ?>" class="btn btn-success">Edit</a>
          <form action="/menu/delete/<?= $m['id']; ?>" method="post" class="d-inline">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?= $this->endSection(); ?>