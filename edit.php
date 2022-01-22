<?php
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $project = $_POST['project'];
    $client = $_POST['client'];
    $name_leader = $_POST['name_leader'];
    $email = $_POST['email'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $progresss = $_POST['progresss'];
        
    $result = mysqli_query($mysqli, "UPDATE progres SET project='$project',client='$client',name_leader='$name_leader',email='$email',start='$start',end='$end',progresss='$progresss' WHERE id=$id");
    
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM progres WHERE id=$id");
 
while($data = mysqli_fetch_array($result))
{
    $project = $data['project'];
    $client = $data['client'];
    $name_leader = $data['name_leader'];
    $email = $data['email'];
    $start = $data['start'];
    $end = $data['end'];
    $progresss = $data['progresss'];
}
?>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Roboto:wght@300&display=swap" rel="stylesheet">      
        <title>Edit User Data</title>
    </head>
 
    <body>
        <div class="container">
        <h1 class="mt-5 text-center">Edit Data Project Monitoring</h1>
            <form action="edit.php" method="post" name="update_user">
                <div class="mb-3">
                    <label class="form-label">Project Name</label>
                    <input type="text" name="project" class="form-control" value=<?php echo $project;?> autofocus="" required="" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Client</label>
                    <input type="text" name="client" class="form-control" value=<?php echo $client;?> />
                </div>
                <div class="mb-3">
                    <label class="form-label">Project Leader</label>
                    <input type="text" name="name_leader" class="form-control" value=<?php echo $name_leader;?> required="" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Leader</label>
                    <input type="text" name="email" class="form-control" value=<?php echo $email;?> required="" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Start Date</label>
                    <input type="date" name="start" class="form-control" value=<?php echo $start;?> required="" />
                </div>
                <div class="mb-3">
                    <label class="form-label">End Date</label>
                    <input type="date" name="end" class="form-control" value=<?php echo $end;?> required="" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Progress</label>
                    <input type="number" class="form-control" value=<?php echo $progresss;?> name="progresss" required="" />
                </div>
                <div class="mb-3">
                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                    <input type="submit" name="update" value="Update" class="btn btn-success">
                    <a href="index.php" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>