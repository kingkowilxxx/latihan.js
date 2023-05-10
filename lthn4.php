<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> larihan 4 </title>
</head>
<body>
    <h1>luas segitiga</h1>

    <div>
        alas 
        <input type="text" id="txAlas" name="txAlas" pacheolder="masukan alas">
    </div>
    <div>
        tinggi 
        <input type="text" id="txTinggi" name="txTinggi" pacheolder="masukan tinggi">
    </div>
    <div>
        <button type="submit" id="btn">kirim</button>
    </div>
    <div style="display: none;" id="result"></div>

    <script> 
         const btn= document.getElementById('btn')
         btn.addEventListener('click', function(){
            let alas =document.getElementById('txAlas').value;
            let tinggi =document.getElementById('txTinggi').value;

            let reslt= (alas * tinggi)/2;
            alert("hasil luas segitiga :"+reslt);
         })
    </script>
</body>
</html>