<?php

require_once "header.php";

 
require_once 'netting/baglan.php';
require_once 'fonksiyon.php';

$analizsor = $db->prepare("SELECT * FROM analiz order by analiz_id DESC");
$analizsor->execute();
$analizcek = $analizsor->fetch(PDO::FETCH_ASSOC);




?>
<title>Anasayfa</title>
<body>
<?php

require_once "nav.php";

?>
    <div class="general">

        <div class="container">
        
            <h1>TÜRKİYE GÜNLÜK DEPREM VERİSİ</h1>
            <div class="content left">
                <div class="column row1">
                    <div class="row alt toplam">
                        <div class="sag">Toplam Yıkılan Bina Sayısı</div>
                        <div class="sol"><?php echo $analizcek['toplam_yikilan_bina'] ?></div>  
                    </div>
                    <div class="row alt toplam">

                        <div class="sag">Toplam Yaralı Sayısı</div>
                        <div class="sol"><?php echo $analizcek['toplam_yarali'] ?></div>    
                        
                        
                    
                    </div>
                    <div class="row alt toplam">


                        <div class="sag">Toplam Kurtarılan Sayısı</div>
                        <div class="sol"><?php echo $analizcek['toplam_kurtarilan'] ?></div>  


                    </div>
                    <div class="row alt toplam" >
                        
                        
                        

                        <div class="sag">Toplam Vefat Eden Sayısı</div>
                        <div class="sol"><?php echo $analizcek['toplam_vefat'] ?></div>   



                    </div>






                   

                </div>
                <div class="column row2">

                <div class="row alt toplam tarih1 text"><?php echo $analizcek['tarih_gun'] ?></div>
                    <div class="row alt toplam tarih2 text"><?php echo $analizcek['tarih_ay'] ?></div>
                    <div class="row alt toplam tarih3 text"><?php echo $analizcek['tarih_yil'] ?></div>
                    
                </div>
        
                <div class="column row3">
                    <div class="row alt toplam row-top">


                        <div class="sag">Bugünkü Kurtarılan Kişi Sayısı</div>
                        <div class="sol"><?php echo $analizcek['bugunki_kurtarilan'] ?></div>  


                    </div>
                    <div class="row alt toplam row-bottom">


                        <div class="sag">Bugünkü Vefat Eden Sayısı</div>
                        <div class="sol"><?php echo $analizcek['bugunki_vefat'] ?></div>  


                    </div>
                </div>
                
            </div>
            <div class="duyuru">
                <br>
                <p>Bu Veriler Manuel Olarak Doldurulmaktadır. Haberlere Göre Hareket Edilmektedir.</p>
            </div>
            
            
        
        </div>
    </div>
  
</body>
</html>