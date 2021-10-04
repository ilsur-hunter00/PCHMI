<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Lab 1</title>
</head>
<body>
    
    <div id="app">
        <begin-component></begin-component>

        <numbers></numbers>
        <numbers-check></numbers-check>
        <numbers-result></numbers-result>
        <pictograms></pictograms>
        <pictorams-check></pictorams-check>
        <pictograms-result></pictograms-result>

        <numbers-words></numbers-words>
        <numbers-words-check></numbers-words-check>
        <numbers-words-result></numbers-words-result>

        <main-result></main-result>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>