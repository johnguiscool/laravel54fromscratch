<html>

<head>

    <title></title>

</head>

<body>

  <h1>Hello {{ $name }} </h1>

  @foreach ($tasks as $task)

    <li> {{$task->body}} </li>

  @endforeach


</body>

</html>