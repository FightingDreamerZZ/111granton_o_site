<?php
/**
 * Created by PhpStorm.
 * Mainly modifications on configurations:
 */
?>

《--301 redirect for divided stream of same site(www & non-www), in (.htaccess) file--》
RewriteCond %{HTTP_HOST} ^agtecars\.com$ [NC]
RewriteRule ^/?$ "http\:\/\/www\.agtecars\.com\/" [R=301,L]