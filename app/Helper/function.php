<?php
function percent($sale,$price): float
{
    $a = round(($price-$sale)*100/$price,0);
    return $a;
}
function tile($num_1,$num_2): float|int
{
    $a = round(($num_1)*100/($num_2),2);
    return abs($a); // Sử dụng hàm abs() để lấy giá trị tuyệt đối
}
function getCurrentDate(): string
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    return date("d-m-Y");
}


function convertDate($date): string
{
    if(is_null($date)){
        return "";
    }else{
        $newDate = DateTime::createFromFormat('Y-m-d', $date);
        return $newDate->format('d/m/Y');
    }
}
function truyCapLanCuoi($date) {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    if($date !==null){
        $now = new DateTime();
        $newDate = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        $interval = $now->diff($newDate);

        if(is_null($date)){
            return "";
        }else if($interval->days < 1){
            return $newDate->format('H:i');
        }else{
            return $newDate->format('d/m/Y');
        }
    }
}


function convertTime($t1): string
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $time1 = new DateTime($t1);
    $time2 = new DateTime(date('Y-m-d H:i:s'));
    $interval = $time1->diff($time2);

    if($interval->days == 0 && $interval->h == 0){
        $minutes = $interval->i;
        $result = $minutes . " phút trước";
    }
    elseif($interval->days == 0){
        $hours = $interval->h;
        $result = $hours . " giờ trước";
    }
    elseif($interval->days < 7){
        $days = $interval->days;
        $result = $days . " ngày trước";
    }
    else{
        $result = $time1->format('d/m/Y');
    }
    return $result;
}

function tich($a,$b): float|int
{
    return intval($a)*($b);
}

function rating($num): void
{
    $rating = '';
    $star = '<i class="fa fa-star" ></i>';
    $star_0 = '<i class="fa fa-star-o" ></i>';
    $star_half = '<i class="fa fa-star-half-o"></i>';
    for($i = 0; $i < intval($num+0.5); $i++){
        if(intval($num)- $i < 1){
            $rating = $rating.$star_half;
        }else{
            $rating = $rating.$star;
        }
    }
    if(intval($num) < 5){
        for($i = 0; $i < intval(5 - $num); $i++){
            $rating = $rating.$star_0;
        }
    }
    echo $rating;
}


