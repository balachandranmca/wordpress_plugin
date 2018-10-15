<?php

add_shortcode('DEMO_SAMPLE', 'demo_sample_shortcode');

function demo_sample_shortcode($atts) {
	ob_start();
	include_once 'template/samplepage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_nopriv_demo_api', 'demo_api');
add_action('wp_ajax_demo_api', 'demo_api');

function demo_api()
{
	$url = $_POST['url'];
    // $url = "https://jsonplaceholder.typicode.com/todos/1";
    $result = file_get_contents($url);
	echo $result;
	exit;
}