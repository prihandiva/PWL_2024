<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>User Profile - POS</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f2f2f2;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 50px;
            border-radius: 35px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #01153e;
            margin-bottom: 30px;
            font-size: 36px;
        }

        p {
            color: #4b3a26;
            font-size: 20px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Profile</h1>
        <p>ID: {{ $id }}</p>
        <p>Name: {{ $name }}</p>
    </div>
    
</body>
</html>
