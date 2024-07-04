<div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Assignments</h4>
              <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php

                if (mysqli_num_rows($query) > 0) {

                ?>
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Sr. No.
                      </th>
                      <th>
                       Assignments
                      </th>
                      <th>
                        Description
                      </th>
                    </thead>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($query)) {
                      // $imageURL = 'uploads/'.$row["file"];
                    ?>
                      <tr>
                        <td><?= $i ?></td>
                        <td><?= $row["file"] ?></a></td>
                        <td><?= $row["description"]; ?></td>
                        <!-- <td><button type="submit" name="edit_btn" class="btn  btn-success"> EDIT</button></td> -->
                        <td><a href="uploads_assignment/<?php echo $row["file"] ?>"><button style="color : white;" type="submit" name="delete_btn" class="btn btn-success"> Download</button></a></td>
                      </tr>
                    <?php
                      $i++;
                    }
                    ?>
                  </table>
                <?php
                } else {
                  echo "no result found";
                }
                ?>
              </div>