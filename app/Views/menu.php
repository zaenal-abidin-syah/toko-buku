<table class="table">
  <thead>
    <tr>
      <th>ID Menu</th>
      <th>Nama Menu</th>
      <th>Nama Controller</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($menu as $row) : ?>
      <tr>
        <td><?php echo $row['idmenu']; ?></td>
        <td><?php echo $row['namamenu']; ?></td>
        <td><?php echo $row['namacontroller']; ?></td>
        <td>
          <a href="<?php echo site_url('menu/edit/' . $row['idmenu']); ?>" class="btn btn-primary">Edit</a>
          <a href="<?php echo site_url('menu/delete/' . $row['idmenu']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
          <a href="<?php echo site_url('menu/view/' . $row['idmenu']); ?>" class="btn btn-info">View Record</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>