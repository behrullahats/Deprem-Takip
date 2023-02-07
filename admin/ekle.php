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
                        <input name="tarih_gun" required="required" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Ay</span>
                        <input name="tarih_ay" required="required" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Yıl</span>
                        <input name="tarih_yil" required="required" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Toplam Yıkılan Bina Sayısı</span>
                        <input type="text" required="required"  name="toplam_yikilan_bina" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Toplam Yaralı Sayısı</span>
                        <input type="text" required="required"  name="toplam_yarali" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Toplam Kurtarılan Sayısı</span>
                        <input type="text" required="required"  name="toplam_kurtarilan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Toplam Vefat Eden Sayısı</span>
                        <input type="text" required="required"  name="toplam_vefat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Toplam Kurtarılmayı Bekleyen Sayısı</span>
                        <input type="text" required="required"  name="toplam_kurtarilmayi_bekleyen"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Bugünki Kurtarılan Kişi Sayısı</span>
                        <input type="text" required="required"  name="bugunki_kurtarilan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Bugünki Vefat Eden Sayısı</span>
                        <input type="text" required="required"  name="bugunki_vefat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <button type="submit" name="depremekle" class="btn btn-primary">Ekle</button>


                </form>
                
                <?php
                if(@$_GET["durum"]=="ok"){ ?>
                    <div class="alert alert-success">
                    <strong>Bilgi!</strong>  Ekleme Başarılı
                </div>
              <?php   } elseif (@$_GET["durum"]=="bosgonderildi"){ ?>
                    <div class="alert alert">
                    <strong>Bilgi!</strong>  Ekleme Boş Gönderildi
                </div>
              <?php   }
                
                ?>



                                  
                </div>
                
        
                
                
            </div>
           
            
        
        </div>
    </div>
  
</body>
</html>