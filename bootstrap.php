<?php
define('cyclone\\SUPPRESS_REQUEST', TRUE);

require dirname(__FILE__).'/../../index.php';

FileSystem::enable_lib('unittest', TOOLPATH . 'unittest/');

//Kohana::modules(Kohana::modules() + array('unittest' => MODPATH.'unittest'));
