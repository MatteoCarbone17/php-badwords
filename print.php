<p>
    testo inserito:
    <?php
    echo $_GET['testo'];
    ?>
</p>
<p>
    lunghezza testo :
    <?php
    echo strlen($_GET['testo']);
    ?>

</p>

<p>
    testo nascosto inserito:
    <?php
    $stringaNascosta =  $_GET['testo'];
    echo str_ireplace('java', '***', $stringaNascosta);
    ?>
</p>
<p>
    lunghezza testo :
    <?php
    echo strlen($stringaNascosta);
    ?>

</p>
