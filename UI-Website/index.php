<?php
$pageTitle = 'Beranda';
$activePage = 'beranda';
$basePath = './';
?>
<!DOCTYPE html>
<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   <?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?> | SAPA Campus
  </title>
  <link href="<?= htmlspecialchars($basePath, ENT_QUOTES, 'UTF-8'); ?>assets/css/style.css" rel="stylesheet"/>
 </head>
 <body>
  <main class="page">
   <?php require __DIR__ . '/includes/header.php'; ?>
   <section class="hero">
    <div>
     <span class="eyebrow">
      Platform Aspirasi Mahasiswa
     </span>
     <h2>
      Suara Mahasiswa,
      <br/>
      Perubahan untuk Kampus.
     </h2>
     <p>
      Sampaikan pengaduan dan aspirasi mengenai pelayanan akademik, dosen, fasilitas, dan lingkungan kampus melalui satu platform yang mudah digunakan.
     </p>
     <a class="btn">
      Mulai Sekarang
     </a>
     <a class="btn light" href="#alur">
      Pelajari Alur
     </a>
    </div>
    <img alt="Kegiatan mahasiswa dalam Festival Ormawa di Auditorium Universitas Negeri Padang" class="photo" src="https://unp.ac.id/nfs-assets/article/800/8b2a11653f2259b805656186f7e5f3e8.jpeg"/>
   </section>
   <section class="section">
    <h2>
     Suara Anda Penting
    </h2>
    <p class="lead">
     SAPA Campus membantu mahasiswa menyampaikan masukan secara terarah.
    </p>
    <div class="cards">
     <div class="card">
      <div class="ico">
       ✉
      </div>
      <h3>
       Mudah Menyampaikan
      </h3>
      <p>
       Formulir laporan yang sederhana dan jelas.
      </p>
     </div>
     <div class="card">
      <div class="ico">
       ▤
      </div>
      <h3>
       Laporan Terstruktur
      </h3>
      <p>
       Laporan dikelompokkan berdasarkan kategori.
      </p>
     </div>
     <div class="card">
      <div class="ico">
       ✓
      </div>
      <h3>
       Pantau Status
      </h3>
      <p>
       Periksa perkembangan dan tanggapan laporan.
      </p>
     </div>
    </div>
   </section>
   <section class="band">
    <div>
     <h2>
      Punya masukan untuk kampus?
     </h2>
     <p>
      Masuk atau daftar akun mahasiswa untuk mulai menyampaikan laporan.
     </p>
    </div>
    <a class="btn">
     Daftar Akun
    </a>
   </section>
   <?php require __DIR__ . '/includes/footer.php'; ?>
  </main>
 </body>
</html>
