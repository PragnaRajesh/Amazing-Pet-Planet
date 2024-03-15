<table width="308" border="1" align="center">
  <tr>
    <td width="181">Day</td>
    <td width="232">Time</td>
    <td width="232">Delete</td>
	<td width="232">Edit</td>
  </tr>
  <?php
  $con=mysql_connect('localhost','root','');
  mysql_select_db('Church',$con);
  $sql="select * from sessions_details";
  $res=mysql_query($sql);
  
  while($row=mysql_fetch_array($res))
  {
   ?>
  <tr>
    <td><?php echo $row['day'] ?></td>
    <td><?php echo $row['time'] ?></td>
	<td><a href="sessions_delete.php?session_id=<?php echo $row['session_id']; ?>" onClick="confirm('Are you sure want to delete')">Delete</a></td>
	<td><a href="sessions_edit.php?session_id=<?php echo $row['session_id']; ?>" >Edit</a></td>
	<?php
	}
	?>
  </tr>
</table>
