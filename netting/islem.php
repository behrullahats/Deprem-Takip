
<?php 
include "baglan.php";
include '../fonksiyon.php';

ob_start();
session_start();




if (isset($_POST['depremekle'])) {
    islemkontrol();
    $ekle = $db->prepare("INSERT INTO analiz SET
    
    tarih_gun=:tarih_gun,
    tarih_ay=:tarih_ay,
    tarih_yil=:tarih_yil,
    toplam_yikilan_bina=:toplam_yikilan_bina,
    toplam_yarali=:toplam_yarali,
    toplam_kurtarilan=:toplam_kurtarilan,
    toplam_vefat=:toplam_vefat,
    toplam_kurtarilmayi_bekleyen=:toplam_kurtarilmayi_bekleyen,
    bugunki_kurtarilan=:bugunki_kurtarilan,
    bugunki_vefat=:bugunki_vefat
    

    ");
    $insert = $ekle->execute([
        'tarih_gun' => htmlspecialchars( $_POST['tarih_gun']),
        'tarih_ay' => htmlspecialchars( $_POST['tarih_ay']),
        'tarih_yil' => htmlspecialchars( $_POST['tarih_yil']),
        'toplam_yikilan_bina' => htmlspecialchars( $_POST['toplam_yikilan_bina']),
        'toplam_yarali' => htmlspecialchars( $_POST['toplam_yarali']),
        'toplam_kurtarilan' => htmlspecialchars( $_POST['toplam_kurtarilan']),
        'toplam_vefat' => htmlspecialchars( $_POST['toplam_vefat']),
        'toplam_kurtarilmayi_bekleyen' => htmlspecialchars($_POST['toplam_kurtarilmayi_bekleyen']),
        'bugunki_kurtarilan' => htmlspecialchars( $_POST['bugunki_kurtarilan']),
        'bugunki_vefat' => htmlspecialchars($_POST['bugunki_vefat']) 
    ]);
    if ($insert) {
        header("Location:../admin/ekle.php?durum=ok");
    } else {
        header("Location:../admin/ekle.php?durum=no");
    }
}

if (@$_GET['analizsil'] == "ok") {
    islemkontrol();
    $sil = $db->prepare("DELETE from analiz where analiz_id=:id");
    $kontrol = $sil->execute(array(
        'id' => $_GET['analiz_id']
    ));


    if ($kontrol) {


        header("location:../admin/deprem-gunleri-admin.php?sil=ok");
    } else {

        header("location:../admin/deprem-gunleri-admin.php?sil=no");
    }
}


if (isset($_POST['depremguncelle'])) {
    islemkontrol();

    $analiz_id = $_POST['analiz_id'];
    $guncelle = $db->prepare("UPDATE analiz SET 
    
    tarih_gun=:tarih_gun,
    tarih_ay=:tarih_ay,
    tarih_yil=:tarih_yil,
    toplam_yikilan_bina=:toplam_yikilan_bina,
    toplam_yarali=:toplam_yarali,
    toplam_kurtarilan=:toplam_kurtarilan,
    toplam_vefat=:toplam_vefat,
    toplam_kurtarilmayi_bekleyen=:toplam_kurtarilmayi_bekleyen,
    bugunki_kurtarilan=:bugunki_kurtarilan,
    bugunki_vefat=:bugunki_vefat
    
    where analiz_id ={$_POST['analiz_id']}");

    $dupdate = $guncelle->execute([
        'tarih_gun' => $_POST['tarih_gun'],
        'tarih_ay' => $_POST['tarih_ay'],
        'tarih_yil' => $_POST['tarih_yil'],
        'toplam_yikilan_bina' => $_POST['toplam_yikilan_bina'],
        'toplam_yarali' => $_POST['toplam_yarali'],
        'toplam_kurtarilan' => $_POST['toplam_kurtarilan'],
        'toplam_vefat' => $_POST['toplam_vefat'],
        'toplam_kurtarilmayi_bekleyen' => $_POST['toplam_kurtarilmayi_bekleyen'],
        'bugunki_kurtarilan' => $_POST['bugunki_kurtarilan'],
        'bugunki_vefat' => $_POST['bugunki_vefat']

    ]);

    if ($dupdate) {
        header("location:../admin/analiz-guncelle.php?durum=ok&analiz_id=$analiz_id");
    } else {
        header("location:../admin/analiz-guncelle.php?durum=no");
    }
}

?>