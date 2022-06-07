function cetak() {
    //tangkap element2 form
    let form = window.document.getElementById("formulir");
    let nam = form.nama.value;
    let jml = form.jumlah.value;
    let brg = form.produk.value;

    let harga, hator,diskon,ppn,total;
    //mengubah format menjadi format uang indos
    let rupiah = Intl.NumberFormat("id-ID");

    //menentukan harga barang
    switch (brg) {
        case "TV" : harga = 2000000; break;
        case "AC" : harga = 3000000; break;
        case "Kulkas" : harga = 4000000; break;
        default : harga = "";
    }
    //menghitung harga kotor
    hator = harga*jml 
    //menghitung diskon
    if (brg == "kulkas" && jml >=3)diskon = hator * 0.3;
    else if (brg == "AC" && jml >=3)diskon = hator * 0.2;
    else diskon = hator * 0.1;
    //menghitung ppn
    ppn = (hator - diskon)*0.1;
    //menghitung Total Bayar
    total = (hator - diskon)+ppn;
    //cetak di alerting
    alert(
        "Nama :" + nam +
        "\n Produk: " + brg + 
        "\n Harga Satuan : Rp. " + rupiah.format(harga) +
        "\n Jumlah Barang : " + jml+
        "\n Harga Kotor : Rp. "+rupiah.format(hator)+
        "\n Diskon : Rp. "+rupiah.format(diskon)+
        "\n PPN : Rp. "+rupiah.format(ppn)+
        "\n Total Harga Bayar : Rp. "+rupiah.format(total));
}