<?
$Prev_thumb_small1="fs_".$prev_data[reg_date].".jpg";
$Prev_thumb_large1="fl_".$prev_data[reg_date].".jpg";

$Prev_thumb_small2="ss_".$prev_data[reg_date].".jpg";
$Prev_thumb_large2="sl_".$prev_data[reg_date].".jpg";

$Next_thumb_small1="fs_".$next_data[reg_date].".jpg";
$Next_thumb_large1="fl_".$next_data[reg_date].".jpg";

$Next_thumb_small2="ss_".$next_data[reg_date].".jpg";
$Next_thumb_large2="sl_".$next_data[reg_date].".jpg";

$view_large1="fXL_".$data[reg_date].".jpg";
$view_large2="sXL_".$data[reg_date].".jpg";


$imagePattern="#\[img\:(.+?)\.(jpg|jpeg|gif|png|bmp)\,#i";
preg_match_all($imagePattern,$prev_data[memo],$out1,PREG_SET_ORDER);

$iPrev_thumb_small1="fs_".$out1[0][1].".jpg";
$iPrev_thumb_small2="ss_".$out1[1][1].".jpg";

$iPrev_thumb_large1="fl_".$out1[0][1].".jpg";
$iPrev_thumb_large2="sl_".$out1[1][1].".jpg";

$imagePattern="#\[img\:(.+?)\.(jpg|jpeg|gif|png|bmp)\,#i";
preg_match_all($imagePattern,$next_data[memo],$out2,PREG_SET_ORDER);

$iNext_thumb_small1="fs_".$out2[0][1].".jpg";
$iNext_thumb_small2="ss_".$out2[1][1].".jpg";

$iNext_thumb_large1="fl_".$out2[0][1].".jpg";
$iNext_thumb_large2="sl_".$out2[1][1].".jpg";

$imagePattern="#\[img\:(.+?)\.(jpg|jpeg|gif|png|bmp)\,#i";
preg_match_all($imagePattern,$data[memo],$out3,PREG_SET_ORDER);

$iview_large1="fXL_".$out3[0][1].".jpg";
$iview_large2="sXL_".$out3[1][1].".jpg";
?>