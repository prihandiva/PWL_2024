<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Checkout - POS</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
            background-color: #f2f2f2;
        }

        header, footer {
            color: white;
            text-align: center;
            padding: 15px 0;
            background-image: linear-gradient(#01153e, #4b3a26);
        }

        main {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            padding: 30px;
            border-radius: 35px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #01153e;
            text-align: center;
        }
        h1{
            color: #dddddd;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #01153e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tfoot td {
            font-weight: bold;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <header>
        <h1>Checkout</h1>
    </header>

    <main>
        <h2>Rincian Pesanan</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>QTY</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nasi Goreng</td>
                    <td>10.000</td>
                    <td>3</td>
                    <td>30.000</td>
                </tr>
                <tr>
                    <td>Cushion</td>
                    <td>187.000</td>
                    <td>1</td>
                    <td>187.000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total </td>
                    <td>Rp 217.000</td>
                </tr>
            </tfoot>
        </table>
    </main>

    <footer>
        &copy; 2024 POS Application - Jobsheet 02
    </footer>

</body>
</html>
