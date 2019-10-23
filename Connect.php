
  <?php
    include 'config.php';
    include 'opendb.php';

    $sql= "SELECT * FROM mysampledb";
    $Result = mysqli_query($dbconn, $SQL);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "fname: " . $row["fname"]. "<br>";
        echo "lname: " . $row["lname"]. "<br>";
        echo "address: " . $row["address"]. "<br><hr>";
      }
    } else {
      echo "0 Results";
    }

    mysqli_close($conn);

   ?>
