<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata SADENA</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Styling CSS Native -->
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px 20px;
        }

        .table-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            padding: 24px;
            max-width: 1100px;
            margin: 0 auto;
        }

        .table-title {
            color: #1e293b;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .custom-table {
            vertical-align: middle;
            border-collapse: separate;
            border-spacing: 0;
        }

        .custom-table thead th {
            background-color: #1e293b;
            color: #ffffff;
            padding: 14px 12px;
            font-size: 14px;
            letter-spacing: 0.5px;
            border: none;
        }

        /* Sudut tumpul untuk header tabel */
        .custom-table thead tr th:first-child {
            border-top-left-radius: 8px;
        }
        .custom-table thead tr th:last-child {
            border-top-right-radius: 8px;
        }

        .custom-table tbody tr {
            transition: background-color 0.2s ease;
        }

        .custom-table tbody tr:hover {
            background-color: #f1f5f9;
        }

        .custom-table td, .custom-table th {
            padding: 14px 12px;
            font-size: 14px;
            color: #334155;
        }

        /* Styling ikon di header */
        .custom-table th i {
            margin-right: 6px;
            color: #38bdf8;
        }

        /* Badge status */
        .badge-status {
            background-color: #e0f2fe;
            color: #0369a1;
            padding: 4px 10px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <div class="table-container">
        <h2 class="table-title">Biodata Anggota SADENA</h2>
        
        <table class="table custom-table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"><i class="bi bi-person-fill"></i> NAMA</th>
              <th scope="col"><i class="bi bi-book"></i> PRODI</th>
              <th scope="col"><i class="bi bi-backpack2"></i> JURUSAN</th>
              <th scope="col"><i class="bi bi-calendar"></i> TEMPAT TANGGAL LAHIR</th>
              <th scope="col"><i class="bi bi-emoji-laughing"></i> STATUS</th>
              <th scope="col"><i class="bi bi-person-arms-up"></i> HOBI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Satria Mika Narendra</td>
              <td>Teknik Informatika</td>
              <td>Teknologi Informasi</td>
              <td>Surabaya, 15 Agustus 2007</td>
              <td><span class="badge-status">Mahasiswa</span></td>
              <td>Basket, Ngoding, Renang</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Naila Ivena Maulidiyah</td>
              <td>Teknik Informatika</td>
              <td>Teknologi Informasi</td>
              <td>Nganjuk, 17 April 2007</td>
              <td><span class="badge-status">Mahasiswa</span></td>
              <td>Membaca Novel</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Dewi Wardah Sukmaningrum</td>
              <td>Teknik Informatika</td>
              <td>Teknologi Informasi</td>
              <td>Nganjuk, 12 Januari 2007</td>
              <td><span class="badge-status">Mahasiswa</span></td>
              <td>Berenang</td>
            </tr>
          </tbody>
        </table>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>