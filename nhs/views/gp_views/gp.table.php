<div class="col-sm-8">
    <div class="table-responsive">
    <table border="1">
        <?php if($result){?>
        <tr>
            <th> Status </th>
            <th> Surname </th>
            <th> Name </th>
            <th> Gender </th>
            <th> DOB</th>
            <th> Address </th>
            <th> City </th>
            <th> County</th>
            <th> Postcode </th>
            <th> Email </th>
            <th> Telephone</th>
        </tr>
            <?php }
            else{echo "No requests";}
            while($row = mysqli_fetch_assoc($result)){?>
            <tr>             
                <td> <?php echo $row['status']; ?></td>
                <td> <?php echo $row['last_name']; ?></td>
                <td> <?php echo $row['first_name']; ?></td>
                <td> <?php echo $row['gender']; ?></td>
                <td> <?php echo $row['dob']; ?></td>
                <td> <?php echo $row['home_address']; ?></td>
                <td> <?php echo $row['city']; ?></td>
                <td> <?php echo $row['county']; ?></td>
                <td> <?php echo $row['postcode']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['telephone']; ?></td>
            </tr>
            <?php
            }?>
        </table>
    </div>
    </div>