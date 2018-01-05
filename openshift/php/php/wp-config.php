define('DB_NAME', getenv(OPENSHIFT_APP_NAME'));

define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));

define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_PASSWORD') . ':' . getenv('OPENSHIFT_MYSQL_DB_PORT'));

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');

