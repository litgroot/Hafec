<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Roboto:wght@300&display=swap" rel="stylesheet">
	
	<title>Project Monitoring</title>
</head>
<body>
	<div class="container mt-5">
    <h1 class="mt-5 text-center">Tambah Data Project Monitoring</h1>

		<form action="add.php" method="post" name="form1">
            <div class="mb-3">
                <label class="form-label">Project Name</label>
                <input type="text" name="project" class="form-control" autofocus="" required="" />
            </div>
            <div class="mb-3">
                <label class="form-label">Client</label>
                <input type="text" name="client" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label">Project Leader</label>
                <input type="text" name="name_leader" class="form-control" required="" />
            </div>
            <div class="mb-3">
                <label class="form-label">Email Leader</label>
                <input type="text" name="email" class="form-control" required="" />
            </div>
            <div class="mb-3">
                <label class="form-label">Start Date</label>
                <input type="date" name="start" class="form-control" required="" />
            </div>
            <div class="mb-3">
                <label class="form-label">End Date</label>
                <input type="date" name="end" class="form-control" required="" />
            </div>
            <div class="mb-3">
                <label class="form-label">Progress</label>
                <input type="number" class="form-control" name="progresss" required="" />
            </div>
			<div class="mb-3">
				<button class="btn btn-success" type="submit" name="Submit">Submit</button>
				<a href="index.php" class="btn btn-danger">Kembali</a>
			</div>
		</form>
        <?php
 
        // Check If form submitted, insert form data into users table.
        if(isset($_POST['Submit'])) {
            $project = $_POST['project'];
            $client = $_POST['client'];
            $name_leader = $_POST['name_leader'];
            $email = $_POST['email'];
            $start = $_POST['start'];
            $end = $_POST['end'];
            $progresss = $_POST['progresss'];
            
            // include database connection file
            include_once("config.php");
                    
            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO progres(project,client,name_leader,email,start,end,progresss) VALUES('$project','$client','$name_leader','$email','$start','$end','$progresss')");
            
            // Show message when user added
            echo "User added successfully. <a href='index.php'>View Users</a>";
        }
        ?>
		
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>