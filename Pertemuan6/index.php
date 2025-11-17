<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Tabel Perkalian</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body 
        {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
            min-height: 100vh;
        }
        
        .container 
        {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        
        h1 
        {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
            font-size: 2.5em;
        }
        
        .subtitle 
        {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1em;
        }
        
        .exercise 
        {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
            border-left: 5px solid #667eea;
        }
        
        .exercise h2 
        {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.5em;
        }
        
        .input-group 
        {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
            align-items: center;
        }
        
        .input-group label 
        {
            font-weight: bold;
            color: #333;
        }
        
        .input-group input[type="number"] 
        {
            padding: 10px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            width: 100px;
            transition: border-color 0.3s;
        }
        
        .input-group input[type="number"]:focus 
        {
            outline: none;
            border-color: #667eea;
        }
        
        button 
        {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        button:hover 
        {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        button:active 
        {
            transform: translateY(0);
        }
        
        .result 
        {
            margin-top: 20px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            border: 2px solid #667eea;
        }
        
        table 
        {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        
        th, td 
        {
            padding: 15px;
            text-align: center;
            border: 2px solid #ddd;
            font-size: 16px;
            font-weight: bold;
        }
        
        th 
        {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-size: 18px;
        }
        
        td 
        {
            background: white;
            transition: background-color 0.3s;
        }
        
        td:hover 
        {
            background: #f0f0f0;
        }
        
        .header-row 
        {
            background: #00ff00 !important;
            color: black !important;
        }
        
        .header-col 
        {
            background: #00ff00 !important;
            color: black !important;
        }
        
        .even-result 
        {
            background: #00ffff !important;
        }
        
        .odd-result 
        {
            background: #ffff00 !important;
        }
        
        .number-list 
        {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        
        .number-item 
        {
            background: #667eea;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: bold;
        }
        
        @media (max-width: 768px) {
            .container 
            {
                padding: 15px;
            }
            
            h1 {
                font-size: 1.8em;
            }
            
            table {
                font-size: 12px;
            }
            
            th, td {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📠 Latihan Tabel Perkalian</h1>
        <p class="subtitle">Perkalian, itu mudah bukan?, tidak mudah, Karena ini adalah sebuah implementasi perkalian, bukan sebuah kalimat "mudah"</p>
        
        <!-- Latihan 1 -->
        <div class="exercise">
            <h2>Latihan 1: Tampilkan Bilangan Genap (1-10)</h2>
            <form method="POST" action="">
                <button type="submit" name="latihan1">Tampilkan Bilangan Genap</button>
            </form>
            
            <?php
            if (isset($_POST['latihan1'])) 
            {
                echo "<div class='result'>";
                echo "<h3>Hasil: Bilangan yang hanya miliki nilai genap dari 1 sd 10</h3>";
                echo "<div class='number-list'>";
                
                for ($i = 1; $i <= 10; $i++) 
                {
                    if ($i % 2 == 0) 
                    {
                        echo "<div class='number-item'>$i</div>";
                    }
                }
                
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
        
        <!-- Latihan 2 -->
        <div class="exercise">
            <h2>Latihan 2: Tabel Perkalian</h2>
            <form method="POST" action="">
                <div class="input-group">
                    <label>Masukkan ukuran tabel (1-19):</label>
                    <input type="number" name="ukuran" min="1" max="20" value="10" required>
                    <button type="submit" name="latihan2">Buat Tabel Perkalian</button>
                </div>
            </form>
            
            <?php
            if (isset($_POST['latihan2'])) 
            {
                $ukuran = intval($_POST['ukuran']);
                
                if ($ukuran < 1 || $ukuran > 19) 
                {
                    echo "<div class='result'><p style='color: red;'>Ukuran harus antara 1 sampai 19!</p></div>";
                } 
                else
                {
                    echo "<div class='result'>";
                    echo "<h3>Tabel Perkalian $ukuran × $ukuran</h3>";
                    echo "<p><strong>Keterangan warna:</strong></p>";
                    echo "<ul style='list-style: none; padding: 10px 0;'>";
                    echo "<li>🟢 <span style='background: #00ff00;
                     padding: 2px 10px; border-radius: 3px;'>Hijau</span> = Header (bilangan & label)</li>";
                    echo "<li>🔵 <span style='background: #00ffff;
                     padding: 2px 10px; border-radius: 3px;'>Biru Muda</span> = Hasil perkalian genap</li>";
                    echo "<li>🟡 <span style='background: #ffff00;
                     padding: 2px 10px; border-radius: 3px;'>Kuning</span> = Hasil perkalian ganjil</li>";
                    echo "</ul>";
                    
                    echo "<table>";
                    
                    // Header row
                    echo "<tr>";
                    echo "<th class='header-row'>bilangan</th>";
                    for ($j = 1; $j <= $ukuran; $j++) 
                    {
                        echo "<th class='header-row'>$j</th>";
                    }
                    echo "</tr>";
                    
                    // Data rows
                    for ($i = 1; $i <= $ukuran; $i++) 
                    {
                        echo "<tr>";
                        echo "<td class='header-col'>$i</td>";
                        
                        for ($j = 1; $j <= $ukuran; $j++) 
                        {
                            $hasil = $i * $j;
                            $class = ($hasil % 2 == 0) ? 'even-result' : 'odd-result';
                            echo "<td class='$class'>$hasil</td>";
                        }
                        
                        echo "</tr>";
                    }
                    
                    echo "</table>";
                    echo "</div>";
                }
            }
            ?>
        </div>

    </div>
</body>
</html>
