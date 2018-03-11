<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'haoapi');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_cates_all', 'cates/all');

Configure::write('API.url_articles_gethomedata', 'articles/gethomedata');