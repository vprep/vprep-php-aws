<div class="middle_margin">
<?php
$count_num=0;
foreach($questionAddedList as $questionAddedListNum ){

if(isset($questionAddedListNum[1])){
if($questionAddedListNum[1]>0){
echo $questionAddedListNum[0]; 
echo " "; 
echo $questionAddedListNum[1]; 
echo "  <br />"; 
$count_num=$count_num+1;
}
}

}
if($count_num==0){
echo "<div style='margin-top:100px;font-size:16px;font-weight:bold;'>No Question is added</div>";
}
 ?>
<div>
<style>
.middle_margin{
margin-left:30%;
margin-top:30px;
}
</style>