<div class="border border-gray-300 sticky top-0 bg-white shadow-sm py-4 px-32 flex items-center justify-between">
    <p class="text-3xl font-bold text-blue-900">Logo</p>
    <?php
        if(isset($_SESSION['user'])) {
            ?>  
                <div class="flex gap-10 items-center">
                    <a href="">Home</a>
                    <a href="products">Products</a>
                    <a href="" class="relative">Cart <small class="absolute top-[-5px] right-[-10px]">0</small></a>
                    <a href="">Orders</a>
                    <a href=""><?=$_SESSION['user']['email']?></a>
                    <!-- <a href=""><img src="./src/assets/icons/account.png" class="w-[30px]" alt="" srcset=""></a> -->
                    <a href="./src/services/auth/signout.php">Sign Out</a>
                </div>
            <?php
        } else {
            ?>
                <!-- // signed out navbar -->
                <div class="flex gap-10 items-center">
                    <a href="home">Home</a>
                    <a href="products">Products</a>
                    <a href="about">About</a>
                    <a href="services">Services</a>
                    <a href="contact">Contact</a>
                    <a href="auth-signin"><img src="./src/assets/icons/log-in.png" class="w-[30px]" alt="" srcset=""></a>
                </div>
            <?php
        }
    ?>
    

    <!-- // signed in navbar -->
    <!-- <div class="flex gap-10 items-center">
        <a href="">Home</a>
        <a href="">Shop</a>
        <a href="">Cart</a>
        <a href="">Orders</a>
        <a href=""><img src="./src/assets/icons/account.png" class="w-[30px]" alt="" srcset=""></a>
    </div> -->
</div>