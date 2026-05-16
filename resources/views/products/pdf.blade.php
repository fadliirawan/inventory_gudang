<!DOCTYPE html>
<html>
<head>

    <title>Data Products</title>

    <style>

        body{
            font-family: Arial, sans-serif;
        }

        table{
            width:100%;
            border-collapse: collapse;
        }

        table, th, td{
            border:1px solid black;
        }

        th, td{
            padding:10px;
            text-align:left;
        }

    </style>

</head>
<body>

    <h2>Data Products</h2>

    <table>

        <thead>

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kode</th>
                <th>Stock</th>
                <th>Harga</th>
            </tr>

        </thead>

        <tbody>

            @foreach($products as $product)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $product->name }}</td>

                <td>{{ $product->code }}</td>

                <td>{{ $product->stock }}</td>

                <td>{{ $product->price }}</td>

            </tr>

            @endforeach

        </tbody>

    </table>

</body>
</html>