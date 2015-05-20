<?php
    /**
     * load kernel file.
     */
    require_once __DIR__ . '/../app/Kernel/Router.php';
    require_once __DIR__ . '/../app/Kernel/Controller.php';
    require_once __DIR__ . '/../app/Kernel/Model.php';

    /**
     * load config file.
     */
    require_once __DIR__ . '/../config/app.php';

    /**
     * bootstrap the application.
     */
    require_once __DIR__ . '/../app/helper.php';
    require_once __DIR__ . '/../app/route.php';

    // var_dump($_SERVER);
    var_dump($route);