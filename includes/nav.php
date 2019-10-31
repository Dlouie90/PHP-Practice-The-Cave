<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php
            foreach ($navItems as $item) {
                echo "<li class=\"nav-item\"><a href=\"" . $item['slug'] . "\">" . $item['title'] . "</a></li>";
            }
            ?>
        </ul>
    </div>
</nav>