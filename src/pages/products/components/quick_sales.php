<div class="px-32 py-20">
    <div>
        <p class="text-2xl font-cols text-blue-900">Quick Sales</p>
    </div>

    <div class="grid grid-cols-4 my-10">
        <?php
            $select_product = mysqli_query(
                $conn,
                "SELECT * FROM products 
                INNER JOIN tags ON products.product_tag = tags.tag_id
                WHERE tag_name = 'Quick Sales'"
            );

            foreach($select_product as $product){
                ?>
                    <div class="shadow-sm p-3 grid gap-3 border-1 border-gray-300 rounded-md">
                        <img src="<?=$product['product_image']?>" alt="">
                        <p class="text-center my-4"><?=$product['product_name']?></p>
                        <button class="border bg-blue-800 text-white py-2 rounded-md">Add to cart</button>
                    </div>
                <?php
            }
        ?>
    </div>
</div>