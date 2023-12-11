<?php

function tgl($date){
    // Carbon\Carbon::parse($data->tgl_catatan_sipil)->isoFormat('D MMM Y')
    return \Carbon\Carbon::parse($date)->isoFormat('dddd, D MMMM YYYY HH:mm:ss');
}
function tgls($date){
    // Carbon\Carbon::parse($data->tgl_catatan_sipil)->isoFormat('D MMM Y')
    return \Carbon\Carbon::parse($date)->isoFormat('dddd, D MMMM YYYY');
}
function tgl_s($date){
   if($date){
       return  \Carbon\Carbon::parse($date)->isoFormat('D MMMM YYYY');
   } return '-';
}


function nominal($val)
{
    if (!is_numeric($val)) return $val;
    return number_format($val, 0, ',', '.');
}

