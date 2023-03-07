<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form email</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row p-5">
            <div class="card col-12">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPuBOn9LSMEhrSmXdvXkB7Bbe96djbbLpOZg&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Messaggio di {{ $lead->name }}</h5>
                        <p class="card-text">
                            {{ $lead->message }}
                        </p>
                        <div class="card-footer">
                            <pre>
                                {{ $lead->email }}
                            </pre>
                        </div>
                    </div>
              </div>
        </div>
    </div>

</body>
</html>