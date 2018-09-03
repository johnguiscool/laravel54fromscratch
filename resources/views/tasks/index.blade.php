<html>

<head>

    <title></title>

</head>

<body>

  <h1>Hello {{ $name }} </h1>

  @foreach ($tasks as $task)

    <li> <a href="/tasks/{{$task->id}}"> {{$task->body}} </a> </li>

  @endforeach


</body>

</html>