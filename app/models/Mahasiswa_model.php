<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Akaaza",
    //         "npm" => "123456789",
    //         "jurusan" => "Teknik Informatika",
    //         "email" => "akaaza@gmail.com"
    //     ],

    //     [
    //         "nama" => "Rafi",
    //         "npm" => "987654321",
    //         "jurusan" => "Teknik Informatika",
    //         "email" => "rafi@gmail.com"
    //     ],

    //     [
    //         "nama" => "Rizki",
    //         "npm" => "456789123",
    //         "jurusan" => "Teknik Informatika",
    //         "email" => "rizki@gmail.com"
    //     ]

    // ];

    private $table = 'mahasiswa';
    private $db; // database handler

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllMahasiswa()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahdataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', :nama, :npm, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        // : = binding parameter
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
