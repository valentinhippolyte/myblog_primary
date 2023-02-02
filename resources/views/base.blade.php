<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <script src="https://kit.fontawesome.com/064c98cf24.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Base</title>

    <style type="text/css">
    body,
h1,
h2,
h3,
h4,
h5 {
    font-family: "Raleway", sans-serif
}
body{
    height: 100%;
}

.section_welcome{
    margin: 0 5% 0 5%;
    text-align: center;
    margin-top: 50vh;
    transform: translateY(-50%);
}
    </style>
</head>
<body>
    @include('navbar')
    @yield('content')
</body>
</html>