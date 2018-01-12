<?php
	// $konten = file_get_contents('http://localhost/uts/mahasiswa.php');
 //    $data = json_decode($konten);
 //    $jumlah = 0;
 //    foreach ($data->mahasiswa as $hasil){
 //                $jumlah++;
 //                //echo $hasil->nama.'<br>';         
 //        }
 //        for ($i=0; $i <$jumlah ; $i++) { 
        	
 //        }
 //        echo $data->mahasiswa[0]->nama;

    $jsondata = file_get_contents('http://localhost/hmvc_example/surat/api_user');
    $json = json_decode($jsondata,true);
    // echo $json[0]['username'];
    //  echo '<br>'.$json[0]['password'];
    $jumlah=0;
     echo "========Use Foreach=========<br>";
    foreach ($json as $key ) {
    	echo $key['username'].' '.$key['password'].'<br>';
    	$jumlah++;
    }
    echo "========Use For=========<br>";
    for ($i=0; $i <$jumlah ; $i++) { 
    	echo $json[$i]['username'].' '.$json[$i]['password'].'<br>';
    }
      



	

?>