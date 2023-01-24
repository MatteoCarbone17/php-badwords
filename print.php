<p>
    <?php
    echo $_GET['testo'];
    ?>
    lunghezza testo :
    <?php
    echo strlen($_GET['testo']);
    ?>
</p>
<?php

$stringaNascosta =  $_GET['testo'];
echo str_ireplace( $_GET['testo'] , '***', $stringaNascosta);

?>
<span>
    lunghezza hidden words :
</span>
<?php
echo strlen($stringaNascosta);
?>