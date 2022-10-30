<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include 'parts/baglan.php';

    if(isset($_POST["submit"])){

      $namei = $_POST["name"];
      $urunkod = $_POST["urunkod"];
      $maliyet = $_POST["maliyet"];
      $utip = $_POST["utip"];
      $aciklama = $_POST["aciklama"];
      $miat= $_POST["miat"];


      $target_dir = "img/";
      $target_file = basename($_FILES["img"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $newname=time().".".$imageFileType;
      $target_file=$target_dir.$newname;
      $check = getimagesize($_FILES["img"]["tmp_name"]);
      if($check !== false) {

        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {

          $update=$db->prepare("INSERT INTO process SET namei=:namei,urunkod=:urunkod,maliyet=:maliyet,resim=:resim,utip=:utip,aciklama=:aciklama,miat=:miat");

          $update->execute(array(

					'namei' => $namei,
					'urunkod' => $urunkod,
					'maliyet' => $maliyet,
					'resim' => "img/".$newname,
					'utip' => $utip,
					'aciklama' => $aciklama,
					'miat' => $miat

					));

            if ($update) {

                header("Location:teklifac.php?durum=ok");exit;

                        }
            } else {

                    header("Location:teklifac.php?durum=norr");exit;
                }
          }


    }


    ?>



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/genel.css?v=1">

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<sidebar class="">
  <?php include 'parts/sidebar.php'; ?>

</sidebar>
    <div class="container">
        <main id="main" class="container">
            <div class="row">
               <div class="col-xs-12 col-lg-offset-3 col-lg-6">
                  <div class="m-b-md text-center">
                     <h1 id="title">Teklif Ürün Girişi</h1>
                     <p id="description" class="description" class="text-center">Tüm seçenekleri doldurun</p>
                  </div>
                  <form enctype="multipart/form-data" method="POST" action="teklifac.php" id="survey-form" name="survey-form">
                     <fieldset>
                        <label for="name" id="name-label">
                        Ürün Adı *
                        <input class="" type="text" id="name" name="name" placeholder="Ürün Adı" required />
                        </label>
                     </fieldset>
                     <fieldset>
                        <label for="urunkod" id="urunkod-label">
                        Ürün Kodu *
                        <input class="" type="number" id="urunkod" name="urunkod" placeholder="Ürün kodu" required />
                        </label>
                     </fieldset>
                     <fieldset>
                        <label for="maliyet" id="maliyet-label">
                        Maliyet Beklenti*
                        <input class="" type="number" id="maliyet" name="maliyet" placeholder="$ maliyet" required />
                        </label>
                     </fieldset>
                     <fieldset>
                        <label for="miat" id="miat-label">
                        Maliyet Beklenti*
                        <input class="" type="date" id="miat" name="miat" placeholder="" required />
                        </label>
                     </fieldset>
                     <fieldset>
                        <label for="resim" id="resim-label">
                        Ana Resim *
                        <input class="" type="file" id="resim"  name="img" required />
                        </label>
                     </fieldset>
                     <fieldset>
                        <label for="utip">
                           Ürün tipi *
                           <select id="utip" name="utip" class="m-t-xs">
                              <option value="elbise" selected>Elbise</option>
                              <option value="bluz">Bluz</option>
                              <option value="patolon">Pantalon/Jean</option>
                              <option value="takim">Takım</option>
                              <option value="other">Diğer</option>
                           </select>
                        </label>
                     </fieldset>
                     <!-- <fieldset>
                        <div class="labels">
                           How likely is that you would recommend freeCodeCamp to a friend? *
                        </div>
                        <label class="m-b-xs">
                        <input type="radio" name="survey-form-gender" value="definitely" checked /> Definitely
                        </label>
                        <label class="m-b-xs">
                        <input type="radio" name="survey-form-gender" value="maybe" /> Maybe
                        </label>
                        <label class="m-b-xs">
                        <input type="radio" name="survey-form-gender" value="notSure" /> Not sure
                        </label>
                     </fieldset> -->
                     <!-- <fieldset>
                        <label for="survey-form-like">
                           What do you like most in FCC:
                           <select id="survey-form-like" name="survey-form-like" class="m-t-xs">
                              <option value="challenges" selected>Challenges</option>
                              <option value="projects">Projects</option>
                              <option value="community">Community</option>
                              <option value="openSource">Open Source</option>
                           </select>
                        </label>
                     </fieldset> -->
                     <!-- <fieldset>
                        <div class="labels">
                           Things that should be improved in the future (Check all that apply):
                        </div>
                        <label for="survey-form-improve1" class="m-b-xs">
                        <input type="checkbox" id="survey-form-improve1" value="feProjects">
                        Front-end Projects
                        </label>
                        <label for="survey-form-improve2" class="m-b-xs">
                        <input type="checkbox" id="survey-form-improve2" value="beProjects">
                        Back-end Projects
                        </label>
                        <label for="survey-form-improve3" class="m-b-xs">
                        <input type="checkbox" id="survey-form-improve3" value="dataVisualization">
                        Data Visualization
                        </label>
                        <label for="survey-form-improve4" class="m-b-xs">
                        <input type="checkbox" id="survey-form-improve4" value="challenges">
                        Challenges
                        </label>
                        <label for="survey-form-improve5" class="m-b-xs">
                        <input type="checkbox" id="survey-form-improve5" value="openSources">
                        Open Source Community
                        </label>
                        <label for="survey-form-improve6" class="m-b-xs">
                        <input type="checkbox" id="survey-form-improve6" value="gitter">
                        Gitter help rooms
                        </label>
                        <label for="survey-form-improve7" class="m-b-xs">
                        <input type="checkbox" id="survey-form-improve7" value="videos">
                        Videos
                        </label>
                        <label for="survey-form-improve8" class="m-b-xs">
                        <input type="checkbox" id="survey-form-improve8" value="meetup">
                        City Meetups
                        </label>
                        <label for="survey-form-improve9" class="m-b-xs">
                        <input type="checkbox" id="survey-form-improve9" value="wiki">
                        Wiki
                        </label>
                        <label for="survey-form-improve10" class="m-b-xs">
                        <input type="checkbox" id="survey-form-improve10" value="forum">
                        Forum
                        </label>
                        <label for="survey-form-improve11" class="m-b-xs">
                        <input type="checkbox" id="survey-form-improve11" value="additional">
                        Additional Courses
                        </label>
                     </fieldset> -->
                     <fieldset>
                        <label for="aciklama">
                        Açıklamalar
                        <textarea id="aciklama" name="aciklama" maxlength="200"></textarea>
                        </label>
                     </fieldset>
                     <button id="submit" type="submit" name="submit" class="btn">Gönder ve Kaydet </button>
                  </form>

               </div>
            </div>
         </main>

         <style>
            @charset "UTF-8";
        .m-b-xs {
          margin-bottom: 2%;
        }

        .m-b-md {
          margin-bottom: 10%;
        }

        .m-t-xs {
          margin-top: 2%;
        }

        .m-t-sm {
          margin-top: 5%;
        }

        * {
          outline: 0 !important;
        }

        body {
          padding: 2% 0;
          color: black;
        }

        h1 {
          font-family: "Roboto", sans-serif;
          font-size: 2.2em;
          font-weight: 300;
          color: #000000;
          font-weight: bolder;
        }

        p {
          font-family: "Roboto", sans-serif;
          font-size: 1.1em;
          font-weight: 300;
          color: black;
        }

        a {
          color:black;
        }
        a:hover {
          text-decoration: none;
          color:black;
        }

        #survey-form label,
        #survey-form .labels {
          display: block;
          margin-bottom: 2%;
          font-family: "Roboto", sans-serif;
          font-size: 1.1em;
          font-weight: 300;
          color: black;
          letter-spacing: 0.5px;
        }
        #survey-form input::-webkit-input-placeholder {
          color: rgb(189, 187, 187) !important;
        }
        #survey-form input::-moz-placeholder {
          color: transparent !important;
        }
        #survey-form input:-ms-input-placeholder {
          color: transparent !important;
        }
        #survey-form input:-moz-placeholder {
          color: transparent !important;
        }
        #survey-form input,
        #survey-form select {
          display: block;
          width: 100%;
          overflow: hidden;
          outline: none;
          border: 2px solid #333;
        }
        #survey-form input {
          margin-top: 1.5%;
          padding: 0 0 5px 0;
          background: transparent;
          border: none;
          outline: none;
          border-bottom: 2px solid black;
          font-size: 1.1em;
          font-weight: 300;
          color: black;
        }
        #survey-form input:focus {
          border-color: #85ffc7;
        }
        #survey-form [type=checkbox],
        #survey-form [type=radio] {
          display: inline-block;
          width: auto;
          margin: 0px 10px 0 0;
        }
        #survey-form [type=checkbox],
        #survey-form [type=radio] {
          display: inline-block;
          margin: 0 10px 0 0 !important;
          position: relative;
          top: 5px;
          right: 0;
          bottom: 0;
          left: 0;
          -webkit-appearance: none;
          -moz-appearance: none;
          -o-appearance: none;
          appearance: none;
          height: 23px;
          width: 23px;
          transition: all 0.15s ease-out 0s;
          background:rgb(231, 226, 226);
          color: rgb(36, 34, 34);
          cursor: pointer;
          outline: none;
          z-index: 1000;
          border: 1px solid #fff;
        }
        #survey-form [type=checkbox]:hover,
        #survey-form [type=radio]:hover {
          border-color: black;
        }
        #survey-form [type=checkbox]:checked:before,
        #survey-form [type=radio]:checked:before {
          display: inline-block;
          height: 21px;
          width: 21px;
          position: relative;
          left: 0;
          bottom: 0;
          content: "";
          text-align: center;
          font-family: "Glyphicons Halflings";
          line-height: 20px;
          font-size: 15px;
          color: black;
        }
        #survey-form [type=checkbox]:focus,
        #survey-form [type=radio]:focus {
          outline: none;
          border-color: #fff;
        }
        #survey-form [type=radio] {
          border-radius: 50%;
        }
        #survey-form [type=radio]:after {
          border-radius: 50%;
        }
        #kisa {
          width: 45px;
        }
        #survey-form [type=number]::-webkit-inner-spin-button, #survey-form [type=number]::-webkit-outer-spin-button {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          margin: 0;
        }
        #survey-form select {
          height: 40px;
          padding-left: 5px;
          background-color: #37404a;
          border: 2px solid #fff;
          color: white;
        }
        #survey-form select option {
          padding: 5px 10px;
          font-weight: 300;
          cursor: pointer;
        }
        #survey-form select option:hover {
          background-color: #85ffc7;
        }
        #survey-form textarea {
          resize: none;
          margin-top: 2%;
          padding: 10px 10px 0px 20px;
          width: 100%;
          height: 90px;
          color: #000000;
          background-color: #ffffff;
          border: 2px solid rgb(65, 63, 63);
        }
        #survey-form .btn {
          display: inline-block;
          position: relative;
          width: 100%;
          margin: 3% 0 0 0;
          height: 45px;
          text-transform: uppercase;
          text-decoration: none;
          cursor: pointer;
          border: 3px solid #21bd74;
          border-radius: 0;
          font-weight: 500;
          font-size: 1.2em;
          color: #1bce7a;
          text-align: center;
          background: none;
          transition: color 0.25s ease;
        }
        #survey-form .btn:after {
          position: absolute;
          content: "";
          top: 0;
          left: 0;
          width: 0;
          height: 100%;
          background-color: #0dec6a;
          transform-origin: left;
          transition: width 0.5s ease;
          z-index: -1;
        }
        #survey-form .btn:hover {
          color: #37404a;
        }
        #survey-form .btn:hover:after {
          width: 100%;
        }
        #survey-form fieldset {
          margin: 5% 0 0 0;
        }

        .copyright {
          text-align: center;
          font-size: 10px;
          color: #fff;
        }
        .copyright i {
          color: #ef5350;
        }

        @media only screen and (max-width: 600px) {
          body {
            padding: 8% 0;
          }
        }
         </style>
    </div>

</body>
</html>
