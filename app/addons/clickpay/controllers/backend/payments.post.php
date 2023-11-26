<?php

use Tygh\Registry;


if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

/**
 * @var string $mode
 * @var string $action
 * @var array $auth
 */


if ($mode == 'processor') {

    require_once(DIR_ROOT.'/app/addons/clickpay/payments/clickpay_core.php');
    $endpoints = ClickpayApi::getEndpoints();

    /** @var \Tygh\SmartyEngine\Core $view */
    $view = Tygh::$app['view'];

    $view->assign('endpoints', $endpoints);
}
