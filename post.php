<?php
include_once("templates/header.php");


if (isset($_GET["id"])) {

    $postId = $_GET["id"];
    $currentPost;

    foreach ($posts as $post) {
        if ($post["id"] == $postId) {
            $currentPost = $post;
        }
    }

}

?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title">
            <?= $currentPost["title"] ?>
        </h1>
        <p id="post-description">
            <?= $currentPost["description"] ?>
        </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost["img"] ?>" alt="<?= $currentPost["title"] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus atque pariatur
            nostrum voluptatem provident minima? Perspiciatis vitae impedit, delectus obcaecati exercitationem expedita
            distinctio vel facilis, eos, placeat nobis vero hic.
            Id alias culpa dolor, vitae porro expedita rerum sit aut facilis exercitationem itaque, quas minus
            excepturi, dolore vero eveniet. Quo, ipsam. Architecto eligendi obcaecati repudiandae aliquid nam
            exercitationem ex illo?
            Voluptatibus, reprehenderit. Similique expedita, ad facere repellendus dolore magni dolorum aperiam
            repudiandae consequatur vitae vero molestiae totam? Fugit beatae ex labore velit ipsum laudantium aliquam
            iure fuga tempore, eius quae!
            Possimus, nam sapiente. Vel omnis, odio repellat reiciendis molestias nesciunt porro deleniti labore
            consequuntur sunt distinctio, similique quae? Ullam adipisci repellat laborum minima harum hic non in eius
            quae quia.
            Eius exercitationem id consequatur ut officiis ullam aspernatur rem optio velit libero distinctio, aliquid
            quidem ea. Delectus quo dolores laboriosam fuga accusamus, facere quidem assumenda! Consequuntur obcaecati
            distinctio excepturi eum?
        </p>
    </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach ($currentPost["tags"] as $tag): ?>
                    <li><a href="#">
                            <?= $tag ?>
                        </a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach ($categories as $category): ?>
                    <li> <a href="#">
                            <?= $category ?>
                        </a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
</main>
<?php
include_once("templates/footer.php")
    ?>