<div class=image>
<img src="uploaded_files/<?php echo $_SESSION['uploaded_image']; ?>" class="img-circle" width="200px"  height="200px" alt="user-image" />
</div>
<!-- Middle Side Nav Bar -->
<div id="header">
      <h1><strong>Welcome <?php echo $_SESSION["first_name"]."  ".$_SESSION["last_name"]; ?></strong></h1>
</div>
<?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
        <?php 
            echo $_SESSION['message']; 
            unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>
<div class="col-sm-8">
    <div class="table-responsive">
    <table border="1">
            <?php if($result){?>
            <tr>
                <th> User Registered Date</th>
                <th> ID </th>
                <th> Status </th>
                <th> Last Name </th>
                <th> First Name </th>
                <th> Gender </th>
                <th> DOB </th>
                <th> Birth Place </th>
                <th> Home Address </th>
                <th> City </th>
                <th> County</th>
                <th> Postcode </th>
                <th> Email </th>
                <th> Telephone</th>
                <th> Registration</th>
                <th> Proof ID (1) </th>
                <th> Proof ID (2)</th>
                <th> User Image</th>
                <th> User Activation</th>
                <th> Update </th>
                <th> Block </th>
                <th> Edit</th>
                <th> Delete</th>
            </tr>
            <?php
        }
        else{
            echo "No requests";
        }
        while($row = mysqli_fetch_assoc($result)){?>
        <tr> 
               <td><strong><?php echo $row['last_updated']; ?></strong></td>     
                <td><?php echo $row['user_id']; ?></td>
                <td> <?php echo $row['status']; ?></td>
                <td> <?php echo $row['last_name']; ?></td>
                <td> <?php echo $row['first_name']; ?></td>
                <td> <?php echo $row['gender']; ?></td>
                <td> <?php echo $row['dob']; ?></td>
                <td> <?php echo $row['birth_place']; ?></td>
                <td> <?php echo $row['home_address']; ?></td>
                <td> <?php echo $row['city']; ?></td>
                <td> <?php echo $row['county']; ?></td>
                <td> <?php echo $row['postcode']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['telephone']; ?></td>
                <td> <?php echo $row['user_type']; ?></td>
                <td> <?php echo $row['file_1']; ?></td>
                <td> <?php echo $row['file_2']; ?></td>
                <td> <?php echo $row['upload_image']; ?></td> 
                <td> <?php echo $row['activated']; ?></td> 
                <td> <a href="admin-panel.php?update_user=<?php echo $row['user_id']; ?>" class="edit_btn">Update</a></td>
                <td> <a href="admin-panel.php?block=<?php echo $row['user_id']; ?>" class="del_btn">Block</a></td>
                <td> <a href="admin-panel.php?edit=<?php echo $row['user_id']; ?>" class="edit_btn">Edit</a></td>
                <td><a href="php_code.php?delete=<?php echo $row['user_id']; ?>" class="del_btn">Delete</a> </td>
            </tr>
            <?php
        }?>
    </table>
</div>
</div>