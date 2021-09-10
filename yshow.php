<?php
    include "library/config.php";
    $result = mysqli_query($connection, "SELECT * FROM yvideos ORDER BY id DESC");
    while($row = mysqli_fetch_assoc($result)){
        $video = $row['url'];
        $convideo = str_replace("watch?v=", "embed/", $video);
        
    
?>
<iframe width="560" height="315" src="<?= $convideo; ?>?modestbranding=1&autoplay=1&template=terms" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<?php } ?>

