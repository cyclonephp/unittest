<?php
define('cyclone\\SUPPRESS_REQUEST', TRUE);

require dirname(__FILE__).'/../../index.php';

\cyclone\FileSystem::enable_lib('unittest', cyclone\TOOLPATH . 'unittest/');

//Kohana::modules(Kohana::modules() + array('unittest' => MODPATH.'unittest'));
