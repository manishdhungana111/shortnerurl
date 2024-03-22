<?php
require "./connect.php";
$sql="Select * from shortenerurl";
$result=mysqli_query($conn,$sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP URL Shortener</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <h1>URL Shortener</h1>
            </li>
        </ul>

        <div class="container">
            <section>
                <form action="longurladd.php" method="post">
                    <div class="mb-3">
                        <label for="" class="form-label" name="longurl">Enter a URL to Shorten</label>
                        <input type="text" name="longurl" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </section>



            <?php


            
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo $row['longurl'] ."".$row['shorturl']."<br>";
                    }
                }
                ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>