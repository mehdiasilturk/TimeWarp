<!DOCTYPE html>
<html lang="tr">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Hello, world!</title>
</head>
<body>
<div class="container">
<h1 class="text-primary text-center mt-5">Gelecek ve Geçmiş Tarih Hesaplama Formu</h1>
<form action="#" method="get">
  <div class="row">
    <div class="col p-5">
    <label for="inputEmail4" class="form-label">Gün</label>
    <select class="form-select" aria-label="Default select example" name="gun">
  <option selected value="0">Gün giriniz</option>
  <?php 
    for($i=1;$i<33;$i++){
        echo "<option value='$i'>$i</option>";
    }
  ?>
</select>
    </div>
    <div class="col p-5">
    <label for="inputEmail4" class="form-label">Ay</label>
    <select class="form-select" aria-label="Default select example" name="ay">
  <option selected value="0">Ay giriniz</option>
  <?php 
    for($i=1;$i<13;$i++){
        echo "<option value='$i'>$i</option>";
    }
  ?>
</select>
    </div>
    <div class="col p-5">
    <label for="inputEmail4" class="form-label">Yıl</label>
    <select class="form-select" aria-label="Default select example" name="yil">
  <option selected value="0">Yıl giriniz</option>
  <?php 
    for($i=1;$i<451;$i++){
        echo "<option value='$i'>$i</option>";
    }
  ?>
</select>
    </div>
    <div class="row">
    <div class="col p-5">
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="tarih" id="inlineRadio1" value="oncesi" checked>
  <label class="form-check-label" for="inlineRadio1">Geçmişe Dön</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="tarih" id="inlineRadio2" value="sonrasi">
  <label class="form-check-label" for="inlineRadio2">Geleceğe İlerle</label>
</div>
    </div>
    <div class="col p-5">
        <button type="submit" class="btn btn-primary" name="gonder">Hesapla</button>
    </div>
    <div class="col p-5">
    <?php 
        if(isset($_GET["gonder"])){
            $gun = $_GET["gun"];
            $ay = $_GET["ay"];
            $yil = $_GET["yil"];
            $tarih = $_GET["tarih"];
            if($_GET["tarih"]=="sonrasi"){
              echo date("d-n-Y",mktime(0,0,0,date("n")+$ay,date("d")+$gun,date("Y")+$yil)) . "<br>";
            }
            else if($_GET["tarih"]=="oncesi"){
              echo date("d-n-Y",mktime(0,0,0,date("n")-$ay,date("d")-$gun,date("Y")-$yil)) . "<br>";
            }
            else{
              echo "geçersiz tarih seçtiniz";
            }
        }
    ?>
    </div>
</div>
  </div>
</form>
</div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
