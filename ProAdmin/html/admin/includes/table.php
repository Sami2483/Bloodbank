
<table class="table">
  <thead>
    <tr>
    <th style="color:red; font-size:16px;">Full name</th>
    <th style="color:red; font-size:16px;">gender</th>
    <th style="color:red; font-size:16px;">dob</th>
    <th style="color:red; font-size:16px;">bg</th>
    <th style="color:red; font-size:16px;">bw</th>
    <th style="color:red; font-size:16px;">email</th>
    <th style="color:red; font-size:16px;">country</th>
    <th style="color:red; font-size:16px;">city</th>
    <th style="color:red; font-size:16px;">kebele</th>
    <th style="color:red; font-size:16px;">adress</th>
    <th style="color:red; font-size:16px;">phone</th>

    </tr>
  </thead>
  <?php

  while ($row=mysqli_fetch_assoc($result)) {
    // code...


    $id=$row['id'];
    $name=$row['name'];
    $father=$row['father'];
    $gender=$row['gender'];
    $dob=$row['dob'];
    $bg=$row['bg'];
    $bw=$row['bw'];
    $email=$row['email'];
    $country=$row['country'];
    $city=$row['city'];
    $kebele=$row['kebele'];
    $adress=$row['adress'];
    $phone=$row['phone'];
    // $password=$row['password'];
    $photo=$row['photo'];
   ?>
  <tbody class="table-border-bottom-0">
    <tr>
      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $name." ".$father; ?></strong></td>
      <td><?php echo $gender; ?></td>
      <td><?php echo $dob; ?></td>
      <td><?php echo $bg; ?></td>
      <td><?php echo $bw; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $country; ?></td>
      <td><?php echo $city; ?></td>
      <td><?php echo $kebele; ?></td>
      <td><?php echo $adress; ?></td>
      <td><?php echo $phone; ?></td>
      <!-- <td>
<img src="../uploads/<?php echo $photo; ?>" alt="" width="50" height="60">
      </td> -->

      <td>
        <div class="dropdown">
          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo "edit.php?p_id=$id"; ?>"
              ><i class="bx bx-edit-alt me-1"></i> Edit</a>

            <a class="dropdown-item" href='users.php?delete=<?php echo $id; ?>'
              ><i class="bx bx-trash me-1"></i> Delete</a>

          </div>
        </div>
      </td>
    </tr>
  <?php }


  ?>

  </tbody>
</table>
