<html>

<head>

    <title></title>

</head>

<body>

  <h1>Hello {{ $name }} </h1>

  @foreach ($tasks as $task)

    <li> {{$task}} </li>

  @endforeach


</body>

</html>