<?php
/**
 * @file
 * porto_custom_content.features.inc
 */

/**
 * Implements hook_views_api().
 */
function porto_custom_content_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function porto_custom_content_node_info() {
  $items = array(
    'article' => array(
      'name' => t('Article'),
      'base' => 'node_content',
      'description' => t('Use <em>articles</em> for time-sensitive content like news, press releases or blog posts.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'carousel' => array(
      'name' => t('Carousel'),
      'base' => 'node_content',
      'description' => t('Use this to create content for an image carousel View block. '),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'contact' => array(
      'name' => t('Contact'),
      'base' => 'node_content',
      'description' => t('Use this to create a custom "Contact" page. '),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'faq' => array(
      'name' => t('FAQ'),
      'base' => 'node_content',
      'description' => t('Use this to create content for the FAQ View block. '),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'home_concept' => array(
      'name' => t('Home Concept'),
      'base' => 'node_content',
      'description' => t('Use this to create content for a the "Home Concept" circles block.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'our_history' => array(
      'name' => t('Our History'),
      'base' => 'node_content',
      'description' => t('Use this to create content for the "Our History" view block.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'parallax' => array(
      'name' => t('Parallax'),
      'base' => 'node_content',
      'description' => t('Use this to create content for a Parallax block. '),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'portfolio' => array(
      'name' => t('Portfolio'),
      'base' => 'node_content',
      'description' => t('Use this content type to create Portfolio items.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'team' => array(
      'name' => t('Team'),
      'base' => 'node_content',
      'description' => t('Use this content type to create Team items. '),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'testimonials' => array(
      'name' => t('Testimonials'),
      'base' => 'node_content',
      'description' => t('Used to create content for Testimonials View block.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'twitter_feed' => array(
      'name' => t('Twitter Feed'),
      'base' => 'node_content',
      'description' => t('Use this to create a Twitter feed view block.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'video_background' => array(
      'name' => t('Video Background'),
      'base' => 'node_content',
      'description' => t('Use this to create content for a Video Background block.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
