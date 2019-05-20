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
                <td>Pname</td>    
                <td>age</td>    
                
                <td>pid</td>    
                <td>Roomdetails</td>    
                <td>disease</td>    
                <td>Entrydate</td> 
                <td>Exitdate</td>				
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
            <?php echo $row->pid;?>  
        </td>  
        <td>  
            <?php echo $row->roomdetails;?>  
        </td>  
        <td>  
            <?php echo $row->disease;?>  
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