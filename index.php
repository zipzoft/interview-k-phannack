<?php

require_once __DIR__ . '/bootstrap.php';

use App\Service\ProductService;

// Create a new product service
$service = new ProductService();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview - Welcome K'Tatpong</title>

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
</head>

<body>

    <!-- Container of shopping cart -->
    <div class="w-5/6 mx-auto">
        <div class="bg-white">
            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

                <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">รายการสินค้า</h2>

                <div class="mt-6 grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

                    <?php
                    foreach ($service->all() as $product) {
                    ?>

                        <a href="#" class="group">
                            <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <img src="<?php echo $product->image_url ?>" class="w-full h-full object-center object-cover group-hover:opacity-75">
                            </div>
                            <h3 class="mt-4 text-sm text-gray-700"><?php echo $product->name ?></h3>
                            <p class="mt-1 text-lg font-medium text-gray-900">$<?php echo $product->price ?></p>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>