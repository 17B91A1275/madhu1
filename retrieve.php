<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `blood`	WHERE CONCAT(`bloodgroup`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `blood`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "user", "123456", "spardha");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
<body>	
        
        <form action="retrieve.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>fname</th>
                    <th>gender</th>
                    <!--<th>Age</th>-->
                    <th>bloodgroup</th>
					 <th>town</th>
                    <!--<th>pincode</th>
                    <th>mobile</th>-->
                    <th>email</th>
					 <!--<th>password</th>-->
                    <th>request</th>
					
					
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    
                    <td><?php echo $row['bloodgroup'];?></td>
					<td><?php echo $row['town'];?></td>
                    
                    <td><?php echo $row['email'];?></td>
					<td><a href="send_email.php"><button type="submit ">send</button></a></td>
					
                </tr>
                <?php endwhile;?>
					
				
            </table>
        </form>
        
    </body>
</html>