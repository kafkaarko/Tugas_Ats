<?php

function pertambahan($bil_1 , $bil_2){
    return $bil_1 + $bil_2;
}
function perkalian($bil_1 , $bil_2){
    return $bil_1 * $bil_2;
}
function pengurangan($bil_1 , $bil_2){
    return $bil_1 - $bil_2;
}
function pembagian($bil_1 , $bil_2){
    if ($bil_1 != 0) {
        return $bil_1 / $bil_2;
    } else {
        return "Cannot divide by zero.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: url();
            background-size: cover;
        }
        .judul{
            display: flex;
            justify-content: center;
        }
        .wrap{
            width: 800px;
            background-color: #59D5E0;
    
            height: 500px;
        }
        label{
            display: block;
            height: 30px;
        }
        input[type="number"]{
        font-family: Arial, Helvetica, sans-serif;
        height: 30px;
        border: white;
        width: 160px;
        }
        .gabung{
            display: flex;
            gap: 2cm;
            justify-content: center ;
            margin-top: 120px;
            margin-left: 6px;
        }
        .flex{
            display: flex;
            justify-content: center;
            
        }
        .bung{
            
            width: 400px;
            margin-bottom: 7px;
              
            
        }
        .hasil{
            margin-top: 20px;
        }
        select{
            font-family: Arial, Helvetica, sans-serif;
        height: 30px;
        border: white;
        width: 420px;
        transition: 0.5s;
        }
        select:hover{
            background: #FFE7E7;
            transition: 0.5s;

        }
       button{
        font-family: Arial, Helvetica, sans-serif;
        height: 30px;
        border: white;
        width: 420px;
        margin-right: 100px;
        background: #9BCF53;
        transition: 0.5s;
       }
       button:hover{
        background: #BFEA7C;
        transition: 0.5s;
       }
       .beng{
       display: flex;
       justify-content: center;
       }
       h1{
        font-family: Arial, Helvetica, sans-serif;
       }
       option{
        font-family: Arial, Helvetica, sans-serif;
        height: 30px;
        border: white;
        width: 420px;
        align-items: center;
       }
    </style>
</head>
<body>
    <h1 class="judul">kalkulator</h1>
    <div class="flex">

        <div class="wrap">
    <form action="" method="post">
        <div class="gabung">


            <div class="pertama">
    
                <label for="satu" >Bilangan Pertama *</label>
                <input type="number" name="bilangan_pertama" id="satu" placeholder="masukan angka 1">
            </div>
            <div class="kedua">
    
                <label for="dua">Bilangan Kedua *</label>
                <input type="number" name="bilangan_kedua" id="dua"  placeholder="masukan angka 2">
            </div>
        </div>
        <br>
        <div class="beng">

            <div class="bung">
                
                <div class="label">
        
                    <label for="angka">pilih operator aritmatika</label>
                    <select id="angka" name="op">
                        <option value="" disabled selected hidden>-- pilih operator --</option>
                        <option value="pertambahan">+</option>
                        <option value="pengurangan">-</option>
                        <option value="perkalian">*</option>
                        <option value="pembagian">/</option>
                    </select>
                    
                    </div>
                <div class="bang">
    
                    <div class="hasil">
            
                        <button type="submit" name="kirim"><b>hasilnya</b></button>
                    </div>
                
                </div>
                </div>
        </div>
           
    </form>

    <h1 style="text-align: center;">
    <?php
        if(isset($_POST['kirim'])){
            if(isset($_POST['op']) && isset($_POST['bilangan_pertama']) && isset($_POST['bilangan_kedua'])){
                $pilihOp = $_POST['op'];
                $bilangan_satu = $_POST['bilangan_pertama'];
                $bilangan_dua = $_POST['bilangan_kedua'];
        
                if($pilihOp == "pertambahan"){
                    $hasilTambah = pertambahan($bilangan_satu, $bilangan_dua);
                    echo"<b>" . "$bilangan_satu ". "+" ." $bilangan_dua" . " = " .$hasilTambah . "</b>";
                }elseif($pilihOp == "pengurangan"){
                    $hasilPengurangan = pengurangan($bilangan_satu , $bilangan_dua);
                    echo"<b>" . "$bilangan_satu ". "-" ." $bilangan_dua" . " = " .$hasilPengurangan. "</b>";
                }elseif($pilihOp == "perkalian"){
                    $hasilkali = perkalian($bilangan_satu,$bilangan_dua);
                    echo"<b> " . "$bilangan_satu ". "x" ." $bilangan_dua" . " = " .$hasilkali. "</b>";
                }elseif($pilihOp == "pembagian"){
                    $hasilBagi = pembagian($bilangan_satu , $bilangan_dua);
                    echo"<b> " . "$bilangan_satu " . ":" . " $bilangan_dua" . " = " .$hasilBagi. "</b>";
                }
            }else{
                $pesan = "pilih dahulu operator yang mau di jalankan";
                echo $pesan;
            }
        }
        ?>
</h1>
</div>
    </div>
</body>
</html>
