<div class="dropdown d-inline-block">
    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
        <img src="<?= PATH ?>/assets/img/lang/<?= \mf\App::$app->getProperty('language')['code'] ?>.png" alt="">
    </a>
    <ul class="dropdown-menu" id="languages">
        <?php foreach ($this->languages as $k => $v): ?>
            <?php if ( \mf\App::$app->getProperty('language')['code'] === $k) continue; ?>
        <?php endforeach; ?>
        <li>
            <button class="dropdown-item" data-langcode="<?= $k ?>">
                <img src="<?= PATH ?>/assets/img/lang/<?= $k ?>.png" alt="">
                <?= $v['title'] ?>
            </button>
        </li>
    </ul>
</div>
