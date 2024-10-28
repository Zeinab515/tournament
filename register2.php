<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php 
include_once 'nav.php';
?>

    <div class="container">
        <h2 class="mt-5">Register Participant</h2>
        <form action="insert2.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label>Type:</label>
                <select class="form-control" name="type" required>
                    <option value="individual">Individual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="event">Choose Event:</label>
                <select class="form-control" id="event" name="event" required>
                    <option value="">Select an event</option>
                    <option value="Quiz Bowl">Quiz Bowl</option>
                    <option value="Coding Competition">Coding Competition</option>
                    <option value="Math Olympiad">Math Olympiad</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
<?php
include_once 'db.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){
$team = $_POST['name'];
$type = $_POST['type'];
$event = $_POST['event'];
$stmt = $conn->prepare("INSERT INTO participants (id,name, type, event) VALUES (null,'$team','$type', '$event')");
if ($stmt->execute()) {
    echo '<div class="alert alert-success" role="alert"> the team is  created successfully Congratulations!</div>';
}
$stmt->close();
$conn->close();}
?>





</body>
</html>
