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
                <td>Ename</td>    
                <td>age</td>    
                <td>Eid</td>    
                <td>pnum</td>    
                <td>salary</td>    
                <td>designation</td>    
                <td>Entrydate</td>      
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
            <?php echo $row->Ename;?>  
        </td>  
        <td>  
            <?php echo $row->age;?>  
        </td>  
        <td>  
            <?php echo $row->Eid;?>  
        </td>  
        <td>  
            <?php echo $row->pnum;?>  
        </td>  
        <td>  
            <?php echo $row->salary;?>  
        </td>  
        <td>  
            <?php echo $row->designation;?>  
        </td>  
        <td>  
            <?php echo $row->Entrydate;?>  
        </td>  
          
          
        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
            <? php } ?>   