<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Üretim Takip</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="padding-left: 60px;padding-right: 15px;">

  <!-- <header>
              <!!!?php include 'parts/header.php'; ?>
    </header> -->

  <sidebar class="">
    <?php include 'parts/sidebar.php';
          include 'parts/baglan.php';
    ?>

  </sidebar>
  <div class="row">
    <div class="col-12">
      <div class="govde flex" style="padding-top:50px;">

        <div class="search-wrapper searchBox flex">
          <form style="align-items: flex-end;">
            <input type="text" name="focus" required id="search" autocomplete="off" class="search-box" histoy placeholder="Ara..." />
            <button class="close-icon" type="reset"></button>
          </form>
        </div>

        <table class="table-fill">
          <thead>
            <tr>
              <th class="text-left number-column" width="5%" style="font-size: 1rem;"><a href="#">Sipariş No</a></th>
              <th class="text-left" width="10%"><a href="#">Resim</a></th>
              <th class="text-left number-column" width="7.5%"><a href="#">Ürün Kod</a></th>
              <th class="text-left" width="7.5%"><a href="#">Ürün Adı</a></th>
              <th class="text-left" width="7.5"><a href="#">Üretici</a></th>
              <th class="text-left" width="17.5%"><a href="#">Açıklama</a></th>
              <th class="text-left" width="10%"><a href="#">Fiyat</a></th>
              <th class="text-left" width="10%"><a href="#">Tahmini Teslim</a></th>
              <th class="text-left" width="10%"><a href="#">Notlar</a></th>
              <th class="text-left" width="7.5%"><a href="#">Durum</a></th>
              <th class="text-left" width="7.5%"><a href="#">Düzenle</a></th>

            </tr>
          </thead>
          <tbody class="table-hover">

              <?php

              $sip=$db->prepare("SELECT * FROM process");
              $sip->execute();
              foreach( $sip as $cek ) {

              ?>

            <tr>
              <td class="text-center number-column"> <?php echo $cek['sipno'];?> </td>
              <td class="text-center" style="text-aling:center;"><img src="<?php echo $cek['resim'];?>" alt=""></td>
              <td class="text-left views-field views-field-nid number-column"><?php echo $cek['urunkod'];?></td>
              <td class="text-left "><?php echo $cek['namei'];?></td>
              <td class="text-left ">uretici</td>
              <td class="text-left "><?php echo $cek['maliyet'];?></td>
              <td class="text-left  number-column"><?php echo $cek['miat'];?></td>
              <td class="text-left"><?php echo $cek['aciklama'];?> </td>
              <td style="width: 5px;">Teslim microtime</td>
              <td style="width: 5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
              <td style="width: 5px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
            </tr>

            <?php
          };
            ?>

          </tbody>
        </table>

      </div>
    </div>
  </div>

  <footer>

  </footer>
  <link rel="stylesheet" href="css/genel.css?v=2">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

<style>
  .rkucuk {
    width: 100px;
  }

  /* searchbar */

  .redfamily {
    color: red;
  }

  .search-box,
  .close-icon,
  .search-wrapper {
    position: relative;
    padding: 10px;
  }

  .search-wrapper {
    width: 100%;
    margin: auto;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
  }

  .search-box {
    width: 80%;
    border: 1px solid #ccc;
    outline: 0;
    border-radius: 15px;
  }

  .search-box:focus {
    box-shadow: 0 0 15px 5px #bebede;
    border: 2px solid #bebede;
  }

  .close-icon {
    border: 1px solid transparent;
    background-color: transparent;
    display: inline-block;
    vertical-align: middle;
    outline: 0;
    cursor: pointer;
  }

  .close-icon:after {
    content: "X";
    display: block;
    width: 15px;
    height: 15px;
    position: absolute;
    background-color: #fa9595;
    z-index: 1;
    right: 35px;
    top: 0;
    bottom: 0;
    margin: auto;
    padding: 2px;
    border-radius: 50%;
    text-align: center;
    color: white;
    font-weight: normal;
    font-size: 12px;
    box-shadow: 0 0 2px #e50f0f;
    cursor: pointer;
  }

  .search-box:not(:valid)~.close-icon {
    display: none;
  }

  img {
    height: 60px;
  }

  .table-fill {

    background: white;
    border-radius: 3px;
    border-collapse: collapse;
    height: 320px;
    margin: auto;
    width: 100%;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    animation: float 5s infinite;
  }

  th {
    color: black;

    background: whitesmoke;
    border-bottom: 4px solid #9ea7af;
    border-right: 1px solid #343a45;
    font: size 15px;
    font-weight: 200px;
    padding: 8px;
    text-align: center;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    vertical-align: middle;
  }

  th:first-child {
    border-top-left-radius: 3px;
  }

  th:last-child {
    border-top-right-radius: 3px;
    border-right: none;
  }

  tr {
    border-top: 1px solid #C1C3D1;
    border-bottom-: 1px solid #C1C3D1;
    color: black;
    font-weight: bold;
    text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
  }

  tr:hover td {
    background: #f0fcdd;
    color: black;
    border-top: 2px solid #22262e;
    border-bottom: 2px solid #22262e;

  }

  tr:first-child {
    border-top: none;
  }

  tr:last-child {
    border-bottom: none;
  }

  tr:nth-child(odd) td {
    background: whitesmoke;
  }

  tr:nth-child(odd):hover td {
    background: #f0fcdd;
  }

  tr:last-child td:first-child {
    border-bottom-left-radius: 3px;
  }

  tr:last-child td:last-child {
    border-bottom-right-radius: 3px;
  }

  td {
    background: #C1C3D1;
    padding: 5px;
    text-align: left;
    vertical-align: middle;
    font-weight: 300;
    font-size: 18px;
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

  a {
    text-decoration: none;
    color: black;
  }

  a:hover {
    color: black;
  }
</style>
<script src="js/js.js"></script>

<script>
  $('#search').keyup(function() {
    var val = $(this).val().toLowerCase();
    $(".table-fill > tbody > tr").hide();
    $("td").each(function() {
      if ($(this).text().indexOf(val) != -1)
        $($(this).parent()).show();
    });
  })



  /**
 * Determines the sort function return value.
 *
 * @param a any
 *   The first row's cell value to compare.
 * @param b any
 *   The second row's cell value to compare.
 * @param n boolean
 *   If the column's class list contains 'num'.
 *
 * @return number
 *   The comparison value to use when sorting.
 */
function OrderBy(a, b, n) {
        if (n) return a - b;
        if (a < b) return -1;
        if (a > b) return 1;
        return 0;
      }

      /**
       * Removes sort classes from cells not in the column of the clicked header.
       *
       * @param $table object
       *   The JQuery context to clear cells within.
       * @param $excludeIndex number
       *   The clicked TH element's index.
       */
      function clearSortClasses($table, $excludeIndex) {
        $table
          .find("th, td")
          // Ignore cells that are in the newly selected column.
          .filter(function (i) {
            return $(this).index() !== $excludeIndex;
          })
          // Remove all classes we care about.
          .removeClass("selected asc desc");
      }

      $("th a").click(function () {
        // Look up the element clicked and its parent table.
        const $th = $(this).closest("th");
        const $table = $th.closest("table");
        // Determine the state of the column for sort.
        const isSelected = $th.hasClass("selected");
        const sortOrder = $th.hasClass("asc") ? "desc" : "asc";
        const column = $th.index();
        // Remove the sort classes from all other columns' cells.
        clearSortClasses($table, column);
        // Determine and set the direction of sort on the column.
        $th.removeClass("asc desc selected").addClass(sortOrder + " selected");
        // Apply the 'input' class to a TH to reference the input
        // element within the TD for the value to compare for sort.
        const isInput = $th.hasClass("input");
        const isNum = $table
          .find("tbody > tr")
          .children("td")
          .eq(column)
          .hasClass("number-column");
        const rows = $table.find("tbody > tr").get();
        rows.sort(function (rowA, rowB) {
          let keyA, keyB;
          if (isInput) {
            keyA = $(rowA)
              .children("td")
              .eq(column)
              .children("input")
              .val()
              .toUpperCase();
            keyB = $(rowB)
              .children("td")
              .eq(column)
              .children("input")
              .val()
              .toUpperCase();
          } else {
            keyA = $(rowA).children("td").eq(column).text().toUpperCase();
            keyB = $(rowB).children("td").eq(column).text().toUpperCase();
          }
          if (isNum) {
            keyA = parseInt(keyA);
            keyB = parseInt(keyB);
          }
          if (sortOrder === "asc") return OrderBy(keyA, keyB, isNum);
          return OrderBy(keyB, keyA, isNum);
        });
        $.each(rows, function (index, row) {
          // Set the cell in the clicked column as selected in this row.
          $(row).children("td").eq(column).addClass("selected");
          // Add the row back into the table body.
          $table.children("tbody").append(row);
        });
        return false;
      });

</script>
<script src="js/js.js"></script>


</html>