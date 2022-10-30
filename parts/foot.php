</div>
    </div>
  </div>

  <footer>

  </footer>
  <link rel="stylesheet" href="css/genel.css?v=1">
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
    background: whitesmoke;
    color: black;
    border-top: 1px solid #22262e;
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
</script>

</html>