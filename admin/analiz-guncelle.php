
<?php
 
 ob_start();
 session_start();
 
 
 require_once '../netting/baglan.php';
 require_once '../fonksiyon.php';
 


$analizsor = $db->prepare("SELECT * FROM analiz where analiz_id=:id");
$analizsor->execute([
    'id' => @$_GET['analiz_id']
]);
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
        
            <h1>Admin Paneli Deprem Ekleme</h1>
            <div class="content left">
                <div class="column row1">

                    <form action="../netting/islem.php" method="POST">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Gün</span>
                        <input name="tarih_gun" value="<?php echo $analizcek['tarih_gun'] ?>" required="required" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <span class="input-group-text"  id="inputGroup-sizing-sm">Ay</span>
                        <input name="tarih_ay" value="<?php echo $analizcek['tarih_ay'] ?>" required="required" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Yıl</span>
                        <input name="tarih_yil" value="<?php echo $analizcek['tarih_yil'] ?>" required="required" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Toplam Yıkılan Bina Sayısı</span>
                        <input type="text" required="required"  name="toplam_yikilan_bina" value="<?php echo $analizcek['toplam_yikilan_bina'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Toplam Yaralı Sayısı</span>
                        <input type="text" required="required"  name="toplam_yarali" value="<?php echo $analizcek['toplam_yarali'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Toplam Kurtarılan Sayısı</span>
                        <input type="text" required="required"  name="toplam_kurtarilan" value="<?php echo $analizcek['toplam_kurtarilan'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Toplam Vefat Eden Sayısı</span>
                        <input type="text" required="required"  name="toplam_vefat" value="<?php echo $analizcek['toplam_vefat'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Toplam Kurtarılmayı Bekleyen Sayısı</span>
                        <input type="text" required="required"  name="toplam_kurtarilmayi_bekleyen" value="<?php echo $analizcek['toplam_kurtarilmayi_bekleyen'] ?>"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Bugünki Kurtarılan Kişi Sayısı</span>
                        <input type="text" required="required"  name="bugunki_kurtarilan" value="<?php echo $analizcek['bugunki_kurtarilan'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Bugünki Vefat Eden Sayısı</span>
                        <input type="text" required="required"  name="bugunki_vefat" value="<?php echo $analizcek['bugunki_vefat'] ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <input type="hidden" name="analiz_id" value="<?php echo $analizcek['analiz_id'] ?>">
                    <button type="submit" name="depremguncelle" class="btn btn-primary">Güncelle</button>


                </form>
                
     



                                  
                </div>
                
        
                
                
            </div>
           
            
        
        </div>
    </div>
  
</body>
</html>