<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1 class="text-center">Halaman Dashboard</h1>
  <hr>
  <hr>

  <a href="logout.php"><button type="button" class="btn btn-dark">logout</button>
  </a>

  <h3 class="mt-5">Daftar Clients</h3>

  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
        <div class="input-group mb-3 mt-3">
          <input type="search" class="form-control" placeholder="Search clients..." name="keyword" id="keyword"
            autofocus autocomplete="off">
          <button class="btn btn-warning" type="submit" name="button-search" id="button-search">Search</button>
        </div>
      </form>
    </div>
  </div>
  <div id="search-container">
    <?php if ($clients): ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
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
                <img src="img/<?= $client['gambar']; ?>" width="60">
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
    <a href="tambah.php" class="btn btn-primary">Tambah Data Clients</a>
  </div>
</div>

<?php require('partials/footer.php'); ?>