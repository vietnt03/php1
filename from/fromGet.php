<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dùng method get</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <form action="get.php" method=" get">
        <div class="form-group ">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name=" email"  >
        </div>
       
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
   
</body>

</html>