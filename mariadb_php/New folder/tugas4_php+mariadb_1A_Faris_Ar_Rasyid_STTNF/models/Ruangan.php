<?php
class Ruangan{
    //member1 var
    public $koneksi;
    //member2 konstruktor
    public function __construct(){
        global $dbh; //panggil instance obj PDO di koneksi_db.php
        $this->koneksi = $dbh; // instance obj PDO di assign ke var koneksi   
    }
    //member3 method2 terkait CRUD
    public function getAll(){
        $sql = "SELECT g.nama AS nama_gedung, f.nama AS nama_fasilitas,
                k.nama AS kategori, r.nama, r.lantai, r.status, r.foto, r.id
                FROM ruangan r
                INNER JOIN gedung g ON g.id = r.gedung_id
                INNER JOIN fasilitas f ON f.id = r.fasilitas_id
                INNER JOIN kategori_ruangan k ON k.id = r.kategori_ruangan_id";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }    
    public function getRuangan($id){
        $sql = "SELECT g.nama AS nama_gedung, f.nama AS nama_fasilitas,
                k.nama AS kategori, r.nama, r.lantai, r.status, r.foto, r.id
                FROM ruangan r
                INNER JOIN gedung g ON g.id = r.gedung_id
                INNER JOIN fasilitas f ON f.id = r.fasilitas_id
                INNER JOIN kategori_ruangan k ON k.id = r.kategori_ruangan_id
                WHERE r.id = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
}