<?php

/**
 * settings.php -- part of Server side of Extended QGIS Web Client
 *
 * Copyright (2014-2015), Level2 team All rights reserved.
 * More information at https://github.com/uprel/gisapp
 */

//true loads source javascript files, false loads single minified version for production
define('DEBUG', false);

//database connection
define('DB_CONN_STRING', 'pgsql:host=localhost;port=5432;dbname=gisapp');

//db user
define('DB_USER', 'username');
define('DB_PWD', 'password');

//project location
define('PROJECT_PATH', '/var/www/html/gisapp/_demo/');

//superuser, currently irrelevant
define('SUPERUSER', 'gisadmin');

//qgis server
define('QGISSERVERURL', 'http://localhost/cgi-bin/qgis_mapserv.fcgi');

//other settings
define('OGR2OGR', 'ogr2ogr');
define('TEMP_PATH', '/var/tmp/');
define('GISAPPURL', '/gisapp/'); //for now this one should not change!
