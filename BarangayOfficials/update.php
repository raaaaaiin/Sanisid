
<?php
    require_once('db.php');

    if (isset($_POST['submit'])) {
      $position = $_POST['position'];
      $Start = $_POST['Start'];
      $end = $_POST['End'];
      mysqli_query($db, "UPDATE brgy_official_detail SET commitee_assignID = '$position', official_Start = '$Start', official_End = '$end' WHERE res_ID = '$id'") or die(mysqli_error($db));
      mysqli_query($db, "UPDATE resident_detail SET position_ID = '$position' WHERE res_ID = '$id'");
      header('Location: index.php');
    }
?>
<html>
<head>
<meta charset="utf-8">
<title>Barangay Officials</title>
  <link href="style/style.css" rel="stylesheet" type="text/css">
</head>

<body style="padding: 5px;">
  <br>
  <br>
  <br>
  <h1>Update Details</h1>
  <form method="post">
    <select name="resident">
      <option disabled="">SELECT</option>

      <?php 
      $sql = mysqli_query($db,"SELECT * FROM `resident_detail` order by  res_lName");
      while ($d = mysqli_fetch_array($sql)) {
        ?>
        <option value="<?php echo $d[0]?>"><?php echo $d[4]." ".$d[2]." ".$d[3];?></option>
        <?php
      }

      ?>
    </select>
 <select name="position" required">
      <option disabled="">SELECT</option>
      <?php 
      $sql = mysqli_query($db,"SELECT * FROM `ref_position`");
      while ($d = mysqli_fetch_array($sql)) {
        ?>
        <option value="<?php echo $d[0]?>"><?php echo $d[1]; ?></option>
        <?php
      }
      ?>
    </select>


    <input type="date" name="Start">
    <input type="date" name="End">
    <input type="submit" name="submit" value="Update">
  </form>
</body>
</html>