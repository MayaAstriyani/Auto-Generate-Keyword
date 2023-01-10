<?php
$zip = new ZipArchive();
$filename = "hasil.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}
header('Content-Type: text');

if (isset($_POST['submit'])) {
  // mengambil data
    $kkulb          = $_POST['kata_ulb'];
    $kata_bombas    = $_POST['kata_bombas'];
    $nomor          = $_POST['nomor'];
    $kkgci1         = $_POST['katakunci1'];
    $kkgci2         = $_FILES["katakunci2"]["tmp_name"];
    $kataspes1      = $_POST['kataspesifik1'];
    $kataspes2      = $_FILES['kataspesifik2']["tmp_name"];
    $tags1          = $_POST["tags1"];
    $tags2          = $_FILES["tags2"]["tmp_name"];


    if (isset($_POST['username'])) {
      $file_csv_username="";
      $num=0;
      if ($kkgci2 == '') {
        foreach ($kkulb as $vkkulb) {
          foreach(prosesCsv($kkgci1,0,0,1) as $vkkgci1){
            $num++;
            $file_csv_username.=$num.",".'"'.$vkkulb.' '.$vkkgci1.'"'."\r\n";
          }
        }
      } else{
        foreach ($kkulb as $vkkulb) {
          foreach(prosesCsv($kkgci2) as $vkkgci2){
            $num++;
            $file_csv_username.=$num.",".'"'.$vkkulb.' '.$vkkgci2.'"'."\r\n";
          }
        }
      }
      $zip->addFromString("username.csv", $file_csv_username);
       // echo $file_csv_username;
    }

    if (isset($_POST['title'])) {
      $file_csv_title="";
      $num=0;
      if ($kkgci2 == '' && $kataspes2 == '') {
        foreach ($kata_bombas as $vkata_bombas) {
          foreach(prosesCsv($kkgci1,0,0,1) as $vkkgci1){
            foreach(prosesCsv($kataspes1,0,0,1) as $vkataspes1){
              $num++;
              $file_csv_title.=$num.",".'"'.$vkata_bombas.' '.$nomor.",".' '.$vkkgci1.' '.$vkataspes1.'"'."\r\n";
            }
          }
        }
      } elseif ($kkgci2 != '' && $kataspes2 != '') {
        foreach ($kata_bombas as $vkata_bombas) {
          foreach(prosesCsv($kkgci2) as $vkkgci2){
            foreach(prosesCsv($kataspes2) as $vkataspes2){
              $num++;
              $file_csv_title.=$num.",".'"'.$vkata_bombas.' '.$nomor.",".' '.$vkkgci2.' '.$vkataspes2.'"'."\r\n";
            }
          }
        }
      } elseif ($kkgci2 != '' && $kataspes2 == '') {
        foreach ($kata_bombas as $vkata_bombas) {
          foreach(prosesCsv($kkgci2) as $vkkgci2){
            foreach(prosesCsv($kataspes1,0,0,1) as $vkataspes1){
              $num++;
              $file_csv_title.=$num.",".'"'.$vkata_bombas.' '.$nomor.",".' '.$vkkgci2.' '.$vkataspes1.'"'."\r\n";
            }
          }
        }
      } elseif ($kkgci2 == '' && $kataspes2 != '') {
        foreach ($kata_bombas as $vkata_bombas) {
          foreach(prosesCsv($kkgci1,0,0,1) as $vkkgci1){
            foreach(prosesCsv($kataspes2) as $vkataspes2){
              $num++;
              $file_csv_title.=$num.",".'"'.$vkata_bombas.' '.$nomor.",".' '.$vkkgci1.' '.$vkataspes2.'"'."\r\n";
            }
          }
        }
      }
      $zip->addFromString("title.csv", $file_csv_title);
       // echo $file_csv_title;
    }

    if (isset($_POST['desc'])) {
      $file_csv_desc="";
      $num=0;
      if ($kkgci2 == '' && $kataspes2 == '') {
        $kkgcispesifik = prosesCsv($kkgci1,5,prosesCsv($kataspes1,0,0,1),1);
        $jum_desc      = count($kata_bombas)*count($kkgcispesifik);
        // print_r($arr_pagar);
        foreach ($kata_bombas as $vkata_bombas){
          foreach($kkgcispesifik as $vkkgci1){
              $num++;
              $file_csv_desc.=$num.",".'"'.$vkata_bombas.' '.$vkkgci1.'"'.",";
          }
        }
      } elseif ($kkgci2 != '' && $kataspes2 != '') {
        $kkgcispesifik1 = prosesCsv($kkgci2,5,prosesCsv($kataspes2));
        $jum_desc       = count($kata_bombas)*count($kkgcispesifik1);
        foreach ($kata_bombas as $vkata_bombas){
          foreach($kkgcispesifik1 as $vkkgci2){
            $num++;
            $file_csv_desc.=$num.",".'"'.$vkata_bombas.' '.$vkkgci2.'"'.",";
          }
        }
      } elseif ($kkgci2 != '' && $kataspes2 == '') {
        $kkgcispesifik2 = prosesCsv($kkgci2,5,prosesCsv($kataspes1,0,0,1));
        $jum_desc       = count($kata_bombas)*count($kkgcispesifik2);
        foreach ($kata_bombas as $vkata_bombas){
          foreach($kkgcispesifik2 as $vkkgci2){
            $num++;
            $file_csv_desc.=$num.",".'"'.$vkata_bombas.' '.$vkkgci2.'"'.",";
          }
        }
      } elseif ($kkgci2 == '' && $kataspes2 != '') {
        $kkgcispesifik3 = prosesCsv($kkgci1,5,prosesCsv($kataspes2),1);
        $jum_desc       = count($kata_bombas)*count($kkgcispesifik3);
        foreach ($kata_bombas as $vkata_bombas){
          foreach($kkgcispesifik3 as $vkkgci1){
            $num++;
            $file_csv_desc.=$num.",".'"'.$vkata_bombas.' '.$vkkgci1.'"'.",";
          }
        }
      }
      $zip->addFromString("description.csv", $file_csv_desc);
       // echo $file_csv_desc;
    }

    if (isset($_POST['tag'])) {
      $file_csv_tags="";
      $num=0;
      if ($tags2 == '') {
        foreach (prosesCsv($tags1,15,0,1) as $vtags1){
          $num++;
          $file_csv_tags.=$num.",".'"'.$vtags1.'"'."\r\n";
        }
      } else {
        foreach (prosesCsv($tags2,15) as $vtags2){
          $num++;
          $file_csv_tags.=$num.",".'"'.$vtags2.'"'."\r\n";
        }
      }
      $zip->addFromString("tags.csv", $file_csv_tags);
       // echo $file_csv_tags;
    }
}


function prosesCsv($file,$split=0,$opt=0,$text=0){
  $arr=array();
  $oke=array();
  $row = -1;
      if($text==0) {
        if (($handle = fopen($file, "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
            $num = count($data);
            $row++;
            for ($c = 0; $c < $num; $c++) {
              $arr[$row][$c]= $data[$c];
            }
          }
        }
      } else {
        $arr_file=array_filter(explode("\r\n", $file));
        foreach ($arr_file as $row => $data) {
          $arr[$row][0]=$data;
        }
        // print_r($file);
      }



      if(!$split) foreach ($arr as $v) {
        $oke[]=$v[0];
      } else if($split>0) {
        $c=count($arr);
        $genap=intdiv($c, $split);
        $sisa=$c%$split;

        $baris="";
        $z=0;
        if ($opt) foreach ($opt as $vopt) {

          $oke[$z]="";
          for($p=1;$p<=$genap;$p++){
            for($y=(int)@$y;$y<$split*$p;$y++){
              @$oke[$z].=$arr[$y][0]." $vopt, ";
            }
            $oke[$z]=substr_replace($oke[$z],"",-2);
            $z++;
          }
          $y=0;

        } else for($x=1;$x<=$genap;$x++){
          $oke[$x-1]="";
          for($y=(int)@$y;$y<$split*$x;$y++){
            $oke[$x-1].=$arr[$y][0].", ";
          }
          $oke[$x-1]=substr_replace($oke[$x-1],"",-2);
        }

      }

  return $oke;
}


function shuffle_assoc($array) {
    $keys = array_keys($array);

    shuffle($keys);
    $x=0;
    foreach($keys as $key) {
        $new[$x] = $array[$key];
        $x++;
        if($x==15) break;
    }

    $array = $new;

    return $array;
}


$zip->close();

header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($filename)) . ' GMT');
header('Content-Type: application/archive');
header('Content-Disposition: inline; filename="'.$filename.'"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($filename));
header('Connection: close');
readfile($filename);
unlink($filename);
?>
