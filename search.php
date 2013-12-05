<?php
$_db = array(
	
		"host" => "127.0.0.1",
		"username" => "pinak",
		"password" => "admin",
		"name" => "VFS",
	
	);
	
	 $connection = mysql_connect($_db['host'],$_db['username'],$_db['password']);
	 $databse = mysql_select_db($_db['name']);

if($_POST)
{

$q=$_POST['searchword'];

$sql_res=mysql_query("select * from FOODS where name like '%$q%' or brand like '%$q%' order by id LIMIT 15");
while($row=mysql_fetch_array($sql_res))
{
$name=$row['name'];
$calories=$row['calories'];
$img= $row['brand'];
$brand=$row['brand'];
$img = $img .".png";
$re_fname='<b>'.$q.'</b>';
$re_lname='<b>'.$q.'</b>';




?>
<div class="display_box" align="left">

<a href="./add.php?calories= <?php print $calories; ?>">
<img src="./img/<?php echo $img; ?>" style="width:25px; float:left; margin-right:6px" />
<?php echo $name; ?>&nbsp;<?php echo $calories; ?>
</a>
<br/>


</div>



<?php
}

}
else
{

}


?>
