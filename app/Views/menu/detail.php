<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
  <div class="col-md-6">
    <h1>Detail Menu</h1>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?= $menu['nama_menu']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $menu['nama_controller']; ?></h6>
        <p class="card-text"><?= $menu['keterangan']; ?></p>
        <a href="/menu/edit/<?= $menu['id_menu']; ?>" class="btn btn-success">Edit</a>
        <form action="/menu/<?= $menu['id_menu']; ?>" method="post" class="d-inline">
          <?= csrf_field(); ?>
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
        </form>
        <a href="/menu" class="card-link">Kembali</a>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>