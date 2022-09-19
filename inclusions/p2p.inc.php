    <footer>
        <div class="da">&copy;2018-2022 Simfolio. <?= $ppDroits; ?></div>
        <nav class="navigation-secondaire">
            <a href="#" title="<?= $entAVenir; ?>"><?= $ppConfidentialite; ?></a>
            <a href="#" title="<?= $entAVenir; ?>"><?= $ppConditions; ?></a>

            <!-- Configurez ces liens pour qu'ils servent à changer de langue ! -->
            <a href="?langue=fr" title="Français" class="<?= $langue==='fr' ? 'actif' : ''; ?>">FR</a>
            <a href="?langue=en" title="English" class="<?= $langue==='en' ? 'actif' : ''; ?>">EN</a>
            <a href="?langue=ar" title="العربية" class="<?= $langue==='ar'?'actif':'' ?>">AR</a>
        </nav>
    </footer>
</body>
</html>