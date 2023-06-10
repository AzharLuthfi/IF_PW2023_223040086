<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
    <h1 class="container my-3">Update Data Client</h1>

    <div class="row">
        <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $client["id"]; ?>">
                <input type="hidden" name="gambarlama" value="<?= $client["gambar"]; ?>">
                <div class="mb-3 w-25">
                    <label for="nim" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" maxlength="9" autofocus required
                        autocomplete="off" value="<?= $client["nama"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" autocomplete="off"
                        value="<?= $client["email"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">password</label>
                    <input type="password" class="form-control" name="password" id="password" autocomplete="off"
                        value="<?= $client["password"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label><br>
                    <img src="img/<?= $client["gambar"]; ?>" width="200"><br>
                    <input type="file" class="form-control" name="gambar" id="gambar">
                </div>
                <button class="btn btn-primary" type="submit" name="ubah">Update Data</button>
            </form>
        </div>
    </div>

</div>

<?php require('partials/footer.php'); ?>