<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "multiple");
$query = "select * from multi_select";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<a href="list.php">Go to Home</a>
<ul>
    <li><a href="create.html">Create New </a> </li>
</ul>
<table border="1" width="50%">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Hobby</td>
        <td>Preferred Job Location</td>
        <td>Created</td>



        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['firstName']?></td>

            <td><?php echo $row['hobby']?></td>
            <td><?php echo $row['preferredJobLocation']?></td>

            <td><?php echo $row['created']?></td>
            <td> <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a></td>

        </tr>
    <?php
    }
    ?>
    print_r($query);
</table>