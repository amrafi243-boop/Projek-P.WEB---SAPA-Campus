<?php
// $activePage dan $basePath ditentukan oleh masing-masing halaman.
$navItems =
    [
        'beranda' => ['label' => 'Beranda', 'url' => $basePath . 'index.php'],
        'tentang' => ['label' => 'Tentang', 'url' => $basePath . 'pages/tentang.php'],
        'alur' => ['label' => 'Alur', 'url' => $basePath . 'pages/alur.php'],
        'kategori' => ['label' => 'Kategori', 'url' => $basePath . 'pages/kategori.php'],
        'faq' => ['label' => 'FAQ', 'url' => $basePath . 'pages/faq.php'],
        'kontak' => ['label' => 'Kontak', 'url' => $basePath . 'pages/kontak.php'],
    ];
?>
<nav class="nav">
    <div class="brand">
        <span class="logo">
            S
        </span>
        <span>
            SAPA Campus
            <small style="display:block;font-size:10px;font-weight:500;color:inherit;opacity:.75">
                Aspirasi &amp; Pengaduan Akademik
            </small>
        </span>
    </div>
    <div class="links">
        <?php foreach ($navItems as $key => $item): ?>
            <a class="<?= $activePage === $key ? 'active' : ''; ?>"
                href="<?= htmlspecialchars($item['url'], ENT_QUOTES, 'UTF-8'); ?>" phpblockplaceholder4x="">
                <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
        <?php endforeach; ?>
        <a class="btn" href="<?= htmlspecialchars($basePath . 'login.php', ENT_QUOTES, 'UTF-8'); ?>">
            Login
        </a>
    </div>
</nav>
