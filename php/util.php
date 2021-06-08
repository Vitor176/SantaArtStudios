<?php
function charset_decode_utf_8($nowytekst)
{
    $nowytekst = str_replace('%u0104','Ą',$nowytekst);    //Ą
    $nowytekst = str_replace('%u0106','Ã',$nowytekst);    //Ć
    $nowytekst = str_replace('%u0118','Ę',$nowytekst);    //Ę
    $nowytekst = str_replace('%u0141','Ł',$nowytekst);    //Ł
    $nowytekst = str_replace('%u0143','Ń',$nowytekst);    //Ń
    $nowytekst = str_replace('%u00D3','Ó',$nowytekst);    //Ó
    $nowytekst = str_replace('%u015A','Ś',$nowytekst);    //Ś
    $nowytekst = str_replace('%u0179','Ź',$nowytekst);    //Ź
    $nowytekst = str_replace('%u017B','Ż',$nowytekst);    //Ż
  
    $nowytekst = str_replace('%u0105','ą',$nowytekst);    //ą
    $nowytekst = str_replace('%u0107','ć',$nowytekst);    //ć
    $nowytekst = str_replace('%u0119','ę',$nowytekst);    //ę
    $nowytekst = str_replace('%u0142','ł',$nowytekst);    //ł
    $nowytekst = str_replace('%u0144','ń',$nowytekst);    //ń
    $nowytekst = str_replace('%u00F3','ó',$nowytekst);    //ó
    $nowytekst = str_replace('%u015B','ś',$nowytekst);    //ś
    $nowytekst = str_replace('%u017A','ź',$nowytekst);    //ź
    $nowytekst = str_replace('%u017C','ż',$nowytekst);    //ż
return ($nowytekst);
}
?>