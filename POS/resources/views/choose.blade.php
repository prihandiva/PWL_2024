<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Home - POS</title>
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

        button {
            padding: 15px 25px;
            background-color: #01153e;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
            margin: 10px;
            border-radius: 35px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4b3a26;
        }
    </style>

    <body>
        <div class="container">
        <h1>Choose Product</h1> 
<button onclick="window.location.href='category/food-beverage'">Food & Beverage</button>
<button onclick="window.location.href='category/beauty-health'">Beauty & Health</button>
<button onclick="window.location.href='category/home-care'">Home Care</button>
<button onclick="window.location.href='category/baby-kid'">Baby & Kid</button>
<h4>FITRIA RAMADHANI PRIHANDIVA - SIB 3D - 17</h4>
<h6>JOBSHEET 2 - ROUTING, CONTROLLER, VIEW</h6>
        </div>
    </body>
</head>
<html>