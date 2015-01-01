
<?php
echo'<pre>';
print_r($_POST);
echo'</pre>';

$hobby='';


if( isset($_POST['hobby_photography'])&& !empty ($_POST['hobby_photography'])){
    $hobby =$hobby.$_POST['hobby_photography'];
    $hobby .=',';
}



if( isset($_POST['hobby_travelling'])&& !empty ($_POST['hobby_travelling'])){
$hobby=$hobby.$_POST['hobby_travelling'];
    $hobby .=',';}



if( isset($_POST['hobby_reading'])&& !empty ($_POST['hobby_reading'])){
$hobby=$hobby.$_POST['hobby_reading'];
    $hobby .=',';}


if( isset($_POST['hobby_others'])&& !empty ($_POST['hobby_others'])){
$hobby=$hobby.$_POST['hobby_others'];
}


echo ($hobby);

?>