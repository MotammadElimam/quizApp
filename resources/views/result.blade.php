<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Quiz App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .m-5 {
            margin: 1rem;
        }

        .block {
            display: block;
        }

        .correct {
            color: green;
        }

        .wrong {
            color: red;
        }

        body {
            padding: 1rem;
        }
    </style>
</head>
<body>
    <div class="main-container py-5">
        <main class="border rounded px-5  m-3">
            <h2 class="text-center mt-2">Result</h2>
            <div>
                <h3>الإجابات الصحيحة {{ $test->correct_answers }}</h3>
                <h3>الإجابات الخاطئة {{ $test->wrong_answers }}</h3>
            </div>
            <form action="/test" method="post">
                @csrf
                @foreach ($questions as $key => $quiz)
                <div class="mb-4">
                    <label  class="fw-bold {{$quiz->answer == $answers['answer_'.($key + 1)] ? 'correct' : 'wrong'}}">{{ ($key + 1) }}. {{ $quiz->question }}
                        @if ($quiz->answer == $answers['answer_'.($key + 1)])
                        <i class="material-icons" style="font-size:20px">check_box</i>
                        @else
                        <i class="material-icons" style="font-size:20px">clear</i>  
                        @endif
                    </label>
                    <div class="radio-group">
                        <label class="{{ $quiz->answer == $quiz->choice_one ? 'block correct' : 'block wrong' }}"><input class="mx-2" type="radio" name="answer_{{$quiz->id}}" value="{{$quiz->choice_one}}">{{ $quiz->choice_one }}</label>
                        <label class="{{ $quiz->answer == $quiz->choice_two ? 'block correct' : 'block wrong' }}"><input class="mx-2" type="radio" name="answer_{{$quiz->id}}" value="{{$quiz->choice_two}}">{{ $quiz->choice_two }}</label>
                        <label class="{{ $quiz->answer == $quiz->choice_three ? 'block correct' : 'block wrong' }}"><input class="mx-2" type="radio" name="answer_{{$quiz->id}}" value="{{$quiz->choice_three}}">{{ $quiz->choice_three }}</label>
                        <label class="{{ $quiz->answer == $quiz->choice_four ? 'block correct' : 'block wrong' }}"><input class="mx-2" type="radio" name="answer_{{$quiz->id}}" value="{{$quiz->choice_four}}">{{ $quiz->choice_four }}</label>
                    </div>
                </div>
                @endforeach

                <a class="my-3  btn btn-secondary" href="/">إغلاق الإمتحان</a>

                
            </form>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>