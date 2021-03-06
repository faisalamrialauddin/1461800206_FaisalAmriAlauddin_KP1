
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#home" class="w3-bar-item w3-button">Home</a>
      <a href="#article" class="w3-bar-item w3-button">Article</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact Us</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="<?php echo base_url() ?>img/faisal.JPG" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-hide-small w3-text-light-grey">about me</span><b> Faisal Amri A</b> </h1>
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-hide-small w3-text-light-grey">Mahasiswa Universitas 17 Agustus 1945 Surabaya</span></h1>
  </div>
  
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- About -->
  <div class="w3-container w3-padding-0 w3-justify" id="home">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-8">About Me</h3>
    <p>Saya seorang Mahasiswa Fakultas Teknik Prodi Teknik Informatika semester 4. Saat ini saya sedang mengikuti praktikum pengembangan teknologi web.
      Semoga saya dapat menyelesaikan praktikum dengan baik dan tentunya mendapatkan hasil yang maksimal serta bermanfaat untuk masyarakat.
    </p>
  </div>

  <!-- Article -->
  <div class="w3-container w3-padding-32 w3-justify" id="article">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-8">Laravel</h3>
    <p class="w3-justify">
Apa itu Laravel?
Anda pasti tahu bahasa pemrograman PHP? Laravel adalah satu-satunya framework yang membantu Anda untuk memaksimalkan penggunaan PHP di dalam proses pengembangan website. 

PHP menjadi bahasa pemrograman yang sangat dinamis, tapi semenjak adanya Laravel, dia menjadi lebih powerful, cepat, aman, dan simpel. Setiap rilis versi terbaru, Laravel  selalu memunculkan teknologi baru di antara framework PHP lainnya.

    <br>
    M => Model // Semua panggilan yang berhubungan dengan Database akan ditentukan di sini, 
    seperti pengambilan data, Insert, Delete dan Update Data.
    <br>
    V => View // Sesuai Namanya, View hanya tampilan yang biasa disebut HTML. 
    Semua data terkait dengan View (html) akan ditentukan di sini.
    <br>
    C => Controller // Merupakan jembatan antara model dan view. 
    Ketika kamu mencari sesuatu di browser web. Hal tersebut akan 
    langsung menuju ke controller dan controller menggunakan Model dan view untuk menampilkan hasil yang sesuai.
    </p>

    <p>
Laravel diluncurkan sejak tahun 2011 dan mengalami pertumbuhan yang cukup eksponensial. Di tahun 2015, Laravel adalah framework yang paling banyak mendapatkan bintang di Github. Sekarang framework ini menjadi salah satu yang populer di dunia, tidak terkecuali di Indonesia. 

Laravel fokus di bagian end-user, yang berarti fokus pada kejelasan dan kesederhanaan, baik penulisan maupun tampilan, serta menghasilkan fungsionalitas aplikasi web yang bekerja sebagaimana mestinya. Hal ini membuat developer maupun perusahaan menggunakan framework ini untuk membangun apa pun, mulai dari proyek kecil hingga skala perusahaan kelas atas.

Laravel mengubah pengembangan website menjadi lebih elegan, ekspresif, dan menyenangkan, sesuai dengan jargonnya ???The PHP Framework For Web Artisans???. Selain itu, Laravel juga mempermudah proses pengembangan website dengan bantuan beberapa fitur unggulan, seperti Template Engine, Routing, dan Modularity.    
    </p>
    <h3 class="w3-padding-8">Fitur - Fitur</h3>
    <p class="w3-wide">
      <li>Framework berbasis Model-View-Controller (MVC)</li>
      <li>Support terhadap mayoritas jenis Database</li>
      <li>Mendukung Query Builder</li>
      <li>Bersifat Independent</li>
      <li>Validasi Form dan Data</li>
      <li>Session Management</li>
      <li>Mengamankan website dari XSS (Cross site scripting)</li>
      <li>File Uploading class</li>
    </p>

   <h3 class="w3-padding-8">Kelebihan Laravel</h3>
    <p class="w3-wide">
      <li>Cepat, Ringan, dan dapat diandalkan</li>
      <li>Framework Laravel kompatibel dengan sebagian besar server web, berbagai sistem operasi dan platform.</li>
      <li>Dapat digunakan di banyak sistem manajemen database</li>
      <li>Laravel memiliki bahasa program yang sama dengan yang digunakan pada website</li>
      <li>Memiliki komunitas besar, jadi kamu bisa dengan mudah mencari informasi ketika mengalami kesulitan dalam penggunaan Laravel</li>

    </p>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-0" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-8">Contact Us</h3>
    <p>Email : icalsdagaul@gmail.com</p>
    <p>Instagram : <a href="">@faisalamri_</a></p>
  </div>

<!-- End page content -->
</div>
