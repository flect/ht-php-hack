<?hh 
echo "Hello Hack! <br />";

if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
    echo 'You are using Chrome.<br />';
}
