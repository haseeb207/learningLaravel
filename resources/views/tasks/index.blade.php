<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel learning</title>
    </head>
    <body>
    <div class="content">
        <div class="title m-b-md">
            Laravel, {{$name}}
        </div>
        @if(isset($tasks))
        <ul>
            @foreach($tasks as $task)
                <li><a href="/tasks/{{$task->id}}">{{$task->body}}</a></li>
            @endforeach
        </ul>
        @endif
    </div>
    </body>
</html>
