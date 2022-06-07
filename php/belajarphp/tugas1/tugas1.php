<?php
//diketahui
$namaPegawai = 'Ahmad Sopandi';
$agama = 'Islam'; // agama di indonesia
$jabatan = 'Manager'; // Manager, Asisten, Kabag, Staff
$status = 'Menikah'; // Menikah atau Belum
$jmlAnak = 4;
/*
1. tentukan gaji pokok (switch case)
Jika Manager = 20jt, Asisten = 15jt, Kabag = 10jt, Staff = 4jt
2. tentukan tunjangan jabatan = 20% dari gaji pokok
3. tentukan tunjangan keluarga (if multi kondisi):
   jika sudah menikah dan anak maksimal 2 = 5% dari gapok
   jika sudah menikah dan anak antara 3 - 5 = 10% dari gapok
   selain itu belum dapat tunjangan keluarga
4. tentukan gaji kotor
5. tentukan zakat_profesi (ternary)
   jika ia muslim dan gaji kotor minimal 6 juta, ada zakat = 2.5% dari gaji kotor. Selain itu tidak ada zakat
6. Tentukan take home pay 

Cetaklah populasi data di atas
*/