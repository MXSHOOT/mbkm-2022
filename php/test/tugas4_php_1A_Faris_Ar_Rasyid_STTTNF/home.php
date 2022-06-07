<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Belajar CSS Eksternal</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="icon" href="icon/home.gif" type="image/x-icon">
    </head>    
    <body> 
        <h1>
        <marquee direction="left" scrolldelay="100">
            Selamat Datang di Blog Saya
        </marquee>    
        </h1>
        <hr/>
        <br/>
        <nav id="menu">
            <a href="" class="active">home</a>
            <a href="logout.php">logout</a>
        </nav> 
        <br/>   
        <hr/>
        <hr/>
            <!-- Awal Profile-->
            <fieldset>
                <legend>
                    <h2>
                        Profile <!-- Judul -->
                    </h2>
                </legend>   
                <img src="https://avatars.githubusercontent.com/u/48386460?v=4" /> 
                <p class="has-dropcap"> <!-- Paraqraf 1-->
                    Hai! perkenalkan nama saya Faris Ar Rasyid, saya seorang manusia. saya paham ini apasih maksudnya manusia, biar kujelaskan, jadi manusia itu merupakan mahkluk yang memiliki ciri khusus yaitu bergerak dengan berfikir dan memiliki kecerdasan yang luar biasa dari mahkluk lainnya. ada yang berkata manusia adalah mahkluk sempurna yang disebabkan karena manusia merupakan satu-satunya mahkluk yang menduduki paling atas dibumi jadi wajar ada asumsi berikut, ini terjadi karena proses pikir manusia yang mengganggap demikian dari keyakinan ini manusia tidaklah memikirkan keras apa yang ia tidak ketahui <span class="point">dibuat</span> tahu. alasannya mengapa? akan terjawab di paragraf berikut. 
                </p>
            </fieldset>
            <!-- Akhir Profile-->
            <h2>
                <u>Mengapa?</u>
            </h2>
            <p><!-- Paraqraf 2-->
            <b>
                <i>
                    Dari aspek materi
                </i>
            </b>
            <br/>
                Manusia takut adanya hantu,<span class="point"> monster</span> atau hal yang mengancam. ini terjadi karena tubuh manusia sensitif terhadap ancaman, bukan hanya manusia hewan pun atau tumbuhan juga sama tetapi yang membedakan tingkat sensitif tersebut. jadi alasan mengapa takut? itu disebabkan dari tubuh manusia itu sendiri yang memiliki sistem rasa harus pergi. ini terjadi bukan karena hantu atau monster lewat, manusia biasa pun juga manusia akan lari sebagai contoh penagih hutang. sebagian manusia akan melarikan diri mereka ketika penagih hutang mehampirinya atau bisa saja merespon hal lain yaitu melawan. ini bisa terjadi jika manusia memiliki namanya pengalaman atau pengetahuan, seperti halnya hantu atau monster. jika manusia mengetahui cara mengatasinya ia akan mengatasinya jadi intinya rasa takut adalah rasa ketidak tahuan. jadi jangan lah takut, belajar setinggi-tingginya agar suatu saat jika ada tantangan tidak perlu takut karena tau pasti bisa.
            <br/>
            <br/>   
            <b>
                <i>
                    Dari aspek perasaan
                </i>
            </b>
            <br/>
                Manusia memiliki indra kepekaan yang cukup baik, dari pekaan tersebut manusia akan  memiliki rasa <span class="point">apakah perlu pergi atau tidak</span>. beberapa orang tidak takut karena ia tidak memiliki perasaan sebagai contoh seorang psikopat, alasannya disebabkan seorang psikopat ini tidak merasakan namanya kemanusiaan atau tidak takut akan orang lain. jadi perasaan tersebut bisa menjadi salah satu faktor yang dapat merusak seseorang, perasaan ini bisa dihilangkan dengan namanya pengetahuan. ketidak pengetahuan bisa meng<span class="point">akibat</span>kan kesalahan yaitu tidak perasaan atau bisa dikatakan sesat, hal ini sering terjadi kebanyakan konflik yang sudah-sudah terjadi. manusia perlu memahami rasa perasaan dengan cara memahami dan memikirkan seseorang baik orang lain, tumbuhan atau hewan. dari rasa tersebut akan menyimpan perasaan terhadap objek atau sesuatu yang membuat ada rasa terhadap sesuatu yang membuat tidak menjadi tersesat kedalam lubang dalam.   
            </p>
            <h2>
                Imajinasi
            </h2>
            <p><!-- Paraqraf 3-->
                Dalam kasus imajinasi, imajinasi merupakan visual sesuatu yang terbuat dari <span class="point">pikiran</span>. imajinasi tersebut bisa membuat lapisan yang membuat manusia akan terjebak didalam imajinasi atau pikiran diri sendiri, hal ini menyebabkan koma terhadap seseorang yang hanya dapat membantu hanyalah dorongan. ada yang cukup berbahaya untuk mendorong kesadaran manusia antara lain dengan cara menggerakan atau menyambungan hubungan yang terhubutus atau memberikan akses kesadaran manusia yang terkena koma tetapi resiko dari cara tersebut dapat menyebabkan kerusakan terhadap pasien disebabkan ada kemungkinan memperburuk isi didalam manusia atau menimpulkan cacat yang diman bukannya kesadaran yang bergerak keluar tetapi memindahkan hal lain yang disebut ketidak adaan ini membuat kesadaran yang seharusnya bergerak menjadi tidak aktif. cara yang beresiko ini memang cepat tetapi sangat berbahaya dan memungkinkannya cukup kecil oleh sebab itu biasanya hanya satu cara yang digunakan yaitu berharap dengan terus memberikan memory ke pasien. ini dapat efektif karena manusia akan menyimpan memory baik melihat, mencium, mendengar ataupun menyentuh. jadi manusia yang terkena koma dan tersadar disebabkan memory yang terputus terhubung kembali dari memory yang masuk yaitu ingatan yang bisa saja ingatan buruk atau baik (kebanyakan adalah ingatan baik). dari ingatan tersebut akan menimpa ingatan yang rusak dan terbentuk kembali dan terbangun kembali, manusia itu sama hal seperti sistem komputer. manusia akan bergerak oleh ikatan yang akan bergerak sesuai dari otak atau pusat dari semua yang ada ditubuh, oleh karena itu otak ini akan menjadi peran yang sangat penting. ada beberapa yang cukup membantu memahami tentang pikiran dalam yaitu :  
                <ul type="square">
                    <li><a href="https://en.wikipedia.org/wiki/False_awakening"><strong>False awakening</strong></a>, Kebangkitan palsu adalah mimpi yang jelas dan meyakinkan tentang bangun dari tidur, sedangkan si pemimpi pada kenyataannya terus tidur. Setelah terbangun palsu, subjek sering bermimpi bahwa mereka melakukan rutinitas pagi setiap hari seperti mandi, memasak, membersihkan, makan, dan menggunakan kamar mandi. <span class="point">Kebangkitan</span> palsu, terutama di mana seseorang bermimpi bahwa mereka telah terbangun dari tidur yang menampilkan mimpi, mengambil aspek mimpi ganda atau mimpi di dalam mimpi. Sebuah contoh klasik adalah kebangkitan palsu ganda dari protagonis dalam Potret Gogol (1835).</li>
                    <li><a href="https://id.wikipedia.org/wiki/DeepDream"><b>DeepDream</b></a>,program penglihatan komputer yang dibuat oleh insinyur Google, Alexander Mordvintsev menggunakan jaringan saraf tiruan convolutional. Program ini memanfaatkan jaringan saraf tiruan untuk menemukan dan meningkatkan pola dalam gambar melalui pareidolia algoritmik, sehingga menciptakan tampilan halusinogenik mirip mimpi seperti dalam gambar yang diproses secara berlebihan.</li>
                    <li><a href="https://en.wikipedia.org/wiki/Lucid_dream"><b>Lucid dream</b></a>, jenis mimpi di mana si pemimpi menjadi sadar bahwa mereka sedang bermimpi. Selama lucid dream, si pemimpi dapat memperoleh sejumlah kendali atas karakter, narasi, atau lingkungan mimpi; Namun, ini sebenarnya tidak perlu untuk mimpi digambarkan sebagai jernih.</li>  
                </ul>
            </p>
            <!-- Awal list-->
            <h2>Paket Kursus</h2>
            <ol class="pendidikan">
                <li>Social Media
                    <ol class="sc">
                        <li>Github
                            <ul class="github">
                                <li>MXSHOOT</li>
                            </ul>    
                        </li>
                        <li>Instagram
                            <ul class="ig">
                                <li>faris.arrasyid</li>
                            </ul>
                        </li>
                    </ol>
                </li>        
                <li>Pendidikan
                    <ol class="sco">
                        <li>SMK Walisongo Jakarta</li>
                        <li>Politeknik Negeri Jakarta (D1)</li>
                        <li>Sekolah Tinggi Terpadu Nurul Fikri (S1)</li>
                    </ol>    
                </li>
            </ol>
            <!-- Akhir List-->
            <h3>Pendidikan</h3>
            <table id="pen"> <!-- Awal Table-->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pendidikan</th>
                        <th>Jurusan</th>
                        <th>Gelar</th>
                    </tr>    
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sekolah Tinggi Terpadu Nurul Fikri</td>
                        <td>Teknik Informatika</td>
                        <td>S1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Politeknik Negeri Jakarta</td>
                        <td>Teknik Komputer dan Jaringan</td>
                        <td>D1</td>
                    </tr> 
                    <tr>
                        <td>3</td>
                        <td>SMK Walisongo Jakarta</td>
                        <td>Teknik Komputer dan Jaringan</td>
                        <td>Lulusan SMK</td>
                    </tr>   
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4">Data akan berubah jika saya kuliah lagi</th>
                    </tr>    
                </tfoot>            
            </table>  <!-- Akhir Table-->
    </body>
</html>        