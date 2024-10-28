<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Scores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php 
include_once 'nav.php';
?>

    <div class="container">
        <h2 class="mt-5">Submit Scores</h2>
        <form  method="POST">
            <div class="form-group">
                <label for="team_id">Choose Team:</label>
                <select class="form-control" name="team_id"   required>
                    <option value="" >Select a team</option>
                    <?php
                    include 'db.php';
                    // Fetch teams from the database
                    $result = $conn->query("SELECT  `name` FROM participants ");
                    if ($result->num_rows>0){
                        while ($row = $result->fetch_assoc()){
                            echo "<option value='"."'>".$row['name']."<?option>" ;
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="points">Points:</label>
                <input type="number" class="form-control" id="points" name="points" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Score</button>
        </form>
    </div>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'db.php';
    $points = $_POST['points'];
    $sql = "SELECT id FROM participants";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $idd = $row["id"];
  }
  if ($points >=0){
    $sql2= "UPDATE participants SET points='$points' WHERE id= '$idd ' ";
    if ($conn->query($sql2)==true){
        echo '<h3 style= "text-align: center;" class="text-primary"> the score is saved Congratulations!</h3>';
    }
  }elseif($points <0){
    echo ' the score must be greater than 1 ' ;
}
}
}?>

    
</body>
</html>
