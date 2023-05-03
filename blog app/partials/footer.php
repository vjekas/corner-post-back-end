<!---------------------- FOOTER ---------------------->
<footer>
            <div class="footer__socials">
                <a href="https://github.com/vjekas" target="_blank"><i class="uil uil-github"></i></a>
                <a href="https://youtube.com" target="_blank"><i class="uil uil-youtube"></i></a>
                <a href="https://instagram.com/vjekas.dev" target="_blank"><i class="uil uil-instagram"></i></a>
            </div>

            <div class="container footer__container">
                <article>
                    <h4>Categories</h4>
<?php
$all_categories_query = "SELECT * FROM categories";
$all_categories = mysqli_query($connection, $all_categories_query);
?>
                    <ul>
                    <?php while ($category = mysqli_fetch_assoc($all_categories)): ?>
                        <li><a href="<?=ROOT_URL?>category-post.php?id=<?=$category['id']?>"><?=$category['title']?></a></li>
                    <?php endwhile?>
                    </ul>
                </article>

                <article>
                    <h4>Support</h4>
                    <ul>
                        <li><a href="">Online Support</a></li>
                        <li><a href="">Call Numbers</a></li>
                        <li><a href="">Emails</a></li>
                        <li><a href="">Social Support</a></li>
                        <li><a href="">Location</a></li>
                    </ul>
                </article>

                <article>
                    <h4>Blog</h4>
                    <ul>
                        <li><a href="">Safety</a></li>
                        <li><a href="">Repair</a></li>
                        <li><a href="">Recent</a></li>
                        <li><a href="">Popular</a></li>
                        <li><a href="">Categories</a></li>
                    </ul>
                </article>

                <article>
                    <h4>Permalinks</h4>
                    <ul>
                        <li><a href="<?=ROOT_URL?>">Home</a></li>
                        <li><a href="<?=ROOT_URL?>blog.php">Blog</a></li>
                        <li><a href="<?=ROOT_URL?>about.php">About</a></li>
                        <li><a href="<?=ROOT_URL?>services.php">Services</a></li>
                        <li><a href="<?=ROOT_URL?>contact.php">Contact</a></li>
                    </ul>
                </article>
            </div>

            <div class="footer__copyright">
                <small>&copy CORNER POST</small>
            </div>
        </footer>

        <!---------------------- JS ---------------------->
        <script src="<?=ROOT_URL?>js/main.js"></script>
    </body>
</html>
