-- masuk ke dbpenjadwalan
USE dbpenjadwalan
-- tampilkan seluruh
SELECT * FROM materi
-- tampilkan data 
SELECT materi.nama, kategori.nama AS kategori
FROM materi
INNER JOIN kategori ON materi.id = materi.kategori_id
-- buat view untuk menampilkan data materi kursus (materi_kursus_v)
CREATE VIEW materi_kursus_v AS
SELECT materi.nama, kategori.nama AS kategori
FROM materi
INNER JOIN kategori ON materi.id = materi.kategori_id
-- panggil view materi_kursus_v
SELECT * FROM materi_kursus_v
-- buat view untuk menampilkan data training (training_v)
CREATE VIEW training_v AS
SELECT jadwalTraining.tglMulai, jadwalTraining.tglAkhir, materi.nama AS materi, kategori.nama AS kategori, jenisKelas.nama AS kelas, pengajar.nama AS pengajar, klien.nama AS klien
FROM jadwalTraining
INNER JOIN materi ON jadwalTraining.id = jadwalTraining.materi_id
INNER JOIN kategori ON materi.id = materi.kategori_id
INNER JOIN jenisKelas ON jadwalTraining.id = jadwalTraining.jenisKelas_id
INNER JOIN pengajar ON jadwalTraining.id = jadwalTraining.pengajar_id
INNER JOIN klien ON jadwalTraining.id = jadwalTraining.klien_id
-- panggil view training_v
SELECT * FROM training_v
-- beri akses ke user mimin untuk mengakses seluruh database & tabel2 di dalamnya
GRANT ALL PRIVILEGES ON *.* TO mimin@localhost IDENTIFIED BY 'mimin';
-- beri akses ke user budi untuk mengakses 1 database : dbpenjadwalan & tabel2 di dalamnya
GRANT ALL PRIVILEGES ON dbpenjadwalan.* TO budi@localhost IDENTIFIED BY 'budi';
-- beri akses ke user andi untuk mengakses 1 database : dbpenjadwalan dengan sebagian privileges: SELECT, INSERT
GRANT SELECT,INSERT ON dbpenjadwalan.* TO andi@localhost IDENTIFIED by 'andi';
-- Cabut hak akses budi (REVOKE ALL)
REVOKE ALL ON dbpenjadwalan.* FROM 'budi'@'locahost';