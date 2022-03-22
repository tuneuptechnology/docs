<div class="dropdown">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="languageSelector" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo strtoupper($_GET['lang'] ?? 'curl') ?>
    </button>
    <ul class="dropdown-menu" aria-labelledby="languageSelector">
        <li><a class="dropdown-item" href="?lang=curl">Curl</a></li>
        <li><a class="dropdown-item" href="?lang=go">Go</a></li>
        <li><a class="dropdown-item" href="?lang=node">Node</a></li>
        <li><a class="dropdown-item" href="?lang=php">PHP</a></li>
        <li><a class="dropdown-item" href="?lang=python">Python</a></li>
        <li><a class="dropdown-item" href="?lang=ruby">Ruby</a></li>
    </ul>
</div>
