<?php
 
if($_SERVER['REQUEST_METHOD']=='GET')
 
{
 
    require_once('db.php');
    $id = $_GET['id'];
 
    $query = "SELECT * FROM 'users' where id ='$id'";
    $result = $mysqli_query($mysql,$query);
   
 
}
 
?>
    <table class = "tabla2" >
        <thead>
            <th class = "col">Nombre</th>
            <th class = "col">Email</th>
            <th class = "col">Fecha inicio</th>
            <th class = "col">Fecha upgrade</th>
        </thead>
 
        <tbody>
            <?php while ($row = $result ->fetch_assoc()){ ?>
            <tr>
                <td class = "fil"><?php echo $row['usuario']?></td>
                <td class = "fil"><?php echo $row['email']?></td>
                <td class = "fil"><?php echo $row['creat_at']?></td>
                <td class = "fil"><?php echo $row['updated_at']?></td>
            <?php }?>
        </tbody>
    </table>
    </body>
