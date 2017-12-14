

<?php

     // header('Content-Type:text/html; charset=gb2312');//使用gb2312编码，使中文不会变成乱码
     // $backValue=$_POST['trans_data'];
     // echo $backValue."+return in backend";

      $backValue="";
      $trans=$_POST['trans_data'];
       foreach($trans as $value)
      {
         $backValue=$backValue." ".$value;
      }

      // $tra = $trans;
      //
      // echo $tra[0]." ".$tra[1]." ".$tra[2]." ".$tra[3]." ".$tra[4]." ".$tra[5]." ".$tra[6]." ".$tra[7]." ".$tra[8]." ".$tra[9];



      setcookie('mycookie',$backValue);

?>
