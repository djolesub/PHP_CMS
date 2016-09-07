<div class="row">
    <footer class="col-md-12 bg-danger">

    <!-- Left Side -->
        <aside class="col-md-4">
           <h2> Navigation</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Arhives</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Our Projects</a></li>
                <li><a href="#">Education</a></li>
            </ul>
        </aside>
    <!-- Midle Container -->
    <article class="col-md-4">
        <h1> Advertaisment</h1>
        <!-- Left Side -->
        <section class="col-md-6">
            <h2>Midle Side</h2>
            <h2>Midle Side</h2>
            <h2>Midle Side</h2>
        </section>
        <!-- Right Side -->
        <section class="col-md-6">
            <h2>Neki logo ovde da bude.</h2>
            <h2>Pa neka reklama</h2>
        </section>
    </article>

      <!-- Right Side -->
        <aside>
            <?php
                if($user ) {
                    echo "
                          <a href='add_page.php'>Create Page</a>
                         <h2>Right Side Can Create</h2>
                        <h2>Right Side Can Create</h2>
                        <h2>Right Side Can Create</h2>
                        <h2>Right Side Can Create</h2>";
                }else {
                    echo "  <h2>Right Side Can not create</h2>";
                }

            ?>
        </aside>



    </footer>
</div>




