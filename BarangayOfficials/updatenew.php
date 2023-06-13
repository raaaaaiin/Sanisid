<?php
require_once('db.php');


if (isset($_POST['submit'])) {
  $id = $_POST['resident'];
  $position = $_POST['position'];
  $Start = $_POST['Start'];
  $end = $_POST['End'];
  $hidden = $_POST['hideeen'];
  
  mysqli_query($db, "UPDATE resident_detail SET position_ID = '' WHERE position_ID = '$position'");
  mysqli_query($db, "UPDATE brgy_official_detail SET res_ID = '$hidden', official_Start = '$Start', official_End = '$end' WHERE commitee_assignID = '$position'") or die(mysqli_error($db));
  mysqli_query($db, "UPDATE resident_detail SET position_ID = '$position' WHERE res_ID = '$hidden'");
  
  // Show alert and redirect to index.php
  echo "<script>alert('The selected resident has been assigned to a new position!'); window.location.href = 'index.php';</script>";
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Barangay Officials</title>
<style>
    body {
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Roboto', sans-serif;
    }
    
    .card {
      background-color: #FFF;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 5px #666;
    }
    
    h1 {
      text-align: center;
      color: #14aa6c;
    }
    
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    input[type="text"], input[type="date"], select {
      margin-bottom: 10px;
      padding: 5px;
      border-radius: 5px;
      border: none;
      box-shadow: 0px 0px 5px #666;
      width: 100%;
      box-sizing: border-box;
    }
    
    input[type="submit"] {
      background-color: #14aa6c;
      color: #FFF;
      padding: 10px;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      width: 100%;
      box-sizing: border-box;
    }
    
    input[type="submit"]:hover {
      background-color: #054E52;
    }
    
    .autocomplete {
      position: relative;
      display: inline-block;
      width: 100%;
    }
    
    #resident-input {
      width: 100%;
    }
    
    #resident-list {
      position: absolute;
      z-index: 1;
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 100%;
      background-color: #FFF;
      border-radius: 5px;
      box-shadow: 0px 0px 5px #666;
    }
    
    #resident-list li {
      padding: 10px;
      cursor: pointer;
    }
    
    #resident-list li:hover {
      background-color: #F1F1F1;
    }
    
    p {
      text-align: left;
      font-weight: bold;
      font-size: 16px;
      margin-bottom: 5px;
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="card">
    <h1>REPLACE BARANGAY OFFICIAL</h1>
    <form method="post">
      
    <p>Resident Name</p>
      <input type="text" name="hideeen" hidden>
      <div class="autocomplete">
        <input type="text" name="resident" id="resident-input" placeholder="Type to search for a resident">
        <ul id="resident-list"></ul>
      </div>
      
      <p>Selected Position</p>
      <select name="position">
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
      <p>Year Start</p>
      <input type="date" name="Start">
      <p>Year End</p>
      <input type="date" name="End">
      <input type="submit" name="submit" value="Submit">
    </form>
  </div>
</body>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const input = document.querySelector("#resident-input");
  const list = document.querySelector("#resident-list");
  const inputa = document.querySelector('input[name="hideeen"]');

  // Add event listener for user input
  input.addEventListener("input", function(event) {
    const searchValue = event.target.value.trim();
    
    // Clear the previous suggestions
    while (list.firstChild) {
      list.removeChild(list.firstChild);
    }
    
    if (searchValue.length > 1) {
      // Fetch the resident data from the server
      const residents = <?php
        $sql = mysqli_query($db,"SELECT * FROM `resident_detail` order by  res_lName");
        $residents = array();
        while ($d = mysqli_fetch_array($sql)) {
          $resident = array(
            "id" => $d[0],
            "name" => $d[4]." ".$d[2]." ".$d[3]
          );
          array_push($residents, $resident);
        }
        echo json_encode($residents);
      ?>;
      
      // Filter the residents based on the search term
      const filteredResidents = residents.filter(function(resident) {
        return resident.name.toLowerCase().includes(searchValue.toLowerCase());
      });
      
      // Add the filtered residents to the list
      filteredResidents.forEach(function(resident) {
        const item = document.createElement("li");
        item.textContent = resident.name;
        
        // Set the selected resident's ID as the value of the input field
        item.addEventListener("click", function() {
          input.value = resident.name;
          inputa.value = resident.id;
          list.innerHTML = "";
        });
        
        list.appendChild(item);
      });
    }
  });
});

var pos = "<?php echo $_GET['pos']; ?>"; // get the value of 'pos' from the URL
  var select = document.getElementsByName('position')[0]; // get the select element
  for (var i = 0; i < select.options.length; i++) {
    if (select.options[i].text === pos) { // check if the option text matches 'pos'
      select.selectedIndex = i; // set the selected index to the matched option
      break;
    }
  }
</script>
</html>