
<?php
 
 ob_start();
 session_start();
 
 
 require_once 'netting/baglan.php';
 require_once 'fonksiyon.php';
 
 $analizsor = $db->prepare("SELECT * FROM analiz");
 $analizsor->execute();
 $analizcek = $analizsor->fetch(PDO::FETCH_ASSOC);
 
  
  ?>
 
 
 
 
 <?php

require_once "header.php";

?>
 <?php

require_once "nav.php";

?>
<title>Tüm Deprem Günleri</title>
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
                        
                             
                           </tr>
                         </thead>
                         <?php 
                         $analizsor = $db->prepare("SELECT * FROM analiz order by analiz_id DESC");
                         $analizsor->execute();
 
                         $say=0;
                        
                         while( $analizcek = $analizsor->fetch(PDO::FETCH_ASSOC)){
                         $say++;
                         ?>
                         <tbody>
                           <tr>
                             <th scope="row"><?php echo $say ?></th>
                             <td><?php echo $analizcek['tarih_gun' ] . " " ?><?php echo $analizcek['tarih_ay'] . " "  ?><?php echo $analizcek['tarih_yil']?></td>
                             <td><a href="deprem-detay.php?analiz_id=<?php echo $analizcek['analiz_id'] ?>&<?php echo $analizcek['tarih_gun'] ?><?php echo $analizcek['tarih_ay'] ?><?php echo $analizcek['tarih_yil'] ?> "><button class="btn btn-success btn-xs">İncele</button></a><br></td>
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