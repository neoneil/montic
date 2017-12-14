

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

      setcookie('mycookie',$backValue);

?>
