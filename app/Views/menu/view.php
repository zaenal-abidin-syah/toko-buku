<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<h1>Detail Menu</h1>
<table class="table">
  <tr>
    <td>ID Menu</td>
    <td><?= $menu['id'] ?></td>
  </tr>
  <tr>
    <td>Nama Menu</td>
    <td><?= $menu['nama_menu'] ?></td>
  </tr>
  <tr>
    <td>Nama Controller</td>
    <td><?= $menu['controller'] ?></td>
  </tr>
</table>
<a href="<?= base_url('menu') ?>" class="btn btn-sm btn-primary">Kembali ke daftar menu</a>
<?= $this->endSection() ?>