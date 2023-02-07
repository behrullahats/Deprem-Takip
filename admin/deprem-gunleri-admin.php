
 <?php
 
ob_start();
session_start();


require_once '../netting/baglan.php';
require_once '../fonksiyon.php';

$analizsor = $db->prepare("SELECT * FROM analiz");
$analizsor->execute();
$analizcek = $analizsor->fetch(PDO::FETCH_ASSOC);

 
 ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="ekle.css">
    <title>Deprem Ekle</title>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>
<body>
<?php

require_once "nav.php";

?>
    <div class="general">

        <div class="container">
        
            <h1>Admin Paneli Deprem Günleri </h1>
            <div class="">

                <table class="table table-dark table-striped">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tarih</th>
                            <th scope="col">İşlem</th>
                            <th scope="col">İşlem</th>
                            
                          </tr>
                        </thead>
                        <?php 
                        $analizsor = $db->prepare("SELECT * FROM analiz ");
                        $analizsor->execute();

                        $say=0;
                       
                        while( $analizcek = $analizsor->fetch(PDO::FETCH_ASSOC)){
                        $say++;
                        ?>
                        <tbody>
                          <tr>
                            <th scope="row"><?php echo $say ?></th>
                            <td><?php echo $analizcek['tarih_gun' ] . " " ?><?php echo $analizcek['tarih_ay'] . " "  ?><?php echo $analizcek['tarih_yil']?></td>
                            <td><a href="../netting/islem.php?analiz_id=<?php echo $analizcek['analiz_id'] ?>&analizsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></td>
                            <td><a href="analiz-guncelle.php?analiz_id=<?php echo $analizcek['analiz_id'] ?>"><button class="btn btn-success btn-xs">Güncelle</button></a><br></td>
                          </tr>
                          
                        </tbody>
                        <?php } ?>
                       
                      </table>
                  </table>


           
            </div>
            
            
        
        </div>
    </div>
  
</body>
</html>