<?php
ini_set("display_errors",0);
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="setting3.css">
    <title>Layout Operator</title>
</head>
<body>
    <div id="container"></div>
    <nav>
        <div class="nav-desc">
            <div class="logo">
                <img src="aset/logo.png" class="featured-image" />
            </div>
            <div class="stasiun">
                OPERATOR STASIUN PURWOKERTO
            </div>
        </div>
        
        <div class="nav-time">
        <?php
        function hariIndo ($hariInggris) {
            switch ($hariInggris) {
                case 'Sunday': return 'Minggu';
                case 'Monday': return 'Senin';
                case 'Tuesday': return 'Selasa';
                case 'Wednesday': return 'Rabu';
                case 'Thursday': return 'Kamis';
                case 'Friday': return 'Jumat';
                case 'Saturday': return 'Sabtu';
                default: return 'hari tidak valid';
            }
        }
        ?>
        
        <?php
        date_default_timezone_set("Asia/jakarta"); 
        $hariBahasaInggris = date('l');
        $hariBahasaIndonesia = hariIndo($hariBahasaInggris);
        echo "<span class='jam'>{$hariBahasaIndonesia}</span>";
        ?>
         
        <br/> 
        <span style='padding-right: 20px;' class="jam"> <?php echo date('d-m-Y'); ?></span>
        <br/> 
        <span id="jam" class="jam" style='padding-right: 20px;'></span>
        <script type="text/javascript">
            window.onload = function() { jam(); }
        
            function jam() {
                var e = document.getElementById('jam'),
                d = new Date(), h, m, s;
                h = d.getHours();
                m = set(d.getMinutes());
                s = set(d.getSeconds());
        
                e.innerHTML = h +':'+ m +':'+ s;
        
                setTimeout('jam()', 1000);
            }
        
            function set(e) {
                e = e < 10 ? '0'+ e : e;
                return e;
            }
        </script>
    
        </div>
    </nav>

    <hr>
    <div class="link">
                <a href="view.php" class="tombol-link">Halaman Peron</a> 
    </div>

    <div class="konten">
        <h2>Tabel Pemilihan</h2>
        <hr>
    <?php
    include "koneksi.php";
    include "prosesupdate.php";
    include "prosesdeleteinput.php";
    ?>    
        <form action='<?php $_SERVER['PHP_SELF']; ?>' name='update' method='post' enctype='multipart/form-data'>
            <table class="table-form" width="98%" cellpadding="5" cellspacing="0" align='center'>
                <tr>
                    <th width="5%">Jalur</th>
                    <th width="10%">Input No KA</th>
                    <th width="10%">Aksi</th>
                    <th width="10%">No KA</th>
                    <th width="35%">Nama KA</th>
                    <th width="10%">Relasi</th>
                    <th width="10%">Keberangkatan</th>
                    <th width="10%">Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><input type="text" name="jalurka1" class="upper"></td>
                    <td><input type="submit" name="update1" value="Simpan" class="tombol-link"></td>
                    <td><?php echo $row1['no_ka']; ?></td>
                        <td><?php echo $row1['nama_ka']; ?></td>
                        <td><?php echo $row1['tujuan']; ?></td>
                        <td><?php echo $row1['jam_berangkat']; ?></td>
                        <td><input type="submit" name="delete1" onclick="return confirm('Yakin Hapus?')" value="Hapus" class="tombol-hapus"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="text" name="jalurka2" class="upper"></td>
                    <td><input type="submit" name="update2" value="Simpan" class="tombol-link"></td>
                    <td><?php echo $row2['no_ka']; ?></td>
                        <td><?php echo $row2['nama_ka']; ?></td>
                        <td><?php echo $row2['tujuan']; ?></td>
                        <td><?php echo $row2['jam_berangkat']; ?></td>
                        <td><input type="submit" name="delete2" onclick="return confirm('Yakin Hapus?')" value="Hapus" class="tombol-hapus"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input type="text" name="jalurka3" class="upper"></td>
                    <td><input type="submit" name="update3" value="Simpan" class="tombol-link"></td>
                    <td><?php echo $row3['no_ka']; ?></td>
                        <td><?php echo $row3['nama_ka']; ?></td>
                        <td><?php echo $row3['tujuan']; ?></td>
                        <td><?php echo $row3['jam_berangkat']; ?></td>
                        <td><input type="submit" name="delete3" onclick="return confirm('Yakin Hapus?')" value="Hapus" class="tombol-hapus"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><input type="text" name="jalurka4" class="upper"></td>
                    <td><input type="submit" name="update4" value="Simpan" class="tombol-link"></td>
                    <td><?php echo $row4['no_ka']; ?></td>
                        <td><?php echo $row4['nama_ka']; ?></td>
                        <td><?php echo $row4['tujuan']; ?></td>
                        <td><?php echo $row4['jam_berangkat']; ?></td>
                        <td><input type="submit" name="delete4" onclick="return confirm('Yakin Hapus?')" value="Hapus" class="tombol-hapus"></td>
                <tr>
                    <td>5</td>
                    <td><input type="text" name="jalurka5" class="upper"></td>
                    <td><input type="submit" name="update5" value="Simpan" class="tombol-link"></td>
                    <td><?php echo $row5['no_ka']; ?></td>
                        <td><?php echo $row5['nama_ka']; ?></td>
                        <td><?php echo $row5['tujuan']; ?></td>
                        <td><?php echo $row5['jam_berangkat']; ?></td>
                        <td><input type="submit" name="delete5" onclick="return confirm('Yakin Hapus?')" value="Hapus" class="tombol-hapus"></td>
                </tr>   
            </table>          
        </form>
    </div>

    <h2>Tabel Data Perjalanan KA</h2>
        <hr>
    <?php

        $koneksi = mysqli_connect("localhost","root","","kai_db");

        if(isset($_POST['hapussemua'])){
                $hapus = "DELETE FROM departure";
                $query = mysqli_query($koneksi, $hapus);
                if($query){
                    ?>
                    <script>
                        alert("Semua Data Berhasil di Hapus");
                        document.location.href = "operator.php";
                    </script>
                    <?php
                }
        }

        if(isset($_GET["cari"])){
            $daftardata = $_GET["cari"];
            $search = "SELECT * FROM departure 
                WHERE  no_ka LIKE '%".$daftardata."%' OR
                        nama_ka LIKE '%".$daftardata."%' OR 
                        relasi LIKE '%$".$daftardata."%'";				
                }else{
                    $search = "SELECT * FROM departure ORDER BY purwokerto_berangkat";		
        }
    ?>
    <div>
        <div class="search">
            <form action="operator.php" method="get">
                    <input type="text" name="cari" id="search" for="search" width="5%" size="40" class="upper" autofocus>
                    <button class="tombol-link" type="submit" name="caridata" autocomplete="off" id="search"> Search</button>
            </form>
        </div>

        <div class="side-link">
            <div class="import">
                <form method="post" enctype="multipart/form-data" action="modif-data\excel.php">
                    Pilih File: <span class="samar"> (tipe .xls) </span>
                    <input class="form-control" name="fileexcel" type="file" required="required" value="Masukkan File tipe .xls">
                        <br>
                    <button type="submit" name='simpan' class="tombol-link">Submit</button>
                </form>
            </div>
                                
            <form action="" method="post">
                <a href="modif-data\tambah.php">
                   <button href="modif-data\tambah.php" type="button" class="tombol-tambah " name="tambah">Tambah Data</button>
                </a> 
                <a>
                    <input type="submit" name="hapussemua" onclick="return confirm('Yakin Hapus Semua Data?')" value="Hapus Semua" class="tombol-hapus ">
                 </a>
            </form>
        </div>


        <table class="table-jadwal" width="75%" cellpadding="9" cellspacing="0">
        <thead>
            <tr>
                <th >No</th>
                <th >No. KA</th>
                <th >Nama KA</th>
                <th >Relasi</th>
                <th >Jalur</th>
                <th >Datang</th>
                <th >Berangkat</th>
                <th >Stamformasi</th>
                <th >Keterangan</th>
                <th >Aksi</th>
            </tr>
        </thead>    
        <tbody>

        <?php
        // membuat koneksi ke database 
        $koneksi = mysqli_connect("localhost", "root", "", "kai_db");
                
        //membuat variabel angka
        $no = 1;
                
        //mengambil data dari tabel barang
        $select         = mysqli_query($koneksi, "SELECT * FROM departure ORDER BY purwokerto_berangkat");
        $searchdata = mysqli_query($koneksi, $search);
                
        //melooping(perulangan) dengan menggunakan while
        $no = 1;
        while($data= mysqli_fetch_array($searchdata)) :
        ?>
            <tr>
            <!-- menampilkan data dengan menggunakan array  -->
                <td width="5%"><?php echo $no++ ?></td>
                <td width="5%"><?php echo $data['no_ka']; ?></td>
                <td width="25%"><?php echo $data['nama_ka']; ?></td>
                <td width="10%"><?php echo $data['relasi']; ?></td>
                <td width="5%"><?php echo $data['jumlah']; ?></td>
                <td width="10%"><?php echo $data['purwokerto_datang']; ?></td>
                <td width="10%"><?php echo $data['purwokerto_berangkat']; ?></td>
                <td width="10%"><?php echo $data['stamformasi']; ?></td>
                <td width="5%"><?php echo $data['keterangan']; ?></td>
                <td width="15%">

                    <a href="modif-data\delete.php?id=<?php echo $data["id"];?>" onclick="return confirm('Yakin Hapus?')" class="tombol-hapus"  href="#">
                        <img src="aset\trash.svg" alt="">
                    </a>
                    <br> <br>
                    <a href="modif-data\update.php?id=<?php echo $data['id']?>" class="tombol-link" > 
                    <img src="aset/pencil-square.svg" alt="">
                    </a>
                </td>
            </tr>

        <?php endwhile; ?>
        
        </tbody>
        </table>
    </div>
</body>
</html>