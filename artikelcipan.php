<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
    <link rel="manifest" href="ico/site.webmanifest">    <title>FachRyyz Corporation</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Bagian Atas -->
 

  <!-- Gambar Dinamis (Slideshow) -->
  <section class="max-w-4xl mx-auto mt-8 p-4 bg-white shadow-md rounded-lg">
    <div class="relative">
      <img id="slider-image" src="images/cipan1.jpeg" alt="citra" class="w-full rounded-lg h-64 object-cover">
      <div class="absolute top-1/2 left-0 transform -translate-y-1/2 px-2">
        <button onclick="prevImage()" class="bg-black bg-opacity-50 text-white p-2 rounded-full">&#10094;</button>
      </div>
      <div class="absolute top-1/2 right-0 transform -translate-y-1/2 px-2">
        <button onclick="nextImage()" class="bg-black bg-opacity-50 text-white p-2 rounded-full">&#10095;</button>
      </div>
    </div>
  </section>

  <!-- Artikel Lanjutan -->
  <section class="max-w-4xl mx-auto mt-6 mb-24 p-6 bg-white shadow-md rounded-lg">
    <h2 align="center" class="text-xl font-semibold mb-4">CITRA 8 SUNSET AVENUE
    </h2>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Salah satu tempat merenung favorit saya di daerah jakarta barat, tempat ini cukup dekat dengan perbatasan kota tangerang.
      <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menurut saya tempat ini adalah tempat yang cocok untuk merenung karena angin sepoi yang cukup sering dan suasana yang cukup indah, menjadikan tempat ini yang cocok untuk ovt :v
      <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kalian juga bakal sering nih liat BMW kalo lagi hoki juga bisa ketemu GTR, PORSCHE, dan Supercar lainnya.
      <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ada beberapa cafe yang estetik juga di daerah ini dengan menawarkan pemandangan danau dan kopi yang aromatik, membuat cafe ini cukup worth it walaupun akan boros di kantong, karena harganya mulai dari 25rb - 50rb agak overprice memang.
      <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stand-stand yang ada juga cukup beragam mulai dari makanan ringan sampai teh manis biasa, tetapi harganya jauh lebih terjangkau dibanding cafe, yaitu kisaran 15rb - 30 rb.
      <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;saya lebih baik jajan di indomaret atau alfamart yang ada di dekat lokasi karena harga nya masih mengikuti harga nasional berbeda dengan bandara yang harganya cenderung dimahalkan.
      <br />
      <br />
      <br />
      rating dari saya untuk tempat ini adalah, 8.2 / 10
    </p>
  </section>


  
 
<footer class="footer">
        <div class="mx-auto">
            <nav class="navigasi">
            <a href="#">< Prev</a>
            <a href="fachryyz.com">| Home |</a>
            <a href="#">Next ></a>
        </nav>
        </div>
        <div class="social-icons">
            <a href="facebook.com/Ryyzens" class="fb" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" class="tw" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="instagram.com/Fachryyz" class="ig" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" class="gh" target="_blank"><i class="fab fa-github" ></i></a>
        </div>

 <!-- JavaScript untuk Gambar Dinamis -->
        <script>
    const images = [
      'images/cipan2.jpeg',
      'images/cipan3.jpeg',
      'images/cipan1.jpeg'
    ];

    let currentIndex = 0;
    const imgElement = document.getElementById("slider-image");

    function showImage(index) {
      imgElement.src = images[index];
    }

    function nextImage() {
      currentIndex = (currentIndex + 1) % images.length;
      showImage(currentIndex);
    }

    function prevImage() {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      showImage(currentIndex);
    }

    // Ganti gambar otomatis setiap 5 detik
    setInterval(nextImage, 5000);
  </script>

</footer>  
</body>

</html>
