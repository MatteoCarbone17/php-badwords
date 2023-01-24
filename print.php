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
echo  str_ireplace('js', '***', $_GET['hiddenText']);
?>
<span>
    lunghezza testo con hidden word :
</span>
<?php
echo strlen($_GET['hiddenText']);
?>