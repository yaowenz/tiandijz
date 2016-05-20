<?php
// Routes

$app->get('/', function ($request, $response, $args) {	
    // Sample log message
   // $this->logger->info("Slim-Skeleton '/' route");

    if(is_mobile()) {
        return $response->withHeader('Location',  $request->getUri()->getBaseUrl() . '/m');
    }
    
    return $this->view->render($response, 'index.twig.php', ['pageTitle' => '首页', 'name' => 'name']);
});

$app->get('/cleaning', function ($request, $response, $args) {
    return $this->view->render($response, 'cleaning.twig.php', ['pageTitle' => '保洁', 'name' => 'name']);
});


$app->get('/caring', function ($request, $response, $args) {
	return $this->view->render($response, 'senior-caring.twig.php', ['pageTitle' => '老年护理', 'name' => 'name']);
});

$app->get('/mammy', function ($request, $response, $args) {
	return $this->view->render($response, 'mammy.twig.php', ['pageTitle' => '月嫂 - 母婴护理', 'name' => 'name']);
});
	
$app->get('/baby', function ($request, $response, $args) {
	return $this->view->render($response, 'baby.twig.php', ['pageTitle' => '育儿嫂', 'name' => 'name']);
});		

	
$app->get('/fulltime', function ($request, $response, $args) {
	return $this->view->render($response, 'fulltime.twig.php', ['pageTitle' => '居家家务', 'name' => 'name']);
});


$app->get('/hourly', function ($request, $response, $args) {
	return $this->view->render($response, 'hourly.twig.php', ['pageTitle' => '钟点制/全日制家政员', 'name' => 'name']);
});

$app->get('/about', function ($request, $response, $args) {
	return $this->view->render($response, 'about.twig.php', ['pageTitle' => '关于天地', 'name' => 'name']);
});

/**
 * 移动页面
 */
$app->get('/m', function ($request, $response, $args) {

    return $this->view->render($response, 'mobile/index.twig.php', ['pageTitle' => '首页', 'name' => 'name']);
});
	