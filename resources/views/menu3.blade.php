<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendidikan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f9;
            padding: 40px 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }

        thead {
            background-color: #0d6efd;
            color: white;
        }

        th,
        td {
            padding: 15px 18px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            font-weight: bold;
        }

        tbody th {
            color: #333;
            background-color: #f8f9fa;
        }

        tbody tr {
            transition: 0.2s ease;
        }

        tbody tr:hover {
            background-color: #eaf3ff;
        }

        tbody td {
            color: #555;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 20px 10px;
            }

            .container {
                padding: 20px;
            }

            h1 {
                font-size: 24px;
            }

            th,
            td {
                padding: 12px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Data Pendidikan</h1>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>SD</th>
                        <th>SMP</th>
                        <th>SMA</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">Satria Mika Narendra</th>
                        <td>SD Kartika Surabaya</td>
                        <td>SMP Negeri 49 Surabaya</td>
                        <td>SMK Antartika 2 Sidoarjo</td>
                    </tr>

                    <tr>
                        <th scope="row">Naila Ivena Maulidiyah</th>
                        <td>SDN 2 Kartoharjo</td>
                        <td>MTsN 5 Nganjuk</td>
                        <td>SMKN 1 Nganjuk</td>
                    </tr>

                    <tr>
                        <th scope="row">Dewi Wardah Sukmaningrum</th>
                        <td>SDN 3 Pelem Kertosono</td>
                        <td>SMPN 2 Kertosono</td>
                        <td>SMAN 1 Kertosono</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
