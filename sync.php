<?php
include('vendor/autoload.php');
include('wp-load.php');

$args = array(
	'sort_order' => 'asc',
	'sort_column' => 'post_title',
	'hierarchical' => 1,
	'exclude' => '',
	'include' => '',
	'meta_key' => '',
	'meta_value' => '',
	'authors' => '',
	'child_of' => 0,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
); 
$pages = get_pages($args); 

// Create a client with a base URI
$client = new GuzzleHttp\Client();

foreach ($pages as $page)
{
	$data = [];
	$data['title'] = $page->post_title;
	$data['content'] = $page->post_content;
	$data['urls'][0]['url'] = $page->post_name.'/';
	$request = new GuzzleHttp\Psr7\Request('PUT', 'http://127.0.0.1:8000/api/v1/content/'.$page->ID, [], json_encode($data));
	$client->send($request);
}

echo "I'm so lucky ;)";