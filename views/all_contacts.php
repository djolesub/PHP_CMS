<div class="row">
    <article class="container">
        <?php

        if($user) {
            echo "<table class='table table-inverse'><tr><th>ID</th><th>User Type</th><th>User Name</th><th>Email</th><th>Password</th><th>Date Join</th>";
            while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>{$res['id']}</td><td> {$res['userType']}</td><td> {$res['username']}</td><td> {$res['email']}</td><td> {$res['pass']}</td><td> {$res['dateAdded']}</td></tr>";
            }
        }else {
            echo "You don't have permission to se content";
        }
        ?>
    </article>

</div>