<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="Dave Sammy Mulyawan">
    <title>Kalkulator</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <br>
    <label for="">Angka Pertama</label>
    <input type="text" id="Angka1">
    <br>
    <label for="">Angka Kedua</label>
    <input type="text" id="Angka2">
    <br>
    <label for="">Operator</label>
    <input type="text" id="Operator">
    <br>
    <label for="">Hasil</label>
    <input type="text" id="Hasil">
    <br>
<script>
    function ftambah(){
        hasil.value = Number(angka1.value) +Number(angka2.value);
    }
    function fkurang(){
        hasil.value = Number(angka1.value) -Number(angka2.value);
    }
    function fkali(){
        hasil.value = Number(angka1.value) *Number(angka2.value);
    }
    function fbagi(){
        hasil.value = Number(angka1.value) /Number(angka2.value);
    }
</script>
    <input type="submit" value="Submit" name="btnSubmit">
    <input type="reset" value="Reset">
</body>
</html>