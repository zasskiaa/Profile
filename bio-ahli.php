<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bio-ahli</title>

    <!-- Style -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            min-height: 100vh;
        }

        .wrapper{
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px;
        }

        .card-profile{
            width: 400px;
            background: #ffffff;
            padding: 30px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);

            transition: all 0.3s ease;
        }

        .card-profile:hover{
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.15);
        }

        #judul{
            color: #3d5994;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .poto-profile{
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #dbe4f3;
            margin-bottom: 20px;

            transition: transform 0.3s ease;
        }

        .poto-profile:hover{
            transform: scale(1.05);
        }

        p{
            color: #555;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        /* Tombol Menu */
        .card-profile a{
            display: inline-block;
            width: 85%;
            padding: 12px;
            margin: 8px 0;

            background-color: #3d5994;
            color: white;
            text-decoration: none;
            font-weight: 600;

            border-radius: 8px;

            transition: all 0.3s ease;
        }

        .card-profile a:hover{
            background-color: #2e4475;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(61,89,148,0.3);
        }

        /* Tombol Back */
        .back-btn{
            margin-top: 20px;
            padding: 10px 25px;

            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;

            transition: all 0.3s ease;
        }

        .back-btn:hover{
            background-color: #545b62;
            transform: translateY(-2px);
        }

        @media (max-width: 500px){

            .card-profile{
                width: 95%;
            }

            .poto-profile{
                width: 150px;
                height: 150px;
            }

            #judul{
                font-size: 24px;
            }
        }
    </style>

</head>
<body>


<div class="wrapper">

    <div class="card-profile">

        <h1 id="judul">✨Hobi dan Keahlianku✨</h1>

        <img src="foto/profile.jpeg"
                alt="pp"
                class="poto-profile">

        <p style="font-size:13px;">
            Hai, namaku <strong>Zaskia.</strong><br>
            Ingin mengenalku lebih lanjut?
            Silakan tekan opsi yang ada di bawah ini
            untuk mengetahui beberapa hal tentang diriku.
        </p>


        <!-- Menu pilihan -->
        <a href="hobi.php">📍Hobi Ku</a>

        <a href="keahlian.php">💡Keahlianku</a>

    </div>

    <a href="form.php" class="back-btn"><- Back</a>

</div>

</body>
</html>