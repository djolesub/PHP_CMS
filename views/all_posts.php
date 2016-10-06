<main class="col-md-12 bg-success">
    <!-- Left Side -->

    <?php
    while($page = $stmt->fetchAll(PDO::FETCH_ASSOC)){
        foreach($page as $p){
            echo "<article class='col-md-4' style='border:2px solid red;overflow:scroll'>";
            echo "<h1>{$p['title']}</h1><br>";
            echo "<p>{$p['content']}</p><br>";
            echo "</article>";
        }
    }

    ?>





</main>