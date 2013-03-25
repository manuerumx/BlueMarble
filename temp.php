<?php
$gettext_domain = 'en'; // change by language 
setlocale(LC_ALL, 'en_US.UTF-8'); // change by language, directory name sk_SK, not sk_SK.UTF-8 
bindtextdomain($gettext_domain, "lang"); 
textdomain($gettext_domain); 
bind_textdomain_codeset($gettext_domain, 'UTF-8'); 

echo "<br>";
echo gettext("The string must be here\n");

?>