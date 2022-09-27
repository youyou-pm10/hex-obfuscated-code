<?php
//解密的内容
$string = '';
function trans($str){
    if(preg_match('/\\\\x\w{2}/', $str) || preg_match('/0x\w{2}/i', $str)) {
        $str = preg_replace('/\\\\x(\w{2})/i', '0x$1', $str, 1);
        $char = preg_replace('/.*(0x\w{2}).*/i', '$1', $str,1);
        $char = chr(hexdec($char));
        $str = preg_replace('/0x\w{2}/i', $char, $str,1);
        trans($str);
    }else{
        echo $str;
    }
}
trans($string);
