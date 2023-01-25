<h3>
    Paragrafo originale 
</h3>
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

<h3>
   Paragrafo con parola oscurata 
</h3>

<?php  $hiddenPara = str_ireplace($_GET['hiddenword'], '***' ,  $_GET['testo']) ;  ?>


<p>
    testo nascosto inserito:
    <?php
    echo  $hiddenPara;
    ?>
</p>
<p>
    lunghezza testo :
    <?php
    echo strlen($hiddenPara);
    ?>

</p>
