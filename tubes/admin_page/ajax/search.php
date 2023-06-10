<?php
require('../functions.php');
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
            clients
        WHERE
            nama LIKE '%$keyword%' OR
            email LIKE '%$keyword%'

        ";
$clients = query($query);
?>
<?php if ($clients): ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($clients as $client): ?>
        <tr>
          <th scope="row">
            <?= $i++; ?>
          </th>
          <td>
            <img src="img/<?= $client['gambar']; ?>" width="50">
          </td>
          <td>
            <?= $client['nama']; ?>
          </td>
          <td>
            <?= $client['email']; ?>
          </td>
          <td>
            <?= $client['password']; ?>
          </td>
          <td>
            <a href="update.php?id=<?= $client['id']; ?>" class="btn btn-primary">Update</a> |
            <a href="delete.php?id=<?= $client['id']; ?>"
              onclick="return confirm('apakah benar anda ingin menghapus data ini?')" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <div class="row">
    <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
        Client Not Found!
      </div>

    </div>
  </div>
<?php endif; ?>