<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<H1>Pasākumi Cēsīs</H1>
<ul>
<?php 
foreach($events as $event){
    echo "<li>" . $event["datums_laiks"] . " / " . $event["nosaukums"] . " / " . $event["norises_vieta"];
}
?>
</ul>


<?php require "components/footer.php" ?>