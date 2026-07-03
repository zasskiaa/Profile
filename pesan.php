<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
    

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container{
            display: flex;
            justify-content: center;
        }

        .kotak-form{
            width: 400px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .main-title{
            text-align: center;
            color: #007BFF;
        }

        label{
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input,
        textarea{
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea{
            height: 120px;
            resize: vertical;
        }

        button{
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover{
            background-color: #0056b3;
        }
    </style>
</head>
<body>

   <!-- <?php 
        if(isset($_GET['status'])){
            $status = $_GET['status'];
            echo "<div style='background-color:#228B22; color: white; padding: 10px; border-radius: 35px; margin-bottom: 50px; text-align: center; font-size: 14px; '>" ;

            if($status == "sukses"){
                echo "Pesan anda berhasil ditambahkan!";
            } 

            echo "</div>";
        }
        
        ?> -->

    <h2 class="main-title"><a href="dashboard.php" style="text-decoration: none; color: #007BFF">✨Form Kirim Pesan✨</a></h2>

    <div class="container">
        <div class="kotak-form">

            <form action="proses.php" method="POST">

            <?php 
        if(isset($_GET['status'])){
            $status = $_GET['status'];
            echo "<div style='background-color:#228B22; color: white; padding: 7px; border-radius: 35px; margin-bottom: 50px; text-align: center; font-size: 14px; '>" ;

            if($status == "sukses"){
                echo "Pesan anda berhasil ditambahkan!";
            } 

            echo "</div>";
        }
        
        ?>

                <label>Nama Kamu</label>
                <input type="text"
                       name="nama"
                       required
                       placeholder="Masukkan nama Anda">

                <label>Email</label>
                <input type="email"
                       name="email"
                       required
                       placeholder="contoh@gmail.com">

                <label>Pesan yang Ingin Disampaikan</label>
                <textarea name="pesan"
                          required
                          placeholder="Silakan tulis pesan Anda"></textarea>

                <button type="submit" name="btn-kirim">
                    Send Message
                </button>

               <br>

              <a href="form.php" 
            style="display:block; 
        
            text-align:center;
            margin-top:10px; 
            color: red; 
            font-size: 13px;
            text-decoration: none;
            font-family: inherit;
            ">
            <b>Batal & kembali</b></a>

                

            </form>

        </div>
    </div>

</body>
</html>