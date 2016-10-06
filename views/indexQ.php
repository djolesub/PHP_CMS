<?php  include_once "includes/header.inc.php";?>
<?php

    while ($res = $stmt->fetch()){
        echo $res->getTitle();
        echo "<p><a href=\"page.php?id={$res-> getId()}\">read more here...</a></p>";
}

?>




<?php  include_once "includes/footer.inc.php";?>