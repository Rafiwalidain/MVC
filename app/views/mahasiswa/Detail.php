<div class="container mt-4">
    <div class="card" style="width: 13rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $data["mhs"]["nama"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $data["mhs"]["npm"]; ?></h6>
            <p class="card-text"><?php echo $data["mhs"]["email"]; ?></p>
            <p class="card-text"><?php echo $data["mhs"]["jurusan"]; ?></p>
            <a href="<?php echo BASEURL; ?>/mahasiswa" class="card-link">Back</a>
        </div>
    </div>
</div>