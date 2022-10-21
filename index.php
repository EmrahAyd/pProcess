<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Üretim Takip</title>
    <script src="js/js.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <!-- <header>
              <!!!?php include 'parts/header.php'; ?>
    </header> -->

    <sidebar>
            <?php include 'parts/sidebar.php'; ?>

    </sidebar>


        <div class="govde" style="padding-top:20px;">

        <table class="table-fill">
          <thead>
            <tr>
              <th class="text-left" width="5px">Sipariş No</th>
              <th class="text-left">Resim</th>
              <th class="text-left">Ürün No</th>
              <th class="text-left">Üretici</th>
              <th class="text-left">Açıklama</th>
              <th class="text-left">Fiyat</th>
              <th class="text-left">Tahmini Teslim</th>
              <th class="text-left">Durum</th>
            </tr>
          </thead>
          <tbody class="table-hover">
            <tr>
              <td class="text-left">1</td>
              <td class="" style="text-aling:center;"><img src="https://www.viyamo.com/Uploads/UrunResimleri/butik-kadin-siyah-tek-kol-dantel-detay--8212-.jpg" alt=""></td>
              <td class="text-left">22543</td>
              <td class="text-left">mahmut</td>
              <td class="text-left">January</td>
              <td class="text-left">$ 50,000.00</td>
              <td class="text-left">21.05.1990</td>
              <td class="text-left">Teslim</td>
            </tr>
            <tr>
              <td class="text-left">2</td>
              <td class=""><img src="https://www.viyamo.com/Uploads/UrunResimleri/buyuk/butik-cepli-beyaz-triko-serit-detayli--be-40c.jpg" alt=""></td>
              <td class="text-left">22543</td>
              <td class="text-left">mahmut</td>
              <td class="text-left">January</td>
              <td class="text-left">$ 50,000.00</td>
              <td class="text-left">21.05.1990</td>
              <td class="text-left">Teslim</td>
            </tr>
            <tr>
              <td class="text-left">3</td>
              <td class=""><img src="https://www.viyamo.com/Uploads/UrunResimleri/butik-kadin-siyah-tek-kol-dantel-detay--8212-.jpg" alt=""></td>
              <td class="">22543</td>
              <td class="text-left">mahmut</td>
              <td class="text-left">January</td>
              <td class="text-left">$ 50,000.00</td>
              <td class="text-left">21.05.1990</td>
              <td class="text-left">Teslim</td>
            </tr>
            <tr>
              <td class="text-left">1</td>
              <td class=""><img src="https://www.viyamo.com/Uploads/UrunResimleri/butik-kadin-siyah-tek-kol-dantel-detay--8212-.jpg" alt=""></td>
              <td class="text-left">22543</td>
              <td class="text-left">mahmut</td>
              <td class="text-left">January</td>
              <td class="text-left">$ 50,000.00</td>
              <td class="text-left">21.05.1990</td>
              <td class="text-left">Teslim</td>
            </tr>
            <tr>
              <td class="text-left">2</td>
              <td class=""><img src="https://www.viyamo.com/Uploads/UrunResimleri/buyuk/butik-cepli-beyaz-triko-serit-detayli--be-40c.jpg" alt=""></td>
              <td class="text-left">22543</td>
              <td class="text-left">mahmut</td>
              <td class="text-left">January</td>
              <td class="text-left">$ 50,000.00</td>
              <td class="text-left">21.05.1990</td>
              <td class="text-left">Teslim</td>
            </tr>
            <tr>
              <td class="text-left">3</td>
              <td class=""><img src="https://www.viyamo.com/Uploads/UrunResimleri/butik-kadin-siyah-tek-kol-dantel-detay--8212-.jpg" alt=""></td>
              <td class="text-left">22543</td>
              <td class="text-left">mahmut</td>
              <td class="text-left">January</td>
              <td class="text-left">$ 50,000.00</td>
              <td class="text-left">21.05.1990</td>
              <td class="text-left">Teslim</td>
            </tr>
            <tr>
              <td class="text-left">1</td>
              <td class=""><img src="https://www.viyamo.com/Uploads/UrunResimleri/butik-kadin-siyah-tek-kol-dantel-detay--8212-.jpg" alt=""></td>
              <td class="text-left">22543</td>
              <td class="text-left">mahmut</td>
              <td class="text-left">January</td>
              <td class="text-left">$ 50,000.00</td>
              <td class="text-left">21.05.1990</td>
              <td class="text-left">Teslim</td>
            </tr>
            <tr>
              <td class="text-left">2</td>
              <td class=""><img src="https://www.viyamo.com/Uploads/UrunResimleri/buyuk/butik-cepli-beyaz-triko-serit-detayli--be-40c.jpg" alt=""></td>
              <td class="text-left">22543</td>
              <td class="text-left">mahmut</td>
              <td class="text-left">January</td>
              <td class="text-left">$ 50,000.00</td>
              <td class="text-left">21.05.1990</td>
              <td class="text-left">Teslim</td>
            </tr>
            <tr>
              <td class="text-left">3</td>
              <td class=""><img src="https://www.viyamo.com/Uploads/UrunResimleri/butik-kadin-siyah-tek-kol-dantel-detay--8212-.jpg" alt=""></td>
              <td class="text-left">22543</td>
              <td class="text-left">mahmut</td>
              <td class="text-left">January</td>
              <td class="text-left">$ 50,000.00</td>
              <td class="text-left">21.05.1990</td>
              <td class="text-left">Teslim</td>
            </tr>
          </tbody>
        </table>

        </div>



    <footer>

    </footer>
    <link rel="stylesheet" href="css/genel.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  <style>
    img {
  height: 60px;
}
    .table-fill {

  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 1200px;
  padding:10% ;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}

th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:8px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}

th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}

tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}

tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}

tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}

tr:nth-child(odd) td {
  background:#EBEBEB;
}

tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}

tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}

td {
  background:#FFFFFF;
  padding: 5px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}

  </style>
</html>
