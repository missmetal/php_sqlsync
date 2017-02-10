<?php
/**
 * Displays User information
 */
?>
<html>
<head><title>View antenas</title>
<style>
body {
  font: normal medium/1.4 sans-serif;
}
table {
  border-collapse: collapse;
  width: 20%;
  margin-left: auto;
  margin-right: auto;
}
tr > td {
  padding: 0.25rem;
  text-align: center;
  border: 1px solid #ccc;
}
tr:nth-child(even) {
  background: #FAE1EE;
}
tr:nth-child(odd) {
  background: #edd3ff;
}
tr#header{
background: #c1e2ff;
}
td#sync{
background: #fff;
}
div.header{
padding: 10px;
background: #e0ffc1;
width:30%;
color: #008000;
margin:5px;
}
div.refresh{
margin-top:10px;
width: 5%;
margin-left: auto;
margin-right: auto;
}
div#norecord{
margin-top:10px;
width: 15%;
margin-left: auto;
margin-right: auto;
}
img{
height: 32px;
width: 32px;
}
</style>
<script>
var val= setInterval(function(){
location.reload();
},2000);
</script>
</head>
<body>
<center>
<div class="header">
Android SQLite and MySQL Sync - View antenas
</div>
</center>
<!--<?php
    include_once 'db_functions.php';
    $db = new DB_Functions();
    $antenas = $db->getAllRows();
    if ($antenas != false)
        $no_of_antenas = mysql_num_rows($antenas);
    else
        $no_of_antenas = 0;
 
?>
<?php
    if ($no_of_antenas > 0) {
?>
<table>
<tr id="header"><td>Id</td><td>Username</td></tr>
<?php
    while ($row = mysql_fetch_array($antenas)) {
?> 
<tr>
<td><span><?php echo $row["ID"] ?></span></td>
<td><span><?php echo $row["Estado"] ?></span></td>
<td id="sync"><span>
<?php 
if($row["syncsts"])
{ 
echo "<img src='img/green.png'/>"; 
}else { 
echo "<img src='img/white.png'/>";
} 
?></span></td>
</tr>
<?php } ?>
</table>
<?php }else{ ?>
<div id="norecord">
No records in MySQL DB
</div>
<?php } ?> -->
</body>
</html>