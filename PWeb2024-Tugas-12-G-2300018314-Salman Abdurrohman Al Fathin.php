<?php
   echo "<b>Array Dasar:</b><br>";
   $arrHewan = array("Kucing", "Unta", "Kambing", "Rusa");
   echo $arrHewan[0] . "<br>";
   echo $arrHewan[3] . "<br><br>";

   $arrOrgan = array();
   $arrOrgan[] = "Kepala";
   $arrOrgan[] = "Badan";
   $arrOrgan[] = "Tangan";
   $arrOrgan[] = "Kaki";
   echo $arrOrgan[0] . "<br>";
   echo $arrOrgan[2] . "<br><br>";
?>

<?php
   echo "<b>Array Asosiatif:</b><br>";
   $arrNim = array("Maman" => 314, "Syalsa" => 324, "Jarwo" => 276, "Yanti" => 204);
   echo $arrNim['Maman']."<br>";
   echo $arrNim['Syalsa']."<br><br>";

   $arrNim = array();
   $arrNim['Amin'] = 280;
   $arrNim['Agus'] = 295;
   $arrNim['Tukimin'] = 277;
   echo $arrNim['Amin']."<br>";
   echo $arrNim['Agus']."<br><br>";
?>

<?php
   $arrWarna = array("Red", "Orange", "Purple", "Green", "Blue", "Pink");
   echo "<b>Menampilkan isi array dasar dengan FOR:</b><br>";
   for($i = 0; $i < count($arrWarna); $i++){
      echo "Nama warna: <font color = $arrWarna[$i]>".$arrWarna[$i]."</font><br>";
   }

   echo "<br>";
   
   echo "<b>Menampilkan isi array dasar dengan FOREACH:</b> <br>";
   foreach ($arrWarna as $warna) {
      echo "Nama warna: <font color = $warna>".$warna."</font><br>";
   }
   echo "<br>";
?>

<?php
   $arrNim = array("Maman" => 314, "Syalsa" => 324, "Jarwo" => 276, "Yanti" => 204);
   echo "<b>Menampilkan isi array ASOSIATIF dengan FOREACH:</b><br>";
   foreach ($arrNim as $nama => $nim){
   echo "NIM $nama = $nim <br>";
   }
   echo "<br>";
   
   //->FUNGSI TIDAK KOMPATIBEL
   // echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST: <br>";
   // reset($arrNim);
   // while(list($nama, $nim) = each($arrNim)){
   //    echo "NIM $nama = $nim <br>";
   // }

   echo "<b>Menampilkan isi array ASOSIATIF dengan WHILE:</b> <br>";
   reset($arrNim); // reset pointer array
   while ($nama = key($arrNim)) {
      $nim = current($arrNim);
      echo "NIM $nama = $nim <br>";
      next($arrNim); // Geser pointer ke elemen selanjutnya
   }
?>

<?php
   echo "<br>";
   echo "<b>Menampilkan array dengan `print_r` khusus array:</b>";
   $arrWarna = array("Blue", "Black", "Red", "Yellow", "Pink");
   $arrNim = array("Maman" => 314, "Syalsa" => 324, "Jarwo" => 276, "Yanti" => 204);
   echo "<pre>";
   print_r($arrWarna);
   echo "<br>";
   print_r($arrNim);
   echo "</pre>";
?>

<?php
// Mengurutkan array dengan sort() dan rsort()
   $arrNilai = array("Maman" => 314, "Syalsa" => 324, "Jarwo" => 276, "Yanti" => 204);
   echo "<b>Array sebelum diurutkan</b>";
   echo "<pre>";
   print_r($arrNilai);
   echo "</pre>";

   sort($arrNilai);
   reset($arrNilai);
   echo "<b>Array setelah diurutkan dengan sort()</b>";
   echo "<pre>";
   print_r($arrNilai);
   echo "</pre>";

   rsort($arrNilai);
   reset($arrNilai);
   echo "<b>Array setelah diurutkan dengan rsort()</b>";
   echo "<pre>";
   print_r($arrNilai);
   echo "</pre>";
?>

<?php
// Mengurutkan array dengan asort() dan arsort()
   $arrNilai = array("Maman" => 314, "Syalsa" => 324, "Jarwo" => 276, "Yanti" => 204);
   echo "<b>Array sebelum diurutkan</b>";
   echo "<pre>";
   print_r($arrNilai);
   echo "</pre>";

   asort($arrNilai);
   reset($arrNilai);
   echo "<b>Array setelah diurutkan dengan asort()</b>";
   echo "<pre>";
   print_r($arrNilai);
   echo "</pre>";

   arsort($arrNilai);
   reset($arrNilai);
   echo "<b>Array setelah diurutkan dengan arsort()</b>";
   echo "<pre>";
   print_r($arrNilai);
   echo "</pre>";
?>

<?php
// Mengurutkan array dengan ksort() dan krsort()
   $arrNilai = array("Maman" => 314, "Syalsa" => 324, "Jarwo" => 276, "Yanti" => 204);
   echo "<b>Array sebelum diurutkan</b>";
   echo "<pre>";
   print_r($arrNilai);
   echo "</pre>";

   ksort($arrNilai);
   reset($arrNilai);
   echo "<b>Array setelah diurutkan dengan ksort()</b>";
   echo "<pre>";
   print_r($arrNilai);
   echo "</pre>";

   krsort($arrNilai);
   reset($arrNilai);
   echo "<b>Array setelah diurutkan dengan krsort()</b>";
   echo "<pre>";
   print_r($arrNilai);
   echo "</pre>";
?>

<?php
   echo "<b>Memainkan Posisi Pointer dalam Array:</b>";
// Mengatur Posisi Pointer dalam Array
   $negara = array("Indonesia", "Arab Saudi", "Amerika", "Russia");
   echo "<pre>";
   print_r($negara);
   echo "</pre>";

   echo "<b>Beberapa mode geser pointer:</b><br>";
   $mode = current($negara);
   echo "current: " . $mode."<br>";
   $mode = next($negara);
   echo "next:" . $mode."<br>";
   $mode = current($negara);
   echo "current: " . $mode."<br>";
   $mode = prev($negara);
   echo "previous: " . $mode."<br>";
   $mode = end($negara);
   echo "end: " . $mode."<br>";
   $mode = current($negara);
   echo "current: " . $mode."<br>";
   echo "<br>";
?>

<?php
   echo "<b>Mencari elemen dengan alur kontrol:</b><br>";
// Mencari elemen array
   $arrOrgan = array("Kepala", "Badan", "Tangan", "kaki");
   if(in_array("Tangan", $arrOrgan)){
      echo "Ada organ Tangan di dalam array tersebut!<br>";
   }else{
      echo "Tidak ada organ Tangan di dalam array tersebut!<br>";
   }
   echo "<br>";
?>

<?php
   echo "<b>Fungsi UDF (Mencetak bil Prima):</b><br>";
   function prima($n)
   {
      if ($n <= 1){
         return false;
      }
      for ($i = 2; $i <= sqrt($n); $i++) {
         if ($n % $i == 0){
         return false;
         }
      }
      return true;
   }

   for ($i = 1; $i <= 100; $i++) {
      if (prima($i)){
         echo $i . ", ";
      }
   }
   echo "<br><br>";
?>

<?php
   function primaRentang($awal, $akhir){
      for ($i = $awal; $i <= $akhir; $i++) {
         if (prima($i)) {
            echo $i . ", ";
         }
      }
   }
   $a = 10;
   $b = 50;
   echo "<b>Bilangan prima dari $a sampai $b, adalah: </b><br>";
   primaRentang($a, $b);
   echo "<br><br>";
?>

<?php
   echo "<b>Fungsi hitung volume: </b><br>";
   function volumeKubus($sisi){
      return $sisi * $sisi * $sisi;
   }
   
   $s = 10;
   echo "Volume kubus dengan panjang rusuk $s = ";
   echo volumeKubus($s);
   echo "<br><br>";
?>

<?php
   echo "<b>Fungsi tambah string: </b><br>";
   function tambah_string($str){
      $str = $str. "Yogyakarta";
      return $str;
   }

   $string = "Daerah Istimewa ";
   echo "\$string = $string<br>";
   echo tambah_string($string)."<br>";
   echo "\$string = $string<br>";
   echo "<br><br>";
?>

<?php
   echo "<b>Menampilkan fungsi PHP: </b><br>";
   $arr = get_defined_functions();
   echo "<pre>";
   print_r($arr);
   echo "</pre>";
?>

<?php
   echo "<b>Memeriksa status fungsi buatan: </b><br>";
   // Memeriksa apakah fungsi prima() ada dalam kumpulan fungsi
   $listFungsi = get_defined_functions();
   foreach ($listFungsi['user'] as $namaFungsi) {
      if ($namaFungsi == 'prima') {
         echo "Fungsi `prima()` ada dalam kumpulan fungsi.\n";
         break;
      }
   }
?>