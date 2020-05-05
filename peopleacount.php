
<?php
 session_start();
  if(!isset($_SESSION['q']))
  {
	  header('location:signup_page.php');
	  die();
  }
$username=$_SESSION['email'];

?>

<?php 
$con=mysqli_connect('localhost','root','');  
 mysqli_select_db($con,'cdac');
 
$sno=$_GET['id'];
$select="select * from userdata where sno='$sno' ";
$run1=mysqli_query($con,$select);
$row1=mysqli_fetch_array($run1);
$id=$row1['email'];
$add=$row1['address1'];
echo $id;
?>
<h3>Address: <?php echo $add; ?></h3>
<button> <a href="" >start chat</a></button>


<?php
 
 $con1=mysqli_connect('localhost','root','');
 mysqli_select_db($con1,'bookselfdb');
 
$query="select * from bookselftable where email='$id' ";
$run=mysqli_query($con1,$query);
$rowcount=mysqli_num_rows($run);


?> 
<table>
<tr>
<th>S.no</th>
<th>Genre</th>
<th>Book Title</th>
<th>Publication</th>
<th>Year Of Publication</th>
<th>Edition</th>

<th>Author</th>
<th>Price</th>
<th>Date of Registeration</th>




<!--<td><input type="submit" value="edit"  name="edit" /></td>-->
</tr>

<?php
for($i=1;$i<=$rowcount;$i++)
{
$row=mysqli_fetch_array($run);
?>
<tr>
<td><?php echo $i?></td>
<td><?php echo $row['Genre']?></td>
<td><?php echo $row['BookTitle']?></td>
<td><?php echo $row['Publication']?></td>
<td><?php echo $row['year_of_pub']?></td>
<td><?php echo $row['edition']?></td>
<td><?php echo $row['Author']?></td>
<td><?php echo $row['Price']?></td>
<td><?php echo $row['date']?></td>
</tr>
<?php
}
?>
</table>