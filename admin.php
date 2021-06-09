<?php
$user=$_GET['user'];
$pass=$_GET['pass'];

$db_host=''; //Should contain the "Database Host" value
$db_name=''; //Should contain the "Database Name" value
$db_user=''; //Should contain the "Database User" value
$db_pass=''; //Should contain the "Database Password" value


$conn = new mysqli($db_host, $db_name, $db_pass, $db_user);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<html>
  <head>  <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    #txt{
    border-style: ;
    }
    #txt1{
    border-style: none;
    }
    #id{
      column-width: 5%;
    }
    </style>
  </head>
  <body>
    <?php
    readfile('links.html');
    ?>
    <div class="w3-container">
      <center>
      <h2>USER QUESTIONS</h2>
      </center>
      <table class="w3-table-all w3-hoverable ">
        <thead>
          <tr class="w3-light-grey">
            <th>SL.NO</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE NO</th>
            <th>MESSAGE</th>
            <th></th>
          </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM query";
        $result1 = $conn->query($sql);
        if ($result1->num_rows > 0) {
        while($row = $result1->fetch_array()) {
        if ($row[6]==0)
        {
        ?>
        <form action="send_mail.php">

          <tr>
            <td id="id">
              <?php echo $row[0]; ?>
              <input type="hidden" name="id" id="txt1" value="<?php echo $row[0]; ?>" readonly >
            </td>
            <td>
              <?php echo $row[1]; ?>
              <input type="hidden" name="name" id="txt" value="<?php echo $row[1]; ?>" readonly >
            </td>
            <td>
              <?php echo $row[2]; ?>
              <input type="hidden" name="email" id="txt" value="<?php echo $row[2]; ?>" readonly >
            </td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><input type="submit" class="w3-btn w3-green" value="Replay"></td>
          </tr>
        </form>
        <?php
        }
        else
        {
        ?>
        <form action="adminamail.php">

          <tr>
            <td>
              <?php echo $row[0]; ?>
             <input type="hidden" name="id" id="txt1" value="<?php echo $row[0]; ?>" readonly >
            </td>
            <td>
              <?php echo $row[1]; ?>
              <input type="hidden" name="name" id="txt" value="<?php echo $row[1]; ?>" readonly >
            </td>
            <td>
              <?php echo $row[2]; ?>
              <input type="hidden" name="email" id="txt" value="<?php echo $row[2]; ?>" readonly >
            </td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><input type="submit" class="w3-btn w3-red" value="Answered" disabled></td>
          </tr>
        </form>


        <?php
        }
        }
        } else {
        echo "no results1";
        }

        ?>

      </table>
    </div>
  </body>
</html>
