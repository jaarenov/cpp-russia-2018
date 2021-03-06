<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php print tr('title')?></title>
    <?php partial("includes", $GLOBALS["project_root"]); ?>
</head>
<body class="cpp-r main">
<header class="cpp-r_header">
    <?php partial("templates/header", $GLOBALS["project_root"]); ?>
    <div class="cpp-r_wrap">
        <!-- -->
        <h1 class="cpp-e_page-title">
            <?php print tr('title with br') ?>
        </h1>
        <!-- -->
        <!-- -->
        <div class="cpp-b_number-facts cpp-b_only-desktop flex">
            <div class="cpp-b_responsive-row-cols">
                <!-- -->
                <div class="number-fact row-col">
                    <div class="number">
                        27
                    </div>
                    <div class="fact">
                        <?php print tr('best speakers')?>
                    </div>
                </div>
                <!-- -->
                <!-- -->
                <div class="number-fact row-col">
                    <div class="number">
                        1250
                    </div>
                    <div class="fact">
                        <?php print tr('minutes') ?>
                    </div>
                </div>
                <!-- -->
            </div>
        </div>
        <!-- -->
    </div>
</header>
<main class="cpp-r_main">
    <?php require __DIR__."/pages/main.php"?>
</main>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtxwRGTL4-AKlGJYKDVxzr_MymCP9XpLQ"></script>
<?php partial("templates/footer", $GLOBALS["project_root"]); ?>
</body>
</html>
