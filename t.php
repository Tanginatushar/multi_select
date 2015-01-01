$ID = $_POST['ID'];
$firstName = $_POST['firstName'];
$hobby= $_POST['hobby'];
$preferredJobLocation=$_POST['preferredJobLocation'];
$created=$_POST['created'];



$link = mysqli_connect("localhost",
"root",
"lict@2",
"multiple");

$query="INSERT INTO `multiple`.`multi_select` (
`ID` ,
`firstName` ,
`hobby` ,
`preferredJobLocaltion` ,
`created`

)
VALUES (
'$ID' , '$firstName', '$hobby', '$preferredJobLocation', NOW( )
)";

mysqli_query($link, $query);





<? php
$preferredJobLocation= $_POST['preferredJobLocation'];
if( is_array($preferredJobLocation)){
    while (list ($key, $val) = each ($preferredJobLocation)) {
        echo $val <br>

        $hobby= $_POST['photography'].$_POST['travelling'].$_POST['reading'].$_POST['others'];