<html>
   
   <head>
      <title>Paging Using PHP</title>
   </head>
   
   <body>
      <?php
        
         
         $rec_limit = 10;
         include 'includes/conection.php';
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         
         /* Get total number of records */
         $sql = "SELECT count(id) FROM customers ";
         $retval = mysqli_query($conn,$sql);
         
         if(! $retval ) {
            die('Could not get data: ' . mysqli_error());
         }
         $row = mysqli_fetch_array($retval, MYSQLI_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $sql ="SELECT * FROM customers".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysqli_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
       ?>  
          <div class="table-responsive">
      <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
        <tbody>

        <div class="table-responsive">
          <table class="table table bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Option</th>
              <th>Option</th>
            </tr>
          </thead>
<?php
            while ($row = mysqli_fetch_array($retval, MYSQL_NUM)) {
          ?>
          <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['fname'];?></td>
            <td><?php echo $row['lname'];?></td>
            <td><?php echo $row['addres'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td  class="table-success"><a href="profileCustomer.php?id=<?php echo base64_encode($row['id']) ;?>"> More <i class="fa fa-arrow-right fa-xs"></i></a></td>
            <td  class="table-warning"><a href="addpayments.php?id=<?php echo base64_encode($row['id']);?>"> Payments <i class="fa fa-cash-register fa-xs"></i></a></td>
          </tr>

        <?php } ?>





        </tbody>
      </table>
         <?php
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a> |";
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";
         }
         
         mysql_close($conn);
      ?>
      
   </body>
</html>