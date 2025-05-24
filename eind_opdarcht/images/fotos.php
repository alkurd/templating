<?php $fotoArray = ['client_server.jpg', 'mysql.jpg', 'pdo.png', 'php.jpg'];
$gekozenFoto = $fotoArray[$gekozenIndex ?? 0] ?? null;?>

<?php if ($gekozenFoto): ?>
    <div class="foto-container">
        <img src="/templating/eind_opdarcht/images/<?= $gekozenFoto ?>" alt="Dynamische foto">
    </div>
<?php endif; ?>


