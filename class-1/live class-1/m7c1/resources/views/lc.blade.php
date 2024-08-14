<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10</title>
</head>
<body>

   {{-- <h1>Hello from View</h1>
    <h2>Location = {{$name}}</h2>
    <h2>Location = {{$country}}</h2>
    <h2>Location = {{$population}}</h2>

    --}}
    

     <h1>Hello from View</h1>
    <h2>Location = {{$location['name']}}</h2>
   
   {{-- <h2>Seasons = {{$seasons[0]}}</h2> --}}

   <h2>Seasons = {{join(",",$seasons)}}</h2> 
    
</body>
</html>