<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h4>Create Post</h4>
                    </div>
                    <div class="col-md-2 text-end">
                        <a href={{ route("post.index")}} class="btn btn-success">Back</a>
                    </div>
                </div>
            </div>
            <div class="card-header">
                <form action="" method="post">
                    <div class="mt-1">
                        <label for="title">Title:</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mt-1">
                        <label for="title">Body:</label>
                        <textarea class="form-control" id="" name="body"></textarea>
                    </div>
                    <div class="mt-1">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>