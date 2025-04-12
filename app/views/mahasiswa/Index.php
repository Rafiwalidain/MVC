<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?php echo BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombol-cari">Cari</button>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach ($data["mhs"] as $mhs) : ?>
                    <li class="list-group-item">
                        <?php echo $mhs["nama"]; ?>
                        <a href="<?php echo BASEURL; ?>/mahasiswa/hapus/<?php echo $mhs["id"]; ?>" class="badge text-bg-danger float-end ms-2" style="text-decoration: none;" onclick="return confirm('yakin?');">Delete</a>
                        <a href="<?php echo BASEURL; ?>/mahasiswa/ubah/<?php echo $mhs["id"]; ?>" class="badge text-bg-success float-end ms-2 tampilModalUbah" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?php echo $mhs['id'] ?>">Edit</a>
                        <a href="<?php echo BASEURL; ?>/mahasiswa/detail/<?php echo $mhs["id"]; ?>" class="badge text-bg-primary float-end ms-2" style="text-decoration: none;">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</div>

<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="npm" class="form-label">Npm</label>
                        <input type="number" class="form-control" id="npm" name="npm">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select form-select-sm" aria-label="Small select example" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>