
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
echo  str_ireplace( 'js','***',$_GET['hiddenText'] );

?>
