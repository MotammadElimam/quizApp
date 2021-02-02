<!DOCTYPE html>
<html lang="en" dir="rtl">
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
            /* height: 100vh; */
        }

        .m-5 {
            margin: 1rem;
        }

        .block {
            display: block;
        }
    </style>
</head>
<body>
    <div class="main-container py-5">
        <main class="border rounded px-5 py-5">
            <h3>اسم الطالب: {{ $user->name }}</h3>
            <form action="/test" method="post">
                @csrf
                <input  class="form-control" type="hidden" name="user_id" value="{{$user->code}}">
                @foreach ($questions as $key => $quiz)
                <div class="mb-4">
                    <label class="fw-bold">{{ ($key + 1) }}. {{ $quiz->question }}</label>
                    <div class="radio-group">
                        <label class="block"><input class="mx-2" type="radio" name="answer_{{$quiz->id}}" value="{{$quiz->choice_one}}">{{ $quiz->choice_one }}</label>
                        <label class="block"><input class="mx-2" type="radio" name="answer_{{$quiz->id}}" value="{{$quiz->choice_two}}">{{ $quiz->choice_two }}</label>
                        <label class="block"><input class="mx-2" type="radio" name="answer_{{$quiz->id}}" value="{{$quiz->choice_three}}">{{ $quiz->choice_three }}</label>
                        <label class="block"><input class="mx-2" type="radio" name="answer_{{$quiz->id}}" value="{{$quiz->choice_four}}">{{ $quiz->choice_four }}</label>
                    </div>
                </div>
                @endforeach
                <button class="mt-5 btn btn-primary" type="submit">نتيجة الإمتحان</button>
            </form>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>