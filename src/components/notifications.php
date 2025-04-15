<?php
    if(isset($_SESSION['notification'])) {
        $success_mssgs = [
            "User created successfully!",
            "Welcome back"
        ];

        if(in_array($_SESSION['notification'], $success_mssgs)) {
            ?>
                <div class="notification absolute right-5 top-20 bg-green-200 min-w-[300px] p-3 rounded-md text-green-800">
                    <?=$_SESSION['notification']?>
                </div>
            <?php
        } else {
            ?>
                <div class="notification absolute right-5 top-20 bg-red-200 min-w-[300px] p-3 rounded-md text-red-800">
                    <?=$_SESSION['notification']?>
                </div>
            <?php
        }
        
        unset($_SESSION['notification']);

    }
?>  

<script>
    setTimeout(() => {
        document.querySelector('.notification').style.display = 'none'
    }, 4000);
</script>