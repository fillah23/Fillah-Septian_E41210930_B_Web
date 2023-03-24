<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Middleware Check Age</title>
    <style>
        body {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 500px;
            width: 100%;
            display: flex;
            margin-inline: 20px;
            margin-top: 20px;
            flex-direction: column;
            justify-content: center;
            gap: 2;
        }

        input {
            padding-inline: 20px;
            padding-block: 10px;
        }

        button {
            margin-top: 5px;
            background: #0b1ac0;
            color: white;
            border: 0;
            padding-block: 10px;
            border-radius: 5px;
        }
    </style>
</head>


<body>
    <form action="/checkage" method="post">
        @csrf
        <div class="container">
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    <h1>{{ session('error') }}</h1>
                </div>
            @endif

            <input type="number" name="age" placeholder="Input Age">
            <button type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
