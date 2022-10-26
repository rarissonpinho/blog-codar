<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }

        }

    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>  
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed distinctio iusto inventore debitis? Quae architecto voluptates laborum ex labore eum. Quidem tempora assumenda, provident facere laborum necessitatibus sit fugit rem.
            Cumque quidem facilis aut reprehenderit hic cupiditate eligendi laudantium sit esse mollitia similique commodi unde saepe modi doloremque sint, possimus distinctio consectetur! Pariatur, eum tenetur! Similique, quia! Ut, quam quibusdam!
            Laborum maxime labore voluptatum deserunt veniam ab sed eligendi neque expedita dolorum, itaque in illum delectus alias? Recusandae ab accusantium distinctio similique repudiandae, cupiditate ex totam tempora inventore facere voluptas.
            Natus sint rem quibusdam ut? Esse, repudiandae placeat minus similique adipisci odio sapiente debitis consequuntur voluptatem aspernatur! Ducimus suscipit esse itaque culpa aperiam tempora inventore, saepe quibusdam consequuntur atque. Suscipit.
            Non at ad odio quibusdam, aut nihil esse aspernatur necessitatibus minima corrupti qui suscipit earum neque itaque. Dignissimos quasi ad, labore, fugiat velit eos totam sunt voluptatem aut architecto delectus?</p>
        </div>           
            <aside id="nav-container">
                <h3 id="tags-title">Tags</h3>
                <ul id="tags-list">
                    <?php foreach($currentPost['tags'] as $tag): ?>
                        <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <h3 id="categories-title">Categorias</h3>
                <ul id="categories-list">
                    <?php foreach($categories as $category): ?>
                        <li><a href="#"><?= $category ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </aside>
    </main>
    
<?php
    include_once("templates/footer.php")
?>
