<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.J. Habibie - Presiden ke-3 RI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #8B0000;
            padding: 15px;
            text-align: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }
        .navbar a:hover {
            background-color: #a52a2a;
        }
        .hero {
            background: url('https://upload.wikimedia.org/wikipedia/commons/5/5a/BJ_Habibie%2C_President_of_Indonesia_%281998%29.jpg') no-repeat center center/cover;
            height: 350px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
        }
        .content {
            padding: 10px;
            text-align: center;
        }
        .biografi {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 5px;
        }
        .biografi img {
            width: 200px;
            border-radius: 10px;
            margin-bottom: 5px;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .footer {
            background-color: #8B0000;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="navbar">
    <a href="dashboard.php">Biografi</a>
        <a href="masa_pemerintahan.php">Masa Pemerintahan</a>
        <a href="prestasi.php">Prestasi</a>
        <a href="priode.php">Priode Kepresidenan</a>
        <a href="karya.php">Karya</a>
    </div>
    <div class="hero">
        <h1>B.J. Habibie - Presiden ke-3 Republik Indonesia</h1>
    </div>
    <div class="content" id="biografi">
        <h2>Biografi Singkat</h2>
        <div class="biografi">
            <img src="aset/Gambar WhatsApp 2025-03-13 pukul 13.01.27_66556921.jpg" alt="B.J. Habibie">
            <table>
                <tr>
                    <th>Nama</th>
                    <td>Bacharuddin Jusuf Habibie</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>25 Juni 1936</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>Parepare, Sulawesi Selatan</td>
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>Presiden ke-3 Republik Indonesia (1998-1999)</td>
                </tr>
                <tr>
                    <th>Pasangan</th>
                    <td>Hasri Ainun Habibie</td>
                </tr>
                <tr>
                    <th>Wafat</th>
                    <td>11 September 2019</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2025 Habibie.</p>
    </div>
</body>
</html>
