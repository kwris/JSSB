<?php include 'database.php'; ?>
<?php
// Create Select Query

$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JS Shoutbox</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>   
</head>
<body>
    <div id="container">
      <header>
         <h1>JS Shoutbox</h1>
      </header>
    <div id="shouts">
       <ul>
       <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
         <li><?php echo $row['name']; ?> <?php echo $row['shout']; ?> [<?php echo $row['date']; ?>]</li>
<?php endwhile; ?>
       </ul>
    </div>
      <footer>
        <form>
           <label>Name: </label>
           <input type="text" id="name">
           <label>Shout Text: </label>
           <input type="text" id="shout">
           <input type="submit" id="submit" value="SHOUT!">
       </form>
      </footer>
    </div>



</body>
</html>