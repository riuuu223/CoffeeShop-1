<?php

class Karyawan_model{
    private $gaji;
	private $id;
	private $jabatan;
    private $namaKaryawan;

    private $table = 'karyawan';
    private $db;
    

	function __construct()
	{
        $this->db = new Database;
    }
    
    public function getAll(){
        $this->db->query('select * from ' . $this->table);
        return $this->db->resultSet();    
    }

    public function getKaryawanById($id){
        $this->db->query('select * from ' . $this->table . ' where id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahDataKaryawan($data){
        
        $this->db->query('INSERT INTO karyawan (nama_karyawan, jabatan, gaji, alamat, umur, notelp, photo) VALUES (:nama, :jabatan, :gaji, :alamat, :umur, :notelp, :photo)');
        
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('gaji', 2500000);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('notelp', $data['notelp']);
        $this->db->bind('photo', '/img/profile-default.jpg');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKaryawan($data){
        $this->db->query('DELETE FROM karyawan WHERE id =:id');

        $this->db->bind('id', $data);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataKaryawan($data){
        
        $this->db->query('UPDATE karyawan SET nama_karyawan = :nama, jabatan = :jabatan, gaji = :gaji, alamat = :alamat, umur = :umur, notelp = :notelp, photo = :photo WHERE id = :id');
        
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('gaji', 2500000);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('notelp', $data['notelp']);
        $this->db->bind('photo', '/img/profile-default.jpg');
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}