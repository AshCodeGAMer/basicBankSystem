<?php
include "connection.php";
$select="SELECT * FROM transfer";
$select_query=mysqli_query($con,$select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Basic Banking System</title>

    <!-- Goggle font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-weight:bold;">
            <div class="container-fluid">
                <h1><a class="navbar-brand logo" href="#" style="font-size:x-large;margin-bottom:10px;">SPARK BBS</a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <h4><a class="nav-link" aria-current="page" href="index.php">Home</a></h4>
                        </li>
                        <li class="nav-item">
                            <h4><a class="nav-link" href="view.php">View Customers</a></h4>
                        </li>
                        <li class="nav-item">
                            <h4><a class="nav-link" href="transaction.php">Transfer Money</a></h4>
                        </li>
                        <li class="nav-item">
                            <h4><a class="nav-link active" href="history.php">Transaction History</a></h4>
                        </li>
                        <li class="nav-item">
                            <h4><a class="nav-link" href="user.php">Create New Users</a></h4>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container-fluid" style="background-image: linear-gradient( 180deg,  rgb(12, 145, 134) 11.2%, rgba(36,163,190,1) 91.1% );width:100%;padding-top:-400px;padding-bottom:300px;">
        <div class="row row-history color">
            <h2 class="text-center">History</h2>
            <br>

            <div class="col-md-offset-2 col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($row=mysqli_fetch_assoc($select_query)){
                        ?>
                        <tr style="color: #003399">
                            <td><?php echo $row['sid'] ?></td>
                            <td><?php echo $row['sender']?></td>
                            <td><?php echo $row['receiver']?></td>
                            <td><?php echo $row['amount']?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-center history-footer">
        <p>&copy 2021.Made by <span>Ashay Gawane</span><br> For the Project of <span>The Sparks Foundation</span></p>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>