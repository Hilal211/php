<?php
$course_name="Electron";
$enrolled_students=20;
$price=100.5;
$on_discount=true;
if($on_discount){
    $discount="true";
}
else{
    $discount="false";
}

echo 'Course title: '. $course_name .'<br>
Enrolled Students:' . $enrolled_students . '<br>
Course price: ' . $price . '$ USD <br>
Course on discount: ' . $discount;
?>