<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from Employee where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from Employee";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Email</td>    
                <td>password</td>    
                <td>address</td>    
                   
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>   
<?php    
    
while($row = mysql_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->Email;?>  
        </td>  
        <td>  
            <?php echo $row->password;?>  
        </td>  
        <td>  
            <?php echo $row->address;?>  
        </td>  
        <td>  
           
          
        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
            <? php } ?>   