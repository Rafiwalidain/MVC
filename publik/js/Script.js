$(function () {
  $("#tombolTambahData").on("click", function () {
    // tampilkan modal tambah data
    $("#tombolTambahData").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });

  $(".tampilModalUbah").on("click", function () {
    // tangkap data dari button ubah
    $("#judulModal").html("Edit Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Edit Data");
    $(".modal-body form").attr("action", "http://localhost/phpmvc/publik/mahasiswa/ubah");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/phpmvc/publik/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#npm").val(data.npm);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
