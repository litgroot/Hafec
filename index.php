<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM progres ORDER BY id DESC");
?>

<DOCTYPE html>
    <html>
        <head>
            <meta charsheet="utf-8">
            <meta name="viewport" content="width-device-width, initial-scale=1">
            <title>Project Manager</title>
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Roboto:wght@300&display=swap" rel="stylesheet">
        </head>
        <body style="background-color: #F0FFFF;">
            <div class="container">
                <h1 class="mt-5 text-center">Project Monitoring</h1>
                <a href="add.php" class="btn btn-primary">Tambah</a><br><br>
                <table width='80%' border=1 class="table table-striped">
                    <tr>
                        <th>Project Name</th>
                        <th>Client</th>
                        <th>Project Leader</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Progress</th>
                        <th>Action</th>
                    </tr>
                    <?php  
                    while($data = mysqli_fetch_array($result)) {         
                        echo "<tr>";
                        echo "<td>".$data['project']."</td>";
                        echo "<td>".$data['client']."</td>";
                        echo "<td>".$data['name_leader']. "<br>" .$data['email']."</td>";
                        echo "<td>".$data['start']."</td>";
                        echo "<td>".$data['end']."</td>";
                        echo "<td class='progress-bar' role='progressbar' style='width: $data[progresss]; color: #000000;' aria-valuenow='$data[progresss]' aria-valuemin='0' aria-valuemax='100'>".$data['progresss']."%</td>";
                        echo "<td><a href='edit.php?id=$data[id]' class='btn btn-success'>Edit</a> <a href='delete.php?id=$data[id]' class='btn btn-danger'>Delete</a></td></tr>";           
                    }
                    ?>
                </table>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            </div>
        </body>
    </html>

