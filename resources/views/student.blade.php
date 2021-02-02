<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .field {
            display: block;
            margin: 0.25rem;
            width: 100%;
        }

        button.field {
            display: block;
            margin: 0.5rem auto;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <main class="border rounded px-5 py-5">
            <h1 class="text-center mb-4">Quiz App</h1>
            <form action="/users" method="post">
                @csrf
                <input class="form-control field" name="name" type="text" placeholder="Full Name">
                <input class="form-control field" name="phone" type="text" placeholder="Phone without 0">
                
                <button class="btn btn-primary field" type="submit">Get ID</button>
            </form>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>