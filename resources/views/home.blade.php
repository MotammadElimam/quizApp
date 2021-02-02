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

        .m-5 {
            margin: 1rem;
        }

        .link {
            text-decoration: none;
        }

        .success-text {
            color: green;
            border: 1px solid green;
            padding: 0.25rem;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <main class="border rounded px-5 py-5">
            @if ($student_id)
            <div>
                <p class="success-text">Success! Your Student ID is {{ $student_id }}</p>
            </div>
            @endif
            <h1 class="text-center mb-4">Quiz App</h1>
            <form class="form" action="/test-user" method="post">
                @csrf
                <input class="form-control" name="student_id" type="text" placeholder="Student ID">
                <button class=" btn btn-primary mt-3" type="submit">Take Test</button>
            </form>
            <div class="m-5 d-grid gap-2">
                <a class="btn btn-block btn-secondary" href="/register" class="link">Get an ID</a>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>