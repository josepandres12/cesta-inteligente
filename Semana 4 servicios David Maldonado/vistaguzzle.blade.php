<html>
<head>
</head>
<body>
    
    @foreach ($listadoPosts as $row)
        <h1>{{$row->title}}</h1>
        <p>{{$row->body}}</p>
    @endforeach
        
</body>
</html>