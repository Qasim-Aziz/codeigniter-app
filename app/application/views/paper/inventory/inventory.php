<?php $counter = 1;?>
<div class="content">
    <div class="container-fluid">
        <div align = "right">
            <?php if($this->session->flashdata('statusMsg')):?>
                <script>
                    $(document).ready(function(){
                        $.notify({
                            icon: "<?= $this->session->flashdata('icon') ?>",
                            message: "<?= $this->session->flashdata('statusMsg') ?>"
                        },{
                            type: "<?= $this->session->flashdata('color') ?>",
                            timer: 2000
                        });
                    });
                </script>
            <?php endif; ?>
            <form  action = "<?= base_url() . 'inventory/search'; ?>" method = "POST">
                <div class="input-group">
                    <input type="text" name="search" class = "search" placeholder="Search product...">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type = "submit" style = "border-color: #ccc">
                            <i class="ti-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style = "padding: 30px">
                    <div class="header">
                        <div align = "left">
                            <h2 class="title"><b>Products List</b></h2>
                            <p class="category">
                                Here are the list of products as of <span style = 'background-color: #dc2f54; color: white; padding: 3px;'><?= date("F j, Y"); ?>.</span><br>
                                <a href="<?= base_url() ?>reports/inventory"> <u>See inventory report.</u></a>
                            </p><br>
                            <a href = "<?= $this->config->base_url() ?>inventory/add_product" class="btn btn-info btn-fill" style="background-color: #31bbe0; border-color: #31bbe0; color: white;" title = "Insert new product">Add Product</a>
                            <a href = "<?= $this->config->base_url() ?>inventory/recover_product" class="btn btn-info btn-fill" style = "background-color: #31bbe0; border-color: #31bbe0; color: white;" title = "View deleted items">Recover Items</a>
                        </div>
                    </div>
                    <br>
                    <?php if(!$products) {
                        echo "<center><h3><hr><br>There are no products recorded in the database.</h3><br></center><br><br>";
                    } else {
                        ?>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                    <th><b>#</b></th>
                                    <th><b>Batch Number</b></th>
                                    <th colspan="2"><b>Product</b></th>
                                    <th><b>Brand</b></th>
                                    <th><b>Category</b></th>
                                    <th><b>Price</b></th>
                                    <th><b>Stock</b></th>
                                    <th><b>Actions</b></th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($products as $products): ?>
                                    <tr>
                                        <td><?= $counter++ ?></td>
                                        <td><?=$products->batch_number?></td>
                                        <?php $product_image = (string)$products->product_image1;
                                        $image_array = explode(".", $product_image); ?>

                                        <td align="center"><img src="<?= $this->config->base_url() ?>uploads_products/<?= $image_array[0] . "_thumb." . $image_array[1]; ?>" alt="product" title="<?= $products->product_name ?>" style="width: 50%; margin: 0px"></td>
                                        <td title="<?= $products->product_name ?>"><div class="ellipsis" style="width:250px"><?= $products->product_name ?></div></td>
                                        <td><?= ucwords($products->product_brand) ?></td>
                                        <td><?= ucfirst($products->product_category) ?></td>
                                        <td align="right">&#8369; <?= number_format($products->product_price, 2) ?></td>
                                        <td align="right"><?php if($products->product_quantity == 0) echo "<h6><span style = 'background-color: red; color: white; padding: 3px;'>Out of stock</span></h6>";
                                        else echo $products->product_quantity;
                                        ?></td>
                                        <td>
                                            <a class="btn btn-success" href="<?= $this->config->base_url() ?>inventory/view/<?= $products->product_id ?>" title = "View Product Info" alt = "View Product Info">
                                                <span class="ti-eye"></span>
                                            </a>
                                            <a class="btn btn-warning" href="<?= $this->config->base_url() ?>inventory/edit_product/<?= $products->product_id ?>" title = "Edit Product" alt = "Edit Product">
                                                <span class="ti-pencil"></span>
                                            </a>
                                            <a class="btn btn-danger delete" href="#" data-id="<?= $products->product_id ?>" title = "Delete Product" alt = "Delete Product">
                                                <span class="ti-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php echo "<div align = 'center'>" . $links . "</div>";
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(".delete").click(function () {
        var id = $(this).data('id');

        swal({
            title: "Are you sure you want to delete this product?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "<?= $this->config->base_url() ?>inventory/delete_product/" + id;
            } else {
                swal("The product is safe!");
            }
        });
    });
</script>
