<?php
/**
 * DATABASE
 */
define("CONF_DB_HOST", "");
define("CONF_DB_USER", "");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.cafecontrol.com.br");
define("CONF_URL_TEST", "https://www.localhost/fsphp");
define("CONF_URL_ADMIN", "/admin");

/**
 * SITE
 */
define("CONF_SITE_NAME", "CaféControl");
define("CONF_SITE_TITLE", "Gerencie suas contas com o melhor café");
define("CONF_SITE_DESC",
    "O CafeControl é um gerenciador de contas simples, poderoso e gratuito. O prazer de tomar um café e ter o controle total de suas contas.");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "");
define("CONF_SITE_ADDR_STREET", "");
define("CONF_SITE_ADDR_NUMBER", "");
define("CONF_SITE_ADDR_COMPLEMENT", "");
define("CONF_SITE_ADDR_CITY", "");
define("CONF_SITE_ADDR_STATE", "");
define("CONF_SITE_ADDR_ZIPCODE", "");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "");
define("CONF_SOCIAL_FACEBOOK_APP", "");
define("CONF_SOCIAL_FACEBOOK_PAGE", "");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "");
define("CONF_SOCIAL_GOOGLE_PAGE", "");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "");
define("CONF_SOCIAL_YOUTUBE_PAGE", "");
/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "cafeweb");
define("CONF_VIEW_APP", "cafeapp");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "");
define("CONF_MAIL_PORT", "");
define("CONF_MAIL_USER", "");
define("CONF_MAIL_PASS", "");
define("CONF_MAIL_SENDER", ["name" => "", "address" => ""]);
define("CONF_MAIL_SUPPORT", "");
define("CONF_MAIL_OPTION_LANG", "");
define("CONF_MAIL_OPTION_HTML", "true/false");
define("CONF_MAIL_OPTION_AUTH", "true/false");
define("CONF_MAIL_OPTION_SECURE", "");
define("CONF_MAIL_OPTION_CHARSET", "");