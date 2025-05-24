<?php include ('content.php')?>
<?php require('variables.php')?>


<?php echo "<header>". $firstName ?> <?php echo $surName . "</header>" ?>

<?php echo "<main>";
foreach($typesOfFruits as $fruit){
    echo $fruit . "<br>" ; 
} echo "</main>"; ?> 

<?php echo $footer ?>
