<?php

include("./config.php");

if(isset($_POST['input'])){

    $input =$_POST['input'];

    $query = "SELECT * FROM `services` WHERE Area Like '{$input}%' OR Service Like '{$input}%'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){?>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>Area</th>
                    <th>Service</th>
                    <th>Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    $Area = $row['Area'];
                    $Service = $row['Service'];
                    $Number = $row['number'];
                }
                ?>
                <tr>
                    <td><?php echo $Area ?></td>
                    <td><?php echo $Service ?></td>
                    <td><?php echo $Number ?></td>
                </tr>


            </tbody>
        </table>


        <?php

    }else{
        echo "<h5 class='text-danger'>No Service Available</h5>";
    }
}



?>