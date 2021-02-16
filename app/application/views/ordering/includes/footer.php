<?php 
$footer_content = $this->db->query("SELECT product.category_id, count(product.product_category) AS top FROM product INNER JOIN order_items ON order_items.product_id = product.product_id GROUP BY product.category_id ORDER BY top DESC LIMIT 2"); 

$color_content = $this->item_model->fetch("content",  array("content_id" => 1))[0];
?>
<div id="footer" data-animate="fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h4>Pages</h4>
                <ul>
                    <li><a href="text.html">About us</a>
                    </li>
                    <li><a href="text.html">Terms and conditions</a>
                    </li>
                    <li><a href="<?= site_url('home/faq') ?>">FAQ</a>
                    </li>
                    <li><a href="<?= site_url('home/contact') ?>">Contact us</a>
                    </li>
                </ul>
                <hr>
                <h4>User section</h4>
                <ul>
                    <?php if ($this->session->has_userdata('isloggedin')) { ?>
                    <li><a href="<?= site_url('home/customer_orders') ?>">Track my Order(s)</a></li>
                    <li><a href="<?= site_url('home/account') ?>">Manage my Account</a></li>
                    <li><a href="<?= site_url('logout') ?>">Logout</a></li>
                    <?php } else { ?>
                    <li><a href="<?= site_url('login') ?>">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <?php } ?>
                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div> <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <h4>Top categories</h4>
                <?php foreach($footer_content->result() as $content): 
                $category_content = $this->item_model->fetch("category","category_id = '$content->category_id' AND status = 1")[0];
                ?>
                <h5><?=ucwords($category_content->category)?></h5>
                <?php
                $brand_id = $this->db->query("SELECT product.brand_id, count(product.product_brand) AS top_brand FROM product INNER JOIN order_items ON order_items.product_id = product.product_id
                    WHERE  product.category_id = '$content->category_id' GROUP BY product.product_brand ORDER BY top_brand DESC LIMIT 3");
                    ?>
                    <ul>
                        <?php foreach($brand_id->result() as $brand_id):
                        $brand_content = $this->item_model->fetch("brand","brand_id = '$brand_id->brand_id' AND status = 1")[0]; 
                        ?> 
                        <li><a href="<?= base_url() . 'home/category/' . $category_content->category . '/' . $brand_content->brand_name . ''; ?>"><?=ucwords($brand_content->brand_name)?></a></li>
                    <?php endforeach;?>
                </ul>
            <?php endforeach;?>
            <hr class="hidden-md hidden-lg">
        </div> <!-- /.col-md-3 -->
        <div class="col-md-3 col-sm-6">
            <h4>Services</h4>
            <ul>
                <li><a href=<?= site_url('home/repair') ?>>Apple Repair</a></li>
                <li><a href=<?= site_url('home/recovery') ?>>Data Recovery</a></li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-6">
            <h4>Where to find us</h4>
            <p>
                Grass Residences, Unit 1717-B Tower 1
                <br>SMDC The, Nueva Viscaya, Bago
                <br>Bantay, Quezon City, Metro Manila
                <br>Philippines
            </p>
            <a href="<?= site_url('home/contact')?>">Go to contact page</a>

            <hr>
            <h4>Stay in touch</h4>
            <p class="social">
                <a href="https://www.facebook.com/TechnoholicsPH" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/TechnoholicsPH" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/technoholicsph" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
            </p>
        </div> <!-- /.col-md-3 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->
</div> <!-- /#footer -->
<!-- *** FOOTER END *** -->
<!-- *** COPYRIGHT ***
    _________________________________________________________ -->
    <div id="copyright"  style = "background-color: <?= $color_content->customer_color1; ?>">
        <div class="container">
            <div class="col-md-6">
                <p class="pull-left">© <?= date("Y"); ?> <img src = "<?= $this->config->base_url() ?>images/icon2.png" width = "9%">ETHEREAL</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious</a> & <a href="https://fity.cz">Fity</a>
                    <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                </p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- *** COPYRIGHT END *** -->
<!-- *** SCRIPTS TO INCLUDE ***
    _________________________________________________________ -->

    <script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>


</body>
</html>