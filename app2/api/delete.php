<?php
include_once "db.php";
//處理刪除資料的請求
// if(isset($_POST['id'])){
//     echo ($_POST['id']);
// }else{
//     echo "找不到id！";
// };
// exit();
if(isset($_POST['id'])){
    $Student->del($_POST['id']);
    // $ClassStudent->del($_POST['id']);
    // $sql="SELECT `student_scores`.`school_num` FROM `students` INNER JOIN `student_scores` ON `students`.`school_num` = `student_scores`.`school_num` WHERE `id`='{$_POST['id']}'";
    // $schoolnum=$Student->q($sql);
    // $StudentScores->q("DELETE FROM `student_scores` WHERE school_num='{$schoolnum}'");
}
?>