<!DOCTYPE html>
<html lang="id" translate="no">
<head>
  <!-- METAs -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
  <meta name="google" content="notranslate">
  <title>Pengumuman ORC-V &mdash; Rihand Creative</title>
  <link rel="shortcut icon" type="image/jpg" href="assets/img/logo.ico"/>

  <!-- STYLES & PLUGINS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/rihandinfo.css">
  <link rel="stylesheet" href="assets/plugins/DataTables/datatables.min.css">
	<script type="text/javascript" src="assets/plugins/DataTables/datatables.min.js"></script>

  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/brands.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/solid.css">
  <script defer src="assets/plugins/fontawesome/js/all.js"></script>
  <script defer src="assets/plugins/fontawesome/js/brands.js"></script>
  <script defer src="assets/plugins/fontawesome/js/solid.js"></script>
  <script defer src="assets/plugins/fontawesome/js/fontawesome.js"></script>

  <script>
</script>

</head>
<body>

<div class="position-relative">
  <div class="position-absolute top-0 start-0">
    <img src="assets/img/maskot.png" alt="" width="20%">
  </div>
  <div class="position-absolute top-0 start-100 translate-middle">
    <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60vw" id="blobSvg">
      <path id="blob" d="M395,286Q362,322,347.5,377Q333,432,279.5,423Q226,414,180.5,398.5Q135,383,119,338Q103,293,74,241.5Q45,190,66.5,126.5Q88,63,157,74.5Q226,86,282,71.5Q338,57,364.5,108Q391,159,409.5,204.5Q428,250,395,286Z" fill="#aac8e0"></path>
    </svg>
  </div>
</div>

<div class="container">

  <div class="text-center mb-5">
    <h1>OLIMPIADE SAINS NASIONAL - ORC V</h1>
    <h2 style="font-weight: inherit;">Pengumuman Hasil Perolehan Skor</h2>
  </div>

  <center>

    <img src="assets/img/logo.png" alt="" width="125vw" class="rounded-circle card-rihand-img">

    <div class="card card-rihand col-12">
      <div class="card-body card-rihand-body">
        <div class="pt-3 pb-3 mt-4">

          <table class="table table-bordered">

  <?php

  $koneksi  = mysqli_connect('localhost', 'root', '', 'rihand_orc_pengumuman');
  $fetch    = mysqli_query($koneksi, "SELECT * FROM orc5 WHERE bidang='SD-IPA'");
  while($data = mysqli_fetch_array($fetch)) : 

  ?>
<tr><td><?= $data['peringkat']; ?></td><td><?= $data['nama']; ?></td><td><?= $data['sekolah']; ?></td><td><?= $data['skor']; ?></td><td><?= $data['medali']; ?></td></tr>
  <?php endwhile; ?>

</table>

        </div>
      </div>
    </div>

  </center>

</div>

<br>
<footer class="footer fixed-bottom d-none">&nbsp;</footer>
<script src="assets/js/rihandinfo.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- ======================= -->

<div class="modal fade" id="SDbing" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SD Bahasa Inggris</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-data table-striped">
            <thead>
                <tr>
                  <th width="1%">#</th>
                  <th>Nama</th>
                  <th>Sekolah</th>
                  <th>Skor</th>
                  <th>Medali</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

          <tr><td>1</td><td>YASMINE BITA ROSHANFEKRANA</td><td>SEKOLAH PRIBADI BANDUNG</td><td>98</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=yasminebita450291" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-1.pdf" download>Sertifikat</a></td></tr>
          <tr><td>2</td><td>TENGKU RIZQIEN KAMILY FITRIANI</td><td>SDIT ZAID BIN TSABIT BOGOR</td><td>96</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=tengkurizqien155176" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-2.pdf" download>Sertifikat</a></td></tr>
          <tr><td>3</td><td>REFINSKA AN NAZAR</td><td>SD ISLAM AL AZHAR 1 KEBAYORAN BARU JAKSEL</td><td>96</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=refinskaan277654" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-3.pdf" download>Sertifikat</a></td></tr>
          <tr><td>4</td><td>MUHAMMAD LIONEL FERGUSON PUTRA ARYA</td><td>SD LABSCHOOL CIBUBUR</td><td>96</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=muhammadlionel775160" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-4.pdf" download>Sertifikat</a></td></tr>
          <tr><td>5</td><td>ALVARO JIREH ELEAZAR SIMANJUNTAK</td><td>SD SANTO TARCISIUS DUMAI</td><td>94</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=alvarojireh697558" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-5.pdf" download>Sertifikat</a></td></tr>
          <tr><td>6</td><td>ELBRYAN ANTHONIO TIMANG</td><td>SDK HARAPAN BANGSA</td><td>94</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=elbryananthonio824003" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-6.pdf" download>Sertifikat</a></td></tr>
          <tr><td>7</td><td>AISYILLA NADHIFA SHASHI</td><td>SD ALKHAIRIYAH</td><td>94</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=aisyillanadhifa221541" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-7.pdf" download>Sertifikat</a></td></tr>
          <tr><td>8</td><td>AIGLE SHAQUILLE WIBOWO</td><td>SD ISLAM TUGASKU</td><td>94</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=aigleshaquille934228" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-8.pdf" download>Sertifikat</a></td></tr>
          <tr><td>9</td><td>KENES KHANZA RAFIDA</td><td>SYAFANA ISLAMIC SCHOOL - TANGERANG</td><td>94</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=keneskhanza505147" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-9.pdf" download>Sertifikat</a></td></tr>
          <tr><td>10</td><td>AYU KOMING CHANTIKA ANJANI</td><td>SDN 009 SLAMET RIYADI</td><td>94</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=ayukoming670967" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-10.pdf" download>Sertifikat</a></td></tr>
          <tr><td>11</td><td>SEBASTIAN ARRIAN MIKAEL</td><td>WELLINGTON INTELLIGENCE SCHOOL</td><td>92</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=sebastianarrian348474" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-11.pdf" download>Sertifikat</a></td></tr>
          <tr><td>12</td><td>RAGA TORANG LUBIS</td><td>SDI AL AZHAR 1</td><td>92</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=ragatorang362647" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-12.pdf" download>Sertifikat</a></td></tr>
          <tr><td>13</td><td>MUHAMMAD NAUFAL RITHOUDIN</td><td>SD LAB UM MALANG</td><td>92</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=muhammadnaufal204866" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-13.pdf" download>Sertifikat</a></td></tr>
          <tr><td>14</td><td>RANIA ALLYSIA WICAKSONO</td><td>SD AL-HIKMAH SURABAYA</td><td>92</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=raniaallysia820859" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-14.pdf" download>Sertifikat</a></td></tr>
          <tr><td>15</td><td>RASYA FADIL AL AKBAR</td><td>SDN BLIMBING 3 MALANG</td><td>92</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=rasyafadil447851" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-15.pdf" download>Sertifikat</a></td></tr>
          <tr><td>16</td><td>ADARA MAIZA RAMANIA</td><td>SDIT EXISS ABATA</td><td>92</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=adaramaiza472966" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-16.pdf" download>Sertifikat</a></td></tr>
          <tr><td>17</td><td>NADA RAIHANA BRAHAM</td><td>SDPN 037 SABANG BANDUNG</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=nadaraihana614569" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-17.pdf" download>Sertifikat</a></td></tr>
          <tr><td>18</td><td>ABIMANYU CALIEF ALBY</td><td>SDIA AL AZHAR 51 KOTA BENGKULU</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=abimanyucalief163392" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-18.pdf" download>Sertifikat</a></td></tr>
          <tr><td>19</td><td>EILEEN JEFFRINA L</td><td>PKBM PIWULANG BECIK</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=eileenjeffrina688926" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-19.pdf" download>Sertifikat</a></td></tr>
          <tr><td>20</td><td>MUHAMMAD ZAIYAN AL-GHOZI</td><td>SDIT 2 DARUSSALAM KUTAI TIMUR</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=muhammadzaiyan751381" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-20.pdf" download>Sertifikat</a></td></tr>
          <tr><td>21</td><td>LITUHAYU RIZKA APRILIA</td><td>SD PELITA JAKARTA</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=lituhayurizka770261" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-21.pdf" download>Sertifikat</a></td></tr>
          <tr><td>22</td><td>ALMIRA QORY BATRISYIA</td><td>SD. MUHAMMADIYAH 26 SURABAYA</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=almiraqory371605" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-22.pdf" download>Sertifikat</a></td></tr>
          <tr><td>23</td><td>DANIEL EMERALD WIJAYA</td><td>SDK PENABUR HARAPAN INDAH</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=danielemerald471847" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-23.pdf" download>Sertifikat</a></td></tr>
          <tr><td>24</td><td>RUTH DYAH NUGRAHANTI</td><td>SDK SANTA MARIA 2 MALANG</td><td>88</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=ruthdyah789084" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-24.pdf" download>Sertifikat</a></td></tr>
          <tr><td>25</td><td>LIGAR CANDRA MARSUDIANTO</td><td>SDN 1 SUMBERSEWU</td><td>88</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=ligarcandra599774" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-25.pdf" download>Sertifikat</a></td></tr>
          <tr><td>26</td><td>CHLOE LYNN SOETANTO</td><td>SD MITRA HARAPAN</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=chloelynn307180" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-26.pdf" download>Sertifikat</a></td></tr>
          <tr><td>27</td><td>VALERIA CHELSEA DE SANTA NUGROHO</td><td>JOHN PAUL SCHOOL</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=valeriachelsea394840" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-27.pdf" download>Sertifikat</a></td></tr>
          <tr><td>28</td><td>RUMAISHA AQILA NASUTION</td><td>JAKARTA ISLAMIC SCHOOL</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=rumaishaaqila398185" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-28.pdf" download>Sertifikat</a></td></tr>
          <tr><td>29</td><td>KAINAN AZKA NERISSA</td><td>SD ULIL ALBAB KEPANJEN</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=kainanazka674883" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-29.pdf" download>Sertifikat</a></td></tr>
          <tr><td>30</td><td>RIZQA SYAKURA SETIAWAN</td><td>SD MUHAMMADIYAH 5</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=rizqasyakura715246" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-30.pdf" download>Sertifikat</a></td></tr>
          <tr><td>31</td><td>YASMIN NESSA FERDIANNY</td><td>SDIT ABATA</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=yasminnessa906442" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-31.pdf" download>Sertifikat</a></td></tr>
          <tr><td>32</td><td>DEANDA QUEENSHA IGAMO</td><td>MI SUNAN PANDANARAN</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=deandaqueensha892542" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-32.pdf" download>Sertifikat</a></td></tr>
          <tr><td>33</td><td>SYABIL ZIDAN ARASYI</td><td>MY LITTLE ISLAND</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=syabilzidan686497" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-33.pdf" download>Sertifikat</a></td></tr>
          <tr><td>34</td><td>ANNISA FITRI AZIZAH</td><td>SDN PERCOBAAN PALANGKARAYA</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=annisafitri189300" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-34.pdf" download>Sertifikat</a></td></tr>
          <tr><td>35</td><td>KEVIN RENZO ORTZWIN</td><td>MI AL-FATTAAH</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=kevinrenzo596445" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-35.pdf" download>Sertifikat</a></td></tr>
          <tr><td>36</td><td>KAYLA ADRIEN REZFAN MOSYADHARMA JUSUF PRIHATNA</td><td>SDN 196 SUKARASA BANDUNG</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=kaylaadrien887400" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-36.pdf" download>Sertifikat</a></td></tr>
          <tr><td>37</td><td>DAMARIO ABIMANYU PUTRA HIMAWAN</td><td>SD SANTO CAROLUS SURABAYA</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=damarioabimanyu351408" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-37.pdf" download>Sertifikat</a></td></tr>
          <tr><td>38</td><td>FATHIA ALMAIRA SYIFA</td><td>SDI AL AZHAR KELAPA GADING SURABAYA</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=fathiaalmaira785113" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-38.pdf" download>Sertifikat</a></td></tr>
          <tr><td>39</td><td>NEYSA QUINNOVA</td><td>SDN RAWAMANGUN 12 JAKARTA TIMUR</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=neysaquinnova363320" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-39.pdf" download>Sertifikat</a></td></tr>
          <tr><td>40</td><td>TIARMA MIKHA SITINJAK</td><td>BATARI SCHOOL CBD</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=tiarmamikha983316" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-40.pdf" download>Sertifikat</a></td></tr>
          <tr><td>42</td><td>RAIHANNA QANITA GENDIS MAULANA</td><td>SDIT DARUL QURAN MULIA</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=raihannaqanita192834" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-42.pdf" download>Sertifikat</a></td></tr>
          <tr><td>43</td><td>DEVINA SAFIRA AISYAHRANI</td><td>MIN 2 SUKOHARJO</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=devinasafira170821" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-43.pdf" download>Sertifikat</a></td></tr>
          <tr><td>44</td><td>SHERYLIA SACHIKO HARDWIANTARY</td><td>ANAK TERANG</td><td>76</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=sheryliasachiko686727" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-44.pdf" download>Sertifikat</a></td></tr>
          <tr><td>45</td><td>ATHALYA BELLA NUGRAHA</td><td>SD PETRA BERKAT</td><td>76</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=athalyabella717508" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-45.pdf" download>Sertifikat</a></td></tr>
          <tr><td>46</td><td>IMMANUELA QUEEN FELITA</td><td>SD STRADA NAWAR</td><td>72</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=immanuelaqueen172892" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-46.pdf" download>Sertifikat</a></td></tr>
          <tr><td>47</td><td>AISYAH AFIQAH PUTRI ANDRILLES</td><td>SD BUDI BAKTI SAMARINDA</td><td>72</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=aisyahafiqah633154" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-47.pdf" download>Sertifikat</a></td></tr>
          <tr><td>48</td><td>PUTRI DELISHA HUMAIRA</td><td>SD IS DARUL HIKAM</td><td>70</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=putridelisha574718" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-48.pdf" download>Sertifikat</a></td></tr>
          <tr><td>49</td><td>GRISELDA MARITZA WINDHIA FAMARA</td><td>SD NASIONAL KPS BALIKPAPAN</td><td>70</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=griseldamaritza531911" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-49.pdf" download>Sertifikat</a></td></tr>
          <tr><td>50</td><td>ENZO MESSIA SALEAN</td><td>SD LENTERA HARAPAN</td><td>70</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=enzomessia676711" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-50.pdf" download>Sertifikat</a></td></tr>
          <tr><td>51</td><td>HANDO ADIAZKA MUMTAZ</td><td>SD PLUS HANG TUAH 4</td><td>70</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=handoadiazka508222" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-51.pdf" download>Sertifikat</a></td></tr>
          <tr><td>52</td><td>INDRIANNA AYUNITA KHAIRUNNISA</td><td>SD GAGAS CERIA BANDUNG</td><td>66</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=indriannaayunita498983" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-52.pdf" download>Sertifikat</a></td></tr>
          <tr><td>53</td><td>CELINE LIVINA RUSLI</td><td>SD XAVERIUS 4 PALEMBANG</td><td>66</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=celinelivia352678" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-53.pdf" download>Sertifikat</a></td></tr>
          <tr><td>54</td><td>CLARISSA TANIA ADALINE</td><td>ESA CIPTA HARAPAN SCHOOL</td><td>64</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=clarissatania315392" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-54.pdf" download>Sertifikat</a></td></tr>
          <tr><td>55</td><td>AMIRAH ARIFATUL KAMILAH</td><td>SDIT AS SALAM SAMARINDA</td><td>62</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=amiraharifatul366153" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-55.pdf" download>Sertifikat</a></td></tr>
          <tr><td>56</td><td>KENZIE AKMA WEDHASMARA</td><td>SDIT CORDOVA 3</td><td>58</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=kenzieakma209143" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-56.pdf" download>Sertifikat</a></td></tr>
          <tr><td>57</td><td>M. HAIKAL AZKA ALHAFIDH</td><td>KUTTAB BQ BSD</td><td>54</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=mhaikal925089" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-57.pdf" download>Sertifikat</a></td></tr>
          <tr><td>58</td><td>ANAK AGUNG PUTU DHARMA PUTRA WIGUNA</td><td>SEKOLAH BANGUN MANDIRI</td><td>50</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=anakagung280989" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-BING-58.pdf" download>Sertifikat</a></td></tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ======================= -->

<div class="modal fade" id="SDipa" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SD IPA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-data table-striped">
            <thead>
                <tr>
                  <th width="1%">#</th>
                  <th>Nama</th>
                  <th>Sekolah</th>
                  <th>Skor</th>
                  <th>Medali</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

          <tr><td>1</td><td>ALIYANDA HAULA RUSYDI</td><td>SDIT ADZKIA 3 PADANG</td><td>95</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=aliyandahaula920562" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-1.pdf" download>Sertifikat</a></td></tr>
          <tr><td>2</td><td>ELDORADO OCEAN DEWANGGA PUTRA</td><td>MIN 2 SUKOHARJO</td><td>95</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=eldoradoocean928374" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-2.pdf" download>Sertifikat</a></td></tr>
          <tr><td>3</td><td>DANIEL EMERALD WIJAYA</td><td>SDK PENABUR HARAPAN INDAH</td><td>95</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=danielemerald376556" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-3.pdf" download>Sertifikat</a></td></tr>
          <tr><td>4</td><td>MUHAMMAD TAHRIR WIJAYANTO</td><td>GLOBAL TALENT AND STUDIOS PALEMBANG</td><td>93</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=muhammadtahrir915090" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-4.pdf" download>Sertifikat</a></td></tr>
          <tr><td>5</td><td>MUHAMMAD ATHAYYA AL GHOFARY</td><td>SD MIN 2 SUKOHARJO</td><td>93</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=muhammadathayya967846" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-5.pdf" download>Sertifikat</a></td></tr>
          <tr><td>6</td><td>KHANSA JASMINE PUTRI AZIZAH</td><td>SD DARMA BANGSA LAMPUNG</td><td>93</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=khansajasmine524929" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-6.pdf" download>Sertifikat</a></td></tr>
          <tr><td>7</td><td>KHAIRAN RIZKY WIDIATMOKO</td><td>SD EXISS ABATA</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=khairanrizky505584" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-7.pdf" download>Sertifikat</a></td></tr>
          <tr><td>8</td><td>FATIYA HAFIDZOTURRAHMAH</td><td>MIN 1 CILACAP</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=fatiyahafidzoturrahmah160641" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-8.pdf" download>Sertifikat</a></td></tr>
          <tr><td>9</td><td>FRAFANGASTA KIRANI AYUNDA KRESNA</td><td>SD ISLAM AL AZHAR 46 GDC</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=frafangastakirani338787" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-9.pdf" download>Sertifikat</a></td></tr>
          <tr><td>10</td><td>NADIA KIRANA HUMAIRA</td><td>SDI CIKAL HARAPAN 1 BSD</td><td>88</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=nadiakirana493329" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-10.pdf" download>Sertifikat</a></td></tr>
          <tr><td>11</td><td>NIQUISHA AZKEIRA SASMITA GHIZAYONO</td><td>SD LABSCHOOL CIBUBUR</td><td>88</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=niquishaazkeira743037" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-11.pdf" download>Sertifikat</a></td></tr>
          <tr><td>12</td><td>ELBRYAN ANTHONIO TIMANG</td><td>SDK HARAPAN BANGSA</td><td>85</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=elbryananthonio649380" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-12.pdf" download>Sertifikat</a></td></tr>
          <tr><td>13</td><td>FATHIA ALMAIRA SYIFA</td><td>SDI AL AZHAR KELAPA GADING SURABAYA</td><td>85</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=fathiaalmaira405041" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-13.pdf" download>Sertifikat</a></td></tr>
          <tr><td>14</td><td>RASYA FADIL AL AKBAR</td><td>SDN BLIMBING 3 MALANG</td><td>85</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=rasyafadil320525" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-14.pdf" download>Sertifikat</a></td></tr>
          <tr><td>15</td><td>JIROU FAIZA ATHOILLAH</td><td>MIN 2 SUKOHARJO</td><td>85</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=jiroufaiza872511" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-15.pdf" download>Sertifikat</a></td></tr>
          <tr><td>16</td><td>LIGAR CANDRA MARSUDIANTO</td><td>SDN 1 SUMBERSEWU</td><td>85</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=ligarcandra274362" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-16.pdf" download>Sertifikat</a></td></tr>
          <tr><td>17</td><td>YASMIN NESSA FERDIANNY</td><td>SDIT ABATA</td><td>85</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=yasminnessa306678" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-17.pdf" download>Sertifikat</a></td></tr>
          <tr><td>18</td><td>TENGKU RIZQIEN KAMILY FITRIANI</td><td>SDIT ZAID BIN TSABIT BOGOR</td><td>83</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=tengkurizqien970619" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-18.pdf" download>Sertifikat</a></td></tr>
          <tr><td>20</td><td>NAYRA SHAISTA ATTAQIYAH</td><td>SD ALAM AL-KARIM LAMPUNG</td><td>83</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=nayrashaista551145" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-20.pdf" download>Sertifikat</a></td></tr>
          <tr><td>21</td><td>ALIANDRA MALIK PRADANA SUBHAN</td><td>SDI TUGASKU</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=aliandramalik661132" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-21.pdf" download>Sertifikat</a></td></tr>
          <tr><td>22</td><td>DAMARIO ABIMANYU PUTRA HIMAWAN</td><td>SD SANTO CAROLUS SURABAYA</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=damarioabimanyu901132" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-22.pdf" download>Sertifikat</a></td></tr>
          <tr><td>23</td><td>AVISSA ZIVANA MUMTAS</td><td>MIN 2 TEGAL</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=avissazivana306653" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-23.pdf" download>Sertifikat</a></td></tr>
          <tr><td>24</td><td>KEVIN ADRIAN SUGIANTO</td><td>SD MARIA BINTANG LAUT BANDUNG</td><td>77</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=kevinadrian463270" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-24.pdf" download>Sertifikat</a></td></tr>
          <tr><td>25</td><td>KAYLA ADRIEN REZFAN MOSYADHARMA JUSUF PRIHATNA</td><td>SDN 196 SUKARASA BANDUNG</td><td>77</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=kaylaadrien725463" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-25.pdf" download>Sertifikat</a></td></tr>
          <tr><td>26</td><td>LITUHAYU RIZKA APRILIA</td><td>SD PELITA JAKARTA</td><td>75</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=lituhayurizka853599" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-26.pdf" download>Sertifikat</a></td></tr>
          <tr><td>27</td><td>M. HAIKAL AZKA ALHAFIDH</td><td>KUTTAB BQ BSD</td><td>73</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=mhaikal273644" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-27.pdf" download>Sertifikat</a></td></tr>
          <tr><td>28</td><td>FARISYA RAMDAN NAYLA</td><td>SD AL IMAM ISLAMIC SCHOOL BALIKPAPAN</td><td>73</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=farisyaramdan465436" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-28.pdf" download>Sertifikat</a></td></tr>
          <tr><td>29</td><td>SYABIL ZIDAN ARASYI</td><td>MY LITTLE ISLAND</td><td>67</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=syabilzidan259848" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-29.pdf" download>Sertifikat</a></td></tr>
          <tr><td>30</td><td>PUTRI DELISHA HUMAIRA</td><td>SD IS DARUL HIKAM</td><td>63</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=putridelisha365394" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-30.pdf" download>Sertifikat</a></td></tr>
          <tr><td>31</td><td>ALLIYAH KHANZA ZIFAARA</td><td>SD AL IMAM ISLAMIC SCHOOL BALIKPAPAN</td><td>60</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=alliyahkhanza280004" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-31.pdf" download>Sertifikat</a></td></tr>
          <tr><td>32</td><td>YOEL TIMANG MALINO</td><td>SDN 001 BARONG TONGKOK</td><td>52</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=yoeltimang201394" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-32.pdf" download>Sertifikat</a></td></tr>
          <tr><td>33</td><td>AMIRAH ARIFATUL KAMILAH</td><td>SDIT AS SALAM SAMARINDA</td><td>47</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=amiraharifatul685387" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-33.pdf" download>Sertifikat</a></td></tr>
          <tr><td>34</td><td>ANDREA NUGROHO DARMAWAN</td><td>SLH KOJA</td><td>45</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=andreanugroho358045" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-IPA-34.pdf" download>Sertifikat</a></td></tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ======================= -->

<div class="modal fade" id="SDmtk" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SD Matematika</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-data table-striped">
            <thead>
                <tr>
                  <th width="1%">#</th>
                  <th>Nama</th>
                  <th>Sekolah</th>
                  <th>Skor</th>
                  <th>Medali</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

          <tr><td>1</td><td>ANTHONY LIM</td><td>SD BINA MULIA</td><td>94</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=anthonylim556079" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-1.pdf" download>Sertifikat</a></td></tr>
          <tr><td>2</td><td>RADITYA AIMAN NAUFAL</td><td>SDI MUH HATTA</td><td>94</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=radityaaiman676376" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-2.pdf" download>Sertifikat</a></td></tr>
          <tr><td>3</td><td>DANIEL EMERALD WIJAYA</td><td>SDK PENABUR HARAPAN INDAH</td><td>91</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=danielemerald211398" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-3.pdf" download>Sertifikat</a></td></tr>
          <tr><td>4</td><td>SEBASTIAN ARRIAN MIKAEL</td><td>WELLINGTON INTELLIGENCE SCHOOL</td><td>89</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=sebastianarrian889626" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-4.pdf" download>Sertifikat</a></td></tr>
          <tr><td>5</td><td>ABIMANYU CALIEF ALBY</td><td>SDIA AL AZHAR 51 KOTA BENGKULU</td><td>89</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=abimanyucalief656513" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-5.pdf" download>Sertifikat</a></td></tr>
          <tr><td>6</td><td>ZACKY ARRAFI</td><td>SDN BAKTIJAYA 1 DEPOK</td><td>89</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=zackyarrafi537609" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-6.pdf" download>Sertifikat</a></td></tr>
          <tr><td>7</td><td>VEISHA NEVARA AURANITASYA</td><td>SD NEGERI 157 PALEMBANG</td><td>83</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=veishanevara160141" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-7.pdf" download>Sertifikat</a></td></tr>
          <tr><td>8</td><td>KHANSA FIDELLA MEGANA</td><td>SDN RAWABUNTU 01</td><td>83</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=khansafidella236799" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-8.pdf" download>Sertifikat</a></td></tr>
          <tr><td>9</td><td>ELYSYA STEFANNY HO</td><td>SD KRISTEN KANAAN KUBU RAYA</td><td>83</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=elysyastefanny919360" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-9.pdf" download>Sertifikat</a></td></tr>
          <tr><td>10</td><td>FATHIA ALMAIRA SYIFA</td><td>SDI AL AZHAR KELAPA GADING SURABAYA</td><td>83</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=fathiaalmaira312792" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-10.pdf" download>Sertifikat</a></td></tr>
          <tr><td>11</td><td>VALERIA CHELSEA DE SANTA NUGROHO</td><td>JOHN PAUL SCHOOL</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=valeriachelsea954863" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-11.pdf" download>Sertifikat</a></td></tr>
          <tr><td>12</td><td>SALOMO PANJI WICAKSONO</td><td>SDK MARDI WIYATA 2 MALANG</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=salomopanji524722" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-12.pdf" download>Sertifikat</a></td></tr>
          <tr><td>13</td><td>ALFONDA MAHESA GENIO KRISTIAWAN</td><td>SDK SANTO PIUS KRAKSAAN</td><td>77</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=alfondamahesa823935" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-13.pdf" download>Sertifikat</a></td></tr>
          <tr><td>14</td><td>KHAIRAN RIZKY WIDIATMOKO</td><td>SD EXISS ABATA</td><td>77</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=khairanrizky521871" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-14.pdf" download>Sertifikat</a></td></tr>
          <tr><td>15</td><td>TENGKU RIZQIEN KAMILY FITRIANI</td><td>SDIT ZAID BIN TSABIT BOGOR</td><td>74</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=tengkurizqien337492" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-15.pdf" download>Sertifikat</a></td></tr>
          <tr><td>16</td><td>KAYLA ADRIEN REZFAN MOSYADHARMA JUSUF PRIHATNA</td><td>SDN 196 SUKARASA BANDUNG</td><td>74</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=kaylaadrien888121" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-16.pdf" download>Sertifikat</a></td></tr>
          <tr><td>17</td><td>YAEL HENDERINA TRULYVOICE PATOLA</td><td>LENTERA HARAPAN KOJA</td><td>71</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=yaelhenderina124769" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-17.pdf" download>Sertifikat</a></td></tr>
          <tr><td>18</td><td>MUHAMMAD TAHRIR WIJAYANTO</td><td>GLOBAL TALENT AND STUDIOS PALEMBANG</td><td>69</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=muhammadtahrir192592" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-18.pdf" download>Sertifikat</a></td></tr>
          <tr><td>19</td><td>AARON CRISTIAN</td><td>SD KRISTEN KANAAN KUBU RAYA</td><td>69</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=aaroncristian682010" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-19.pdf" download>Sertifikat</a></td></tr>
          <tr><td>20</td><td>M. JAVIER ISA ARKAWYASA</td><td>SD LABSCHOOL CIBUBUR</td><td>66</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=mjavier403918" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-20.pdf" download>Sertifikat</a></td></tr>
          <tr><td>21</td><td>EILEEN JEFFRINA L</td><td>PKBM PIWULANG BECIK</td><td>63</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=eileenjeffrina577410" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-21.pdf" download>Sertifikat</a></td></tr>
          <tr><td>22</td><td>DAMARIO ABIMANYU PUTRA HIMAWAN</td><td>SD SANTO CAROLUS SURABAYA</td><td>54</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=damarioabimanyu583229" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-22.pdf" download>Sertifikat</a></td></tr>
          <tr><td>23</td><td>RASYA FADIL AL AKBAR</td><td>SDN BLIMBING 3 MALANG</td><td>54</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=rasyafadil133169" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-23.pdf" download>Sertifikat</a></td></tr>
          <tr><td>24</td><td>M. FALAH ALFARIZ</td><td>MIN 2 TEGAL</td><td>49</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=mfalah137985" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-24.pdf" download>Sertifikat</a></td></tr>
          <tr><td>25</td><td>CHLOE LYNN SOETANTO</td><td>SD MITRA HARAPAN</td><td>43</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=chloelynn441145" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-25.pdf" download>Sertifikat</a></td></tr>
          <tr><td>26</td><td>FATIYA HAFIDZOTURRAHMAH</td><td>MIN 1 CILACAP</td><td>43</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=fatiyahafidzoturrahmah914242" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-26.pdf" download>Sertifikat</a></td></tr>
          <tr><td>27</td><td>MARIA YOSEPHA AMANDA MATONDANG</td><td>SD KRISTEN KANAAN KUBU RAYA</td><td>43</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=mariayosepha584860" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-27.pdf" download>Sertifikat</a></td></tr>
          <tr><td>29</td><td>ALMIRA MARSYA ANINDYA</td><td>SDN CIJANTUNG 03 PAGI</td><td>37</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=almiramarsya893356" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-29.pdf" download>Sertifikat</a></td></tr>
          <tr><td>30</td><td>EVAN SHEEHAN ARISANDRA</td><td>SD ISLAM SABILILLAH MALANG</td><td>34</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=evansheehan695164" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-30.pdf" download>Sertifikat</a></td></tr>
          <tr><td>31</td><td>YOEL TIMANG MALINO</td><td>SDN 001 BARONG TONGKOK</td><td>31</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=yoeltimang366395" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-31.pdf" download>Sertifikat</a></td></tr>
          <tr><td>32</td><td>AQILA RIHADATUL AISY</td><td>MIN 2 TEGAL</td><td>29</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=aqilarihadatul807466" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SD-MTK-32.pdf" download>Sertifikat</a></td></tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ======================= -->

<div class="modal fade" id="SMPbing" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SMP Bahasa Inggris</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-data table-striped">
            <thead>
                <tr>
                  <th width="1%">#</th>
                  <th>Nama</th>
                  <th>Sekolah</th>
                  <th>Skor</th>
                  <th>Medali</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

          <tr><td>1</td><td>RAIHAN FATHIY ANADY</td><td>SMPN 2 BANDUNG</td><td>94</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=raihanfathiy850681" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-1.pdf" download>Sertifikat</a></td></tr>
          <tr><td>2</td><td>IGNASIA ROSELINE NIRWASITA</td><td>OLIFANT HIGH SCHOOL YOGYAKARTA</td><td>92</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=ignasiaroseline377211" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-2.pdf" download>Sertifikat</a></td></tr>
          <tr><td>3</td><td>CLAIRE ANGELICA SUGIANTO</td><td>SMP ST ALOYSIUS BANDUNG</td><td>88</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=claireangelica507244" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-3.pdf" download>Sertifikat</a></td></tr>
          <tr><td>4</td><td>STEFFANY CHARISSA K.</td><td>SMP KANISIUS KUDUS</td><td>88</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=steffanycharissa581121" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-4.pdf" download>Sertifikat</a></td></tr>
          <tr><td>5</td><td>ZIGGY ELECTRA RIANZA</td><td>KESATUAN BANGSA</td><td>88</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=ziggyelectra898838" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-5.pdf" download>Sertifikat</a></td></tr>
          <tr><td>6</td><td>NAZANINE ALIFA NOUSAFARIN</td><td>SMP PRIBADI BANDUNG</td><td>88</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=nazaninealifa873892" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-6.pdf" download>Sertifikat</a></td></tr>
          <tr><td>7</td><td>CLAIRE LESLIE SOETANTO</td><td>SMP MITRA HARAPAN</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=claireleslie605506" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-7.pdf" download>Sertifikat</a></td></tr>
          <tr><td>8</td><td>NABILAH KHAIRUNNISA ARDIKUSUMAH</td><td>SMP LABSCHOOL CIBUBUR</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=nabilahkhairunnisa183681" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-8.pdf" download>Sertifikat</a></td></tr>
          <tr><td>9</td><td>ALYSSA SADIRA IRMANTO</td><td>SMPN 115 JAKARTA</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=alyssasadira648857" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-9.pdf" download>Sertifikat</a></td></tr>
          <tr><td>10</td><td>ANGELYN FELISHIA</td><td>SMP METHODIST 1 PALEMBANG</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=angelynfelishia403444" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-10.pdf" download>Sertifikat</a></td></tr>
          <tr><td>11</td><td>JOSIAH BENEDICT ELLRACH SIAHAYA</td><td>SMPK SAINT JOHN HARAPAN INDAH</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=josiahbenedict323539" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-11.pdf" download>Sertifikat</a></td></tr>
          <tr><td>12</td><td>GHINA RAMADHANI</td><td>SMPN 177 JAKARTA SELATAN</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=ghinaramadhani287112" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-12.pdf" download>Sertifikat</a></td></tr>
          <tr><td>13</td><td>JONAH EKAVALENS</td><td>SMP PELITA CEMERLANG</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=jonahekavalens515801" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-13.pdf" download>Sertifikat</a></td></tr>
          <tr><td>14</td><td>DARIAN ELAN ALFARIUS</td><td>SMPN 11</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=darianelan241409" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-14.pdf" download>Sertifikat</a></td></tr>
          <tr><td>15</td><td>DEVINA TARINDA PUTRI</td><td>MTSN MODEL SAMARINDA</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=devinatarinda321334" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-15.pdf" download>Sertifikat</a></td></tr>
          <tr><td>16</td><td>SATRYA SABRI WICAKSONO</td><td>SMP NEGERI 6 SURABAYA</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=satryasabri594302" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-16.pdf" download>Sertifikat</a></td></tr>
          <tr><td>17</td><td>ALEXANDER WONG</td><td>SMP METHODIST 2 PALEMBANG</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=alexanderwong512344" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-17.pdf" download>Sertifikat</a></td></tr>
          <tr><td>18</td><td>NAYLA NADYA CHAIRINNISA</td><td>SMPN 255 JAKARTA</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=naylanadya234002" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-18.pdf" download>Sertifikat</a></td></tr>
          <tr><td>19</td><td>NESYA AISIAH ANWAR</td><td>SMPN 75 JAKARTA BARAT</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=nesyaaisiah370172" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-19.pdf" download>Sertifikat</a></td></tr>
          <tr><td>20</td><td>ALIFIA KHANSA JUWITA</td><td>SMPN 4 SAMARINDA</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=alifiakhansa521635" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-20.pdf" download>Sertifikat</a></td></tr>
          <tr><td>21</td><td>NADYA HUMAYRA TIRTHA KUSUMA</td><td>SMP LABSCHOOL CIBUBUR</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=nadyahumayra964990" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-21.pdf" download>Sertifikat</a></td></tr>
          <tr><td>22</td><td>ARKANA</td><td>SMP NASIONAL KPS BALIKPAPAN</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=arkana720968" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-22.pdf" download>Sertifikat</a></td></tr>
          <tr><td>23</td><td>PUTRI RAJWA AURA SYIFA</td><td>SMP NEGERI 4 SAMARINDA</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=putrirajwa613266" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-23.pdf" download>Sertifikat</a></td></tr>
          <tr><td>24</td><td>JOCELYN VALENCIA AGATHA</td><td>SMP KRISTEN GLORIA 2</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=jocelynvalencia429181" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-24.pdf" download>Sertifikat</a></td></tr>
          <tr><td>25</td><td>GIANDRA FAKHIRAN RADITYA KUSUMAH</td><td>SMP BPI 1 BDG</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=giandrafakhiran789212" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-25.pdf" download>Sertifikat</a></td></tr>
          <tr><td>26</td><td>AURELLIA PUTRI RAMADHANI</td><td>SMPN 35 SAMARINDA</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=aurelliaputri573672" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-26.pdf" download>Sertifikat</a></td></tr>
          <tr><td>27</td><td>SABRINA AQIELA PUTRI</td><td>MTS NEGERI MODEL SAMARINDA</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=sabrinaaqiela796389" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-27.pdf" download>Sertifikat</a></td></tr>
          <tr><td>28</td><td>OKTARIANI KRISTIN SITORUS</td><td>SMP KATOLIK 1 WR.SOEPRATMAN SAMARINDA</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=oktarianikristin935360" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-28.pdf" download>Sertifikat</a></td></tr>
          <tr><td>29</td><td>NAYLA PUTRI SALSABILLA</td><td>SMPN 22 SURABAYA</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=naylaputri660230" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-29.pdf" download>Sertifikat</a></td></tr>
          <tr><td>30</td><td>MAURICE ANGELICA PUTRI TUEGEH</td><td>SMPN 10 DENPASAR</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=mauriceangelica589724" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-30.pdf" download>Sertifikat</a></td></tr>
          <tr><td>31</td><td>ANGELIQUE KANIA WIGUNA</td><td>SMP ST. ANGELA</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=angeliquekania532123" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-31.pdf" download>Sertifikat</a></td></tr>
          <tr><td>32</td><td>BEBY AMALIA RAKHMAN</td><td>SMPN 22 SAMARINDA</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=bebyamalia134254" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-32.pdf" download>Sertifikat</a></td></tr>
          <tr><td>33</td><td>SHAKILA MUTIA ZAHRA</td><td>SMPN 45 JAKARTA BARAT</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=shakilamutia400309" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-33.pdf" download>Sertifikat</a></td></tr>
          <tr><td>34</td><td>REINA ELVINA SAFITRI</td><td>MTSN 1 JEPARA</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=reinaelvira182650" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-34.pdf" download>Sertifikat</a></td></tr>
          <tr><td>35</td><td>RIZA ALVELIA NATANIA</td><td>SMPN 4 JUANDA, SMD</td><td>76</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=rizaalvelia316631" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-35.pdf" download>Sertifikat</a></td></tr>
          <tr><td>36</td><td>NOOR SAFIRA</td><td>SMPN 7</td><td>76</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=noorsafira533170" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-36.pdf" download>Sertifikat</a></td></tr>
          <tr><td>37</td><td>CETTA MAHESWARI BHANUWATI</td><td>SMPN 10 SAMARINDA</td><td>76</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=cettamaheswari812327" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-37.pdf" download>Sertifikat</a></td></tr>
          <tr><td>38</td><td>YOSEFIN WANNY RAHARJO</td><td>SMPK PELITA KASIH LAWANG</td><td>76</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=yosefin" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-38.pdf" download>Sertifikat</a></td></tr>
          <tr><td>39</td><td>REFANAYA AN NAZAR</td><td>SMP N 11,KEBAYORAN BARU JAKSEL</td><td>74</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=refanayaan210004" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-39.pdf" download>Sertifikat</a></td></tr>
          <tr><td>40</td><td>ORLEAN ALVARO GUMILAR</td><td>SMP ISLAM AL IKHLAS</td><td>74</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=orleanalvaro855170" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-40.pdf" download>Sertifikat</a></td></tr>
          <tr><td>41</td><td>MATTHEW ADRIAN SEAN ONGKOWIDJAJA</td><td>SMP SANTA CLARA SURABAYA</td><td>74</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=matthewadrian450425" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-41.pdf" download>Sertifikat</a></td></tr>
          <tr><td>42</td><td>ERNEST AQUILA SIMANJUNTAK</td><td>SMPN 150 JAKARTA</td><td>72</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=ernestaquila167053" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-42.pdf" download>Sertifikat</a></td></tr>
          <tr><td>43</td><td>ASHA PUTERI APRILIA</td><td>MTSN 1 KOTA MALANG</td><td>72</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=ashaputeri493033" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-43.pdf" download>Sertifikat</a></td></tr>
          <tr><td>44</td><td>AURELIA EMILY</td><td>SMP GAMALIEL PALI</td><td>72</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=aureliaemily130286" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-44.pdf" download>Sertifikat</a></td></tr>
          <tr><td>45</td><td>YONAZAR MARCELLINO SALEAN</td><td>STRADA ST. IGNATIUS</td><td>70</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=yonazarmarcellino291010" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-45.pdf" download>Sertifikat</a></td></tr>
          <tr><td>46</td><td>RANA SAHIRA RAMADHANI</td><td>SMPN 1 TASIKMALAYA</td><td>68</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=ranasahira542105" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-46.pdf" download>Sertifikat</a></td></tr>
          <tr><td>47</td><td>VALERIA DEVINA MANGAWE</td><td>SMP GAMALIEL PALU</td><td>68</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=valeriadevina345686" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-47.pdf" download>Sertifikat</a></td></tr>
          <tr><td>48</td><td>SYIFA INDAH LINTANG SAPUTRI</td><td>SMP N 4 SAMARINDA</td><td>64</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=syifaindah696258" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-48.pdf" download>Sertifikat</a></td></tr>
          <tr><td>49</td><td>ANDREA IVANA RANDABUNGA</td><td>SMP NEGERI 4 NANGA BULIK</td><td>58</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=andreaivana334743" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-49.pdf" download>Sertifikat</a></td></tr>
          <tr><td>50</td><td>MUHAMAD RIESKY MAULANA</td><td>SMPIT AL ASHAR</td><td>58</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=muhamadriesky918376" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-50.pdf" download>Sertifikat</a></td></tr>
          <tr><td>51</td><td>BRITHA ARINA LUTHFIA RINJANI</td><td>SMP NEGERI 4 METRO TIMUR</td><td>52</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=brithaarina283535" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-51.pdf" download>Sertifikat</a></td></tr>
          <tr><td>52</td><td>ASHIL BASYSYARYZQI</td><td>SMPM 6 SMD</td><td>52</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=ashilbasysyaryzqi215414" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-52.pdf" download>Sertifikat</a></td></tr>
          <tr><td>53</td><td>MALVIN MUAZZAM ADIPUTRO</td><td>SMP LABSCHOOL CIBUBUR</td><td>46</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=malvinmuazzam162935" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-53.pdf" download>Sertifikat</a></td></tr>
          <tr><td>54</td><td>RASHYA FRAMUDIA MAULANA</td><td>SMPN 34 KOTA SAMARINDA.</td><td>46</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=rashyaframudia799090" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-54.pdf" download>Sertifikat</a></td></tr>
          <tr><td>55</td><td>WTISTY AZKA FAWNIA</td><td>MTSN 1 LAMPUNG TIMUR</td><td>32</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=wtistyazka381940" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-BING-55.pdf" download>Sertifikat</a></td></tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ======================= -->

<div class="modal fade" id="SMPipa" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SMP IPA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-data table-striped">
            <thead>
                <tr>
                  <th width="1%">#</th>
                  <th>Nama</th>
                  <th>Sekolah</th>
                  <th>Skor</th>
                  <th>Medali</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

          <tr><td>1</td><td>MUHAMMAD IRFAN FAHRUROHMAN</td><td>SMP AL-IZZAH BATU</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=muhammadirfan221467" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-1.pdf" download>Sertifikat</a></td></tr>
          <tr><td>2</td><td>SABRINA YEIRA ARISANDRA</td><td>MTSN 1 KOTA MALANG</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=sabrinayeira665785" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-2.pdf" download>Sertifikat</a></td></tr>
          <tr><td>3</td><td>MUHAMMAD ILYAS RUSDI</td><td>SMP AL-IZZAH BATU</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=muhammadilyas235512" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-3.pdf" download>Sertifikat</a></td></tr>
          <tr><td>4</td><td>MUHAMMAD DAKITA ARFA ALFARITSI</td><td>SMP AL-IZZAH BATU</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=muhammaddakita945599" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-4.pdf" download>Sertifikat</a></td></tr>
          <tr><td>5</td><td>KANIA NAYLA PUTRI</td><td>SMPN 9 BANDUNG</td><td>83</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=kanianayla653914" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-5.pdf" download>Sertifikat</a></td></tr>
          <tr><td>6</td><td>MIKHAEL FAITH BENAIAH LIVEROY SARAGIH</td><td>SMP DARMAYUDHA</td><td>81</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=mikhaelfaith311274" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-6.pdf" download>Sertifikat</a></td></tr>
          <tr><td>7</td><td>CECILIA SHARENE SHEVANTYA</td><td>SMPK PENABUR DEPOK</td><td>79</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=ceciliasharene908572" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-7.pdf" download>Sertifikat</a></td></tr>
          <tr><td>8</td><td>RAHMA FAHIRA BASALAMAH</td><td>SMPN 19 JAKARTA</td><td>72</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=rahmafahira527104" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-8.pdf" download>Sertifikat</a></td></tr>
          <tr><td>9</td><td>TALITHA SYIFA HAFIDZAH</td><td>SMP NEGERI 1 PALU SULAWESI TENGAH</td><td>62</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=talithasyifa722058" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-9.pdf" download>Sertifikat</a></td></tr>
          <tr><td>10</td><td>FAWNIA RACHMAPUTRI</td><td>SMP AL FALAH DELTASARI</td><td>62</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=fawniarachmaputri834049" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-10.pdf" download>Sertifikat</a></td></tr>
          <tr><td>11</td><td>JASON VALERIAN SUGIARTO</td><td>SMP NEGERI 2 TEGAL</td><td>57</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=jasonvalerian601886" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-11.pdf" download>Sertifikat</a></td></tr>
          <tr><td>12</td><td>ZARA NSDIA MEKKA</td><td>MTSN 2 BREBES</td><td>56</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=zaransdia915551" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-12.pdf" download>Sertifikat</a></td></tr>
          <tr><td>13</td><td>BRYANT VALERIAN SUGIARTO</td><td>SMP NEGERI 2 TEGAL</td><td>56</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=bryantvalerian511174" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-13.pdf" download>Sertifikat</a></td></tr>
          <tr><td>14</td><td>YASMIN AISHA FAIHA</td><td>TNA FATIH BILINGUAL SCHOOL</td><td>54</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=yasminaisha199578" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-14.pdf" download>Sertifikat</a></td></tr>
          <tr><td>15</td><td>KHAISYA MALIHA IWAN KHUZAIMAH</td><td>SMPN 24 JAKARTA</td><td>52</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=khaisyamaliha835347" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-15.pdf" download>Sertifikat</a></td></tr>
          <tr><td>16</td><td>MALVIN MUAZZAM ADIPUTRO</td><td>SMP LABSCHOOL CIBUBUR</td><td>52</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=malvinmuazzam928374" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-16.pdf" download>Sertifikat</a></td></tr>
          <tr><td>17</td><td>NELLA ASY SYFA MAULIDNA</td><td>SMP IT MUMTAZ AL BANTANI</td><td>52</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=nellaasy730549" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-17.pdf" download>Sertifikat</a></td></tr>
          <tr><td>18</td><td>NAZANINE ALIFA NOUSAFARIN</td><td>SMP PRIBADI BANDUNG</td><td>52</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=nazaninealifa606068" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-18.pdf" download>Sertifikat</a></td></tr>
          <tr><td>19</td><td>DAMAR MAKASA RIZWAN</td><td>SYAFANA ISLAMIC SCHOOL</td><td>49</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=damarmakasa548601" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-19.pdf" download>Sertifikat</a></td></tr>
          <tr><td>20</td><td>KEVIN VALERIAN SUGIARTO</td><td>SMP NEGERI 2 TEGAL</td><td>49</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=kevinvalerian817314" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-20.pdf" download>Sertifikat</a></td></tr>
          <tr><td>21</td><td>ANDREA IVANA RANDABUNGA</td><td>SMP NEGERI 4 NANGA BULIK</td><td>47</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=andreaivana166091" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPA-21.pdf" download>Sertifikat</a></td></tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ======================= -->

<div class="modal fade" id="SMPips" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SMP IPS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-data table-striped">
            <thead>
                <tr>
                  <th width="1%">#</th>
                  <th>Nama</th>
                  <th>Sekolah</th>
                  <th>Skor</th>
                  <th>Medali</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

          <tr><td>1</td><td>ALYA HANNA VAIDISOVA SUSANTI</td><td>SMP NEGERI 22 SURABAYA</td><td>85</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=alyahanna444201" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-1.pdf" download>Sertifikat</a></td></tr>
          <tr><td>2</td><td>ZIGGY ELECTRA RIANZA</td><td>KESATUAN BANGSA</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=ziggyelectra310943" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-2.pdf" download>Sertifikat</a></td></tr>
          <tr><td>3</td><td>SHIFA WIDIYA ATMAJA</td><td>SMP NEGERI 226 JAKARTA</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=shifawidiya718119" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-3.pdf" download>Sertifikat</a></td></tr>
          <tr><td>4</td><td>YASMIN ALAIYA ANJANI</td><td>SMPN 255 JAKARTA TIMUR</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=yasminalaiya500534" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-4.pdf" download>Sertifikat</a></td></tr>
          <tr><td>5</td><td>AZCALIA ZARA CAHYANA AILSA</td><td>SMPIT UKHUWAH</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=azcaliazara509656" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-5.pdf" download>Sertifikat</a></td></tr>
          <tr><td>6</td><td>KEISHA RAHMA NUGROHO</td><td>SMPIT UKHUWAH</td><td>78</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=keisharahma490273" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-6.pdf" download>Sertifikat</a></td></tr>
          <tr><td>7</td><td>FAZLI ADIWIDYATAMA</td><td>SMPN 111 JAKARTA</td><td>74</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=fazliadiwidyatama808310" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-7.pdf" download>Sertifikat</a></td></tr>
          <tr><td>8</td><td>MUHAMMAD RIZAL ADITAMA</td><td>SMPN 3 GROGOL</td><td>74</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=muhammadrizal204254" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-8.pdf" download>Sertifikat</a></td></tr>
          <tr><td>9</td><td>DHINI SEPTYA RAMADHANI</td><td>SMPN 58 SURABAYA</td><td>74</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=dhiniseptya799208" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-9.pdf" download>Sertifikat</a></td></tr>
          <tr><td>10</td><td>ORLEAN ALVARO GUMILAR</td><td>SMP ISLAM AL IKHLAS</td><td>73</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=orleanalvaro379915" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-10.pdf" download>Sertifikat</a></td></tr>
          <tr><td>11</td><td>GITA PRATIWI</td><td>SMP NEGERI 1 PANGKAH</td><td>73</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=gitapratiwi647061" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-11.pdf" download>Sertifikat</a></td></tr>
          <tr><td>12</td><td>CALYA WULANDARI</td><td>SMPIT UKHUWAH</td><td>70</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=calyawulandari643488" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-12.pdf" download>Sertifikat</a></td></tr>
          <tr><td>13</td><td>NAZWA HAFSARI</td><td>SMPIT UKHUWAH</td><td>65</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=nazwahafsari542391" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-13.pdf" download>Sertifikat</a></td></tr>
          <tr><td>14</td><td>MUHAMAD RIESKY MAULANA</td><td>SMPIT AL ASHAR</td><td>57</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=muhamadriesky427767" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-14.pdf" download>Sertifikat</a></td></tr>
          <tr><td>15</td><td>SITI HAZAR</td><td>SMPIT UKHUWAH</td><td>46</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=sitihazar903475" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-IPS-15.pdf" download>Sertifikat</a></td></tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ======================= -->

<div class="modal fade" id="SMPmtk" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SMP Matematika</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-data table-striped">
            <thead>
                <tr>
                  <th width="1%">#</th>
                  <th>Nama</th>
                  <th>Sekolah</th>
                  <th>Skor</th>
                  <th>Medali</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

          <tr><td>1</td><td>ALIFIA KHANSA JUWITA</td><td>SMPN 4 SAMARINDA</td><td>97</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=alifiakhansa396097" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-1.pdf" download>Sertifikat</a></td></tr>
          <tr><td>2</td><td>SULTHANUL AULIYA RENANTHA AZMAL</td><td>SMPN 8 TANGERANG SELATAN</td><td>97</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=sulthanulauliya231170" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-2.pdf" download>Sertifikat</a></td></tr>
          <tr><td>3</td><td>ALEXANDER MARCEL TIMOTHY</td><td>SMP ST. ALOYSIUS BATUNUNGGAL, BANDUNG</td><td>97</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=alexandermarcel745437" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-3.pdf" download>Sertifikat</a></td></tr>
          <tr><td>4</td><td>RAYYAN AQSHA RADITYA</td><td>SMPN 1 SURABAYA</td><td>91</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=rayyanaqsha427097" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-4.pdf" download>Sertifikat</a></td></tr>
          <tr><td>5</td><td>ROWENA ANO KIRANA HADAD</td><td>SMP AL FALAH DELTASARI</td><td>89</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=rowenaano338927" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-5.pdf" download>Sertifikat</a></td></tr>
          <tr><td>6</td><td>SABRINA YEIRA ARISANDRA</td><td>MTSN 1 KOTA MALANG</td><td>89</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=sabrinayeira663877" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-6.pdf" download>Sertifikat</a></td></tr>
          <tr><td>7</td><td>NAZANINE ALIFA NOUSAFARIN</td><td>SMP PRIBADI BANDUNG</td><td>89</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=nazaninealifa422939" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-7.pdf" download>Sertifikat</a></td></tr>
          <tr><td>8</td><td>AZKA ATHAYA FAKHRIANSYAH</td><td>SMP NEGERI 115 JAKARTA</td><td>83</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=azkaathaya580537" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-8.pdf" download>Sertifikat</a></td></tr>
          <tr><td>9</td><td>WILLIAM HONG</td><td>SMP SWASTA METHODIST PEMATANGSIANTAR</td><td>83</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=williamhong212548" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-9.pdf" download>Sertifikat</a></td></tr>
          <tr><td>10</td><td>JASON VALERIAN SUGIARTO</td><td>SMP NEGERI 2 TEGAL</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=jasonvalerian243120" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-10.pdf" download>Sertifikat</a></td></tr>
          <tr><td>11</td><td>KEVIN VALERIAN SUGIARTO</td><td>SMP NEGERI 2 TEGAL</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=kevinvalerian147698" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-11.pdf" download>Sertifikat</a></td></tr>
          <tr><td>12</td><td>WISNU ADI NUGROHO</td><td>SMP NEGERI 2 PONTIANAK</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=wisnuadi936988" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-12.pdf" download>Sertifikat</a></td></tr>
          <tr><td>13</td><td>BRYANT VALERIAN SUGIARTO</td><td>SMP NEGERI 2 TEGAL</td><td>77</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=bryantvalerian157020" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-13.pdf" download>Sertifikat</a></td></tr>
          <tr><td>14</td><td>SAFURA OCTAVIANA CANTIKA GANI</td><td>SMPN 3 TANGERANG</td><td>77</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=safuraoctaviana152979" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-14.pdf" download>Sertifikat</a></td></tr>
          <tr><td>15</td><td>ORLEAN ALVARO GUMILAR</td><td>SMP ISLAM AL IKHLAS</td><td>74</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=orleanalvaro640036" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-15.pdf" download>Sertifikat</a></td></tr>
          <tr><td>16</td><td>OTNIELLA MAYTHA SARI</td><td>SMPK PELITA KASIH</td><td>71</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=otniellamaytha200648" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-16.pdf" download>Sertifikat</a></td></tr>
          <tr><td>17</td><td>WINA TRIANA</td><td>SMP NEGERI 14 PEKANBARU</td><td>69</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=winatriana986624" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-17.pdf" download>Sertifikat</a></td></tr>
          <tr><td>18</td><td>ZARA NADIA MEKKA</td><td>MTSN 2 BREBED</td><td>69</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=zaranadia558614" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-18.pdf" download>Sertifikat</a></td></tr>
          <tr><td>19</td><td>CLAIRE LESLIE SOETANTO</td><td>SMP MITRA HARAPAN</td><td>66</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=claireleslie719742" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-19.pdf" download>Sertifikat</a></td></tr>
          <tr><td>20</td><td>RANA SAHIRA RAMADHANI</td><td>SMPN 1 TASIKMALAYA</td><td>63</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=ranasahira435353" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-20.pdf" download>Sertifikat</a></td></tr>
          <tr><td>21</td><td>AZKA VIOLETTA DONIA</td><td>SMP NEGERI 161</td><td>57</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=azkavioletta213156" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-21.pdf" download>Sertifikat</a></td></tr>
          <tr><td>22</td><td>KEVIN NANDIKAPUTRA INDRAWAN</td><td>SMPK PENABUR KOTA MODERN</td><td>49</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=kevinnandikaputra400321" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-22.pdf" download>Sertifikat</a></td></tr>
          <tr><td>23</td><td>GHAZY RABBANI AKMAL</td><td>SMP AL AZHAR SYIFA BUDI PEKANBARU II</td><td>40</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=ghazyrabbani653498" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMP-MTK-23.pdf" download>Sertifikat</a></td></tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ======================= -->

<div class="modal fade" id="SMAbing" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SMA Bahasa Inggris</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-data table-striped">
            <thead>
                <tr>
                  <th width="1%">#</th>
                  <th>Nama</th>
                  <th>Sekolah</th>
                  <th>Skor</th>
                  <th>Medali</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

          <tr><td>1</td><td>JIHAN KAMILA AULIARAHMAN</td><td>WINDSOR HOMESCHOOLING BOGOR</td><td>94</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=jihankamila210479" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-1.pdf" download>Sertifikat</a></td></tr>
          <tr><td>2</td><td>FARADITA SYAHARANI MURDIYANA</td><td>SMAN 2 SURABAYA</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=faraditasyaharani618431" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-2.pdf" download>Sertifikat</a></td></tr>
          <tr><td>3</td><td>MUTIARA FATIMAH DIAZ</td><td>SMA CENDANA PEKANBARU</td><td>90</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=mutiarafatimah983799" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-3.pdf" download>Sertifikat</a></td></tr>
          <tr><td>4</td><td>MUHAMMAD RAVI WIJAYANTO</td><td>SMAN 1 PALEMBANG</td><td>88</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=muhammadravi381764" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-4.pdf" download>Sertifikat</a></td></tr>
          <tr><td>5</td><td>FELLYCIA JANICE SUTIOSO</td><td>SMA DON BOSCO II PULOMAS</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=fellyciajanice400622" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-5.pdf" download>Sertifikat</a></td></tr>
          <tr><td>6</td><td>DIMITRI DARMAWAN</td><td>SMA DON BOSCO II PULOMAS</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=dimitridarmawan362607" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-6.pdf" download>Sertifikat</a></td></tr>
          <tr><td>7</td><td>JOANNE MELINDA MANDEI</td><td>SMAN 9 BINSUS MANADO</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=joannemelinda133836" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-7.pdf" download>Sertifikat</a></td></tr>
          <tr><td>8</td><td>I MADE ADITHYA ARI SUDANA</td><td>SMAN 3 SAMARINDA</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=imade623261" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-8.pdf" download>Sertifikat</a></td></tr>
          <tr><td>9</td><td>GAVIN FARANDHYA</td><td>SMA DWI WARNA BOARDING SCHOOL BOGOR</td><td>86</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=gavinfarandhya768985" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-9.pdf" download>Sertifikat</a></td></tr>
          <tr><td>10</td><td>ABDULLAH SYAMIL BASAYEV</td><td>MA PERSIS 69 MATRAMAN</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=abdullahsyamil517946" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-10.pdf" download>Sertifikat</a></td></tr>
          <tr><td>11</td><td>ALLYVIA SHA WIBOWO</td><td>SMA LABSCHOOL JAKARTA</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=allyviasha176492" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-11.pdf" download>Sertifikat</a></td></tr>
          <tr><td>12</td><td>EVERETT KRISTOPHER PRADONO</td><td>SMA DON BOSCO II PULOMAS</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=everettkristopher481169" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-12.pdf" download>Sertifikat</a></td></tr>
          <tr><td>13</td><td>DANIELLA DARLENE HIMAWAN</td><td>SMA DON BOSCO II PULOMAS</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=danielladarlene776576" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-13.pdf" download>Sertifikat</a></td></tr>
          <tr><td>14</td><td>LUGTYA ANGGIRA</td><td>SMA LABSCHOOL CIRENDEU</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=lugtyaanggira260620" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-14.pdf" download>Sertifikat</a></td></tr>
          <tr><td>15</td><td>DAVENZKA GAVRILLA ABIGAYLE</td><td>SHENZHENSHI YAOHUA EXPERIMENTAL SCHOOL</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=davenzkagavrilla598321" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-15.pdf" download>Sertifikat</a></td></tr>
          <tr><td>16</td><td>NASYA REFINANDA</td><td>SMA LABSCHOOL JAKARTA</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=nasyarefinanda195838" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-16.pdf" download>Sertifikat</a></td></tr>
          <tr><td>17</td><td>ABID IHSANUL HAQ</td><td>SMA CENDANA PEKANBARU</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=abidihsanul831313" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-17.pdf" download>Sertifikat</a></td></tr>
          <tr><td>18</td><td>ROBERTO RAPHAEL SUHARLIM</td><td>SMA DON BOSCO II PULOMAS</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=robertoraphael968329" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-18.pdf" download>Sertifikat</a></td></tr>
          <tr><td>19</td><td>NAIFA AILY IRDANDY</td><td>SMAS CENDANA PEKANBARU</td><td>82</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=naifaaily644975" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-19.pdf" download>Sertifikat</a></td></tr>
          <tr><td>21</td><td>KEN TANAYA SALMANDJANI</td><td>SMAN 78 JAKARTA</td><td>80</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=kentanaya737841" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-21.pdf" download>Sertifikat</a></td></tr>
          <tr><td>22</td><td>VINSENS SANDRIAWAN</td><td>NATION STAR ACADEMY SURABAYA</td><td>76</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=vinsessandriawan918273" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-22.pdf" download>Sertifikat</a></td></tr>
          <tr><td>23</td><td>VICTORIA JEANNY WIBOWO</td><td>HOMESCHOOLING ENTREPRENEUR JOGJAKARTA</td><td>70</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=victoriajeanny546041" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-23.pdf" download>Sertifikat</a></td></tr>
          <tr><td>24</td><td>DEANNISA ELSHYFA IGAMO</td><td>MAN 1 YOGYAKARTA</td><td>70</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=deannisaelshyfa509436" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-24.pdf" download>Sertifikat</a></td></tr>
          <tr><td>25</td><td>MARIA MARISKA DESITA</td><td>SMA NEGERI 66 JAKARTA</td><td>70</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=mariamariska987135" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-25.pdf" download>Sertifikat</a></td></tr>
          <tr><td>26</td><td>INDAH DWI CAHYANI</td><td>SMAN 2 KOTA SERANG</td><td>66</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=indahdwi228611" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-26.pdf" download>Sertifikat</a></td></tr>
          <tr><td>27</td><td>FAIZA GALUH MARTA</td><td>MA NU BANAT KUDUS</td><td>64</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=faizagaluh730581" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-27.pdf" download>Sertifikat</a></td></tr>
          <tr><td>28</td><td>FATHAN SATYA PERMANA</td><td>SMA PASUNDAN 2</td><td>64</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=fathansatya917560" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-28.pdf" download>Sertifikat</a></td></tr>
          <tr><td>29</td><td>BIANI ERNESIA MANGKIN</td><td>SMK TELKOM BANJARBARU</td><td>60</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=bianiernesia724718" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-BING-29.pdf" download>Sertifikat</a></td></tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ======================= -->

<div class="modal fade" id="SMAipa" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SMA IPA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-data table-striped">
            <thead>
                <tr>
                  <th width="1%">#</th>
                  <th>Nama</th>
                  <th>Sekolah</th>
                  <th>Skor</th>
                  <th>Medali</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

          <tr><td>1</td><td>JOANNE MELINDA MANDEI</td><td>SMAN 9 BINSUS MANADO</td><td>89</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=joannemelinda253865" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-1.pdf" download>Sertifikat</a></td></tr>
          <tr><td>2</td><td>RIJAL AMRI</td><td>MAN 2 BREBES</td><td>85</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=rijalamri510764" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-2.pdf" download>Sertifikat</a></td></tr>
          <tr><td>4</td><td>NONA ADINDA MORA</td><td>SMA CENDANA PEKANBARU</td><td>70</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=nonaadinda215914" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-4.pdf" download>Sertifikat</a></td></tr>
          <tr><td>5</td><td>TEREZIA</td><td>SMAN 3 TORAJA UTARA</td><td>67</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=terezia765082" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-5.pdf" download>Sertifikat</a></td></tr>
          <tr><td>6</td><td>NISHA DIFA HENDIANSERA</td><td>SMA CENDANA PEKANBARU</td><td>67</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=nishadifa819168" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-6.pdf" download>Sertifikat</a></td></tr>
          <tr><td>7</td><td>MUTHIA AFIFAH</td><td>SMA CENDANA PEKANBARU</td><td>67</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=muthiaafifah827563" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-7.pdf" download>Sertifikat</a></td></tr>
          <tr><td>8</td><td>ANISAH LUTHFIYYAH</td><td>SMA CENDANA PEKANBARU</td><td>67</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=anisahluthfiyyah580885" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-8.pdf" download>Sertifikat</a></td></tr>
          <tr><td>9</td><td>EDINI PUTRI</td><td>SMA CENDANA PEKANBARU</td><td>65</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=ediniputri763893" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-9.pdf" download>Sertifikat</a></td></tr>
          <tr><td>10</td><td>VICTORIA JEANNY WIBOWO</td><td>HOMESCHOOLING ENTREPRENEUR JOGJAKARTA</td><td>62</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=victoriajeanny287427" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-10.pdf" download>Sertifikat</a></td></tr>
          <tr><td>11</td><td>KEN TANAYA SALMANDJANI</td><td>SMAN 78 JAKARTA</td><td>55</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=kentanaya567975" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-11.pdf" download>Sertifikat</a></td></tr>
          <tr><td>12</td><td>ALLYVIA SHAQUENA WIBOWO</td><td>SMA LABSCHOOL JAKARTA</td><td>52</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=allyviashaquena905816" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-12.pdf" download>Sertifikat</a></td></tr>
          <tr><td>13</td><td>RAHMAH</td><td>SMA NEGERI 2 SELAT</td><td>30</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=rahmah429470" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPA-13.pdf" download>Sertifikat</a></td></tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ======================= -->

<div class="modal fade" id="SMAips" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SMA IPS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-data table-striped">
            <thead>
                <tr>
                  <th width="1%">#</th>
                  <th>Nama</th>
                  <th>Sekolah</th>
                  <th>Skor</th>
                  <th>Medali</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

          <tr><td>1</td><td>DIMAS ANANDA PANGESTU</td><td>SMA NEGERI 1 BANDONGAN</td><td>54</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=dimasananda289041" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPS-1.pdf" download>Sertifikat</a></td></tr>
          <tr><td>2</td><td>NOVI DWI KARTIKASARI</td><td>SMA NEGERI 1 JIWAN</td><td>53</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=novidwi465555" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPS-2.pdf" download>Sertifikat</a></td></tr>
          <tr><td>3</td><td>PRISCA ARIFIANTY</td><td>SMA NEGERI 5 SURABAYA</td><td>52</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=priscaarifianty339776" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-IPS-3.pdf" download>Sertifikat</a></td></tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- ======================= -->

<div class="modal fade" id="SMAmtk" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SMA Matematika</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-data table-striped">
            <thead>
                <tr>
                  <th width="1%">#</th>
                  <th>Nama</th>
                  <th>Sekolah</th>
                  <th>Skor</th>
                  <th>Medali</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

          <tr><td>1</td><td>JAMES EDWARD SISWANTO</td><td>SMAK FRATERAN SURABAYA</td><td>87</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=jamesedward621430" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-MTK-1.pdf" download>Sertifikat</a></td></tr>
          <tr><td>2</td><td>DIVIF DWI FEBRIANTO DARMA PUTRA</td><td>SMAN TARUNA NALA JAWA TIMUR</td><td>87</td><td>Emas</td><td><a class="btn btn-success" href="preorder?uid=divifdwi375493" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-MTK-2.pdf" download>Sertifikat</a></td></tr>
          <tr><td>3</td><td>RANI NATALINE. S</td><td>SMAN 5 MEDAN</td><td>84</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=raninataline230358" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-MTK-3.pdf" download>Sertifikat</a></td></tr>
          <tr><td>4</td><td>VALEREO JIBRIL AL BUCHORI</td><td>SMAN 1 SURAKARTA</td><td>67</td><td>Perak</td><td><a class="btn btn-success" href="preorder?uid=valereojibril681610" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-MTK-4.pdf" download>Sertifikat</a></td></tr>
          <tr><td>5</td><td>SYELFA FEBI AURELIA</td><td>SMAN 47 JAKARTA</td><td>61</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=syelfafebi917439" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-MTK-5.pdf" download>Sertifikat</a></td></tr>
          <tr><td>7</td><td>SALWA SABIRA</td><td>SMAN 112 JAKARTA</td><td>53</td><td>Perunggu</td><td><a class="btn btn-success" href="preorder?uid=salwasabira344119" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-MTK-7.pdf" download>Sertifikat</a></td></tr>
          <tr><td>8</td><td>MUHAMMAD RAVI WIJAYANTO</td><td>SMAN 1 PALEMBANG</td><td>41</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=muhammadravi722881" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-MTK-8.pdf" download>Sertifikat</a></td></tr>
          <tr><td>9</td><td>RAFLI RUSTANDI</td><td>SMAN 3 CIREBON</td><td>30</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=raflirustandi586105" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-MTK-9.pdf" download>Sertifikat</a></td></tr>
          <tr><td>10</td><td>FARREL SULTHAN AKBARI</td><td>SMA MUHAMMADIYAH 11 RAWAMANGUN</td><td>27</td><td>Peserta</td><td><a class="btn btn-success" href="preorder?uid=farrelsulthan411573" target="_blank">Pesan Reward</a>&nbsp;<a class="btn btn-primary" href="https://github.com/rihandcreative/orc5/assets/pengumuman/sertifikat/SMA-MTK-10.pdf" download>Sertifikat</a></td></tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script>
	$(document).ready( function () {
    $('.table-data').DataTable({
    	"language": {
				"sProcessing":   "Sedang memproses...",
				"sLengthMenu":   "Tampilkan _MENU_ data",
				"sZeroRecords":  "Tidak ditemukan data yang sesuai",
				"sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
				"sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 data",
				"sInfoFiltered": "(disaring dari _MAX_ data keseluruhan)",
				"sInfoPostFix":  "",
				"sSearch":       "Cari:",
				"sUrl":          "",
				"oPaginate": {
					"sFirst":    "Pertama",
					"sPrevious": "Sebelumnya",
					"sNext":     "Selanjutnya",
					"sLast":     "Terakhir"
				}
			}
    });
	});
</script>

<!-- <script>
$(document).ready(function(){
        $.ajax({
            url : "assets/pengumuman/SD-BING.txt",
            dataType: "text",
            success : function (result) {
                $("#SDbingContent").html(result);
            }
        });
    ;
});
</script> -->

</body>
</html>