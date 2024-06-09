<?php
$arrBuah = array("Mangga", "Apel", "Pisang", "Jeruk");
echo $arrBuah[0] . "<br>";
echo $arrBuah[3] . "<br><br>";

$arrWarna = array();
$arrWarna[] = "Merah";
$arrWarna[] = "Biru";
$arrWarna[] = "Hijau";
$arrWarna[] = "Putih";
echo $arrWarna[0] . "<br>";
echo $arrWarna[2] . "<br><br>";
?>

<?php
   $arrNilai = array("Fulan" => 80, "Fulin" => 90, "Fulun" => 75, "Falan" => 85);
   echo $arrNilai['Fulan']."<br>";
   echo $arrNilai['Fulin']."<br><br>";

   $arrNilai = array();
   $arrNilai['Amin'] = 80;
   $arrNilai['Aman'] = 95;
   $arrNilai['Amen'] = 77;
   echo $arrNilai['Aman']."<br>";
   echo $arrNilai['Amin']."<br>";
?>

<?php
   $arrWarna = array("Red", "Orange", "Purple", "Green", "Blue", "Pink");
   echo "Menampilkan isi array dengan FOR: <br>";
   for($i = 0; $i < count($arrWarna); $i++){
      echo "Warna pelangi <font color = $arrWarna[$i]>".$arrWarna[$i]."</font><br>";
   }
      
   echo "<br>Menampilkan isi array dengan FOREACH: <br>";
   foreach ($arrWarna as $warna) {
      echo "Warna pelangi <font color = $warna>".$warna."</font><br>";
   }
?>

<?php
   $arrNilai = array("Fulan" => 80, "Fulin" => 90, "Fulun" => 75, "Falan" => 85);
   echo "Menampilkan isi array asosiatif dengan foreach: <br>";
   foreach ($arrNilai as $nama => $nilai){
      echo "Nilai $nama = $nilai <br>";
      }
      
   reset($arrNilai);
   echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST: <br>";
   while(list($nama, $nilai) = each($arrNilai)){
      echo "Nilai $nama = $nilai <br>";
   }
?>

<?php
   $arrWarna = array("Blue", "Black", "Red", "Yellow", "Pink");
   $arrNilai = array("Fulan" => 80, "Fulin" => 90, "Fulun" => 75, "Falan" => 85);
   echo "<pre>";
   print_r($arrWarna);
   echo "<br>";
   print_r($arrNilai);
   echo "</pre>";
?>

<?php
// Mengurutkan array dengan sort() dan rsort()
   $arrNilai = array("Fulan" => 80, "Fulin" => 90, "Fulun" => 75, "Falan" => 85);
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
   $arrNilai = array("Fulan" => 80, "Fulin" => 90, "Fulun" => 75, "Falan" => 85);
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
   $arrNilai = array("Fulan" => 80, "Fulin" => 90, "Fulun" => 75, "Falan" => 85);
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
// Mengatur Posisi Pointer dalam Array
   $transport = array("Jalan Kaki", "Pit Onthel", "Montor", "Montor Mabur");
   echo "<pre>";
   print_r($transport);
   echo "</pre>";
   $mode = current($transport);
   echo $mode."<br>";
   $mode = next($transport);
   echo $mode."<br>";
   $mode = current($transport);
   echo $mode."<br>";
   $mode = prev($transport);
   echo $mode."<br>";
   $mode = end($transport);
   echo $mode."<br>";
   $mode = current($transport);
   echo $mode."<br>";
?>

<?php
// Mencari elemen array
   $arrBuah = array("Mangga", "Apel", "Pisang", "Jeruk", "Kedondong");
   if(in_array("Kedondong", $arrBuah)){
      echo "Ada buah Kedondong di dalam array tersebut!<br>";
   }else{
      echo "Tidak ada buah Kedondong di dalam array tersebut!<br>";
   }
?>

<?php
   function cetak_ganjilA(){
      for($i = 0; $i < 100; $i++){
         if($i % 2 == 1){
            echo "$i, ";
         }
      }
   }

   cetak_ganjilA();
   echo "<br>";
?>

<?php
   function cetak_ganjilB($awal, $akhir){
      for($i = $awal; $i < $akhir; $i++){
         if($i % 2 == 1){
            echo "$i, ";
         }
      }
   }

   $a = 10;
   $b = 50;
   echo "<b>Bilangan ganjil dari $a sampai $b, adalah: </b><br>";
   cetak_ganjilB($a, $b);
   echo "<br>";
?>

<?php
   function luas_lingkaran($jari){
      return 3.14 * $jari * $jari;
   }

   $r = 10;
   echo "Luas Lingkaran dengan jari-jari $r = ";
   echo luas_lingkaran($r);
?>

<?php
   function tambah_string($str){
      $str = $str. ", Yogyakarta";
      return $str;
   }

   $string = "Universitas Ahmad Dahlan";
   echo "<br>";
   echo "\$string = $string<br>";
   echo tambah_string($string)."<br>";
   echo "\$string = $string<br>";
?>

<?php
   function luas_lingkaranA($jari)
   {
      return 3.14 * $jari * $jari;
   }

   $arr = get_defined_functions();
   echo "<pre>";
   print_r($arr);
   echo "</pre>";
?>