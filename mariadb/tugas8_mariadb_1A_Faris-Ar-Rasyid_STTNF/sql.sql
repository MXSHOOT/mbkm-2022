use dbpos
-- buat procedure 
-- inputProduk(), showAllProduk(), showProdukElektronik(id), showProdukFurniture(id)
-- inputProduk()
DELIMITER $$ 
CREATE PROCEDURE  inputProduk(
kode VARCHAR(45),prod VARCHAR(45),hrg VARCHAR(45),stok INT(11),kid INT
)
BEGIN
INSERT INTO produk (kode,nama,harga,stok,kategori_produk_id)
VALUES (kode,prod,hrg,stok,kid);
END$$
DELIMITER ;
-- input data masing-masing tabel minimal 5 record
CALL inputProduk(‘123’,’Indomie’,2000,1,1);
CALL inputProduk(‘124’,’pocari’,6000,1,2);
CALL inputProduk(‘125’,’sarimi’,3000,1,1);
CALL inputProduk(‘126’,’yakult’,4000,1,2);
CALL inputProduk(‘127’,’mezon’,5000,1,2);
-- showAllProduk()
DELIMITER $$ 
CREATE PROCEDURE  showAllProduk()
BEGIN 
SELECT * FROM produk;
END $$
DELIMITER ;

CALL showAllProduk();
-- showProdukElektronik(id) diubah ke produk air
DELIMITER $$ 
CREATE PROCEDURE  showProdukAir(kategori_produk_id INT)
BEGIN 
SELECT * FROM produk WHERE kategori_produk_id = 2;
END$$
DELIMITER ;

-- showProdukElektronik(id) diubah ke produk mie
DELIMITER $$ 
CREATE PROCEDURE  showProdukMie(kategori_produk_id INT)
BEGIN 
SELECT * FROM produk WHERE kategori_produk_id = 1;
END$$
DELIMITER ;
CALL showProdukMie(2);
-- buat trigger:
-- kurangiStok() => saat pelanggan memesan produk
DELIMITER $$
CREATE TRIGGER kurangiStok 
AFTER INSERT ON pesanan
FOR EACH ROW
BEGIN
UPDATE produk SET stok = stok - NEW.jumlah WHERE id = NEW.produk_id;
END$$
DELIMITER ;
-- normalisasiStok() => saat pelanggan membatalkan pesanan produk   
DELIMITER $$
CREATE TRIGGER normalisasiStok 
AFTER DELETE ON pesanan
FOR EACH ROW
BEGIN
UPDATE produk SET stok = stok + OLD.jumlah WHERE id = OLD.produk_id;
END$$
DELIMITER ;