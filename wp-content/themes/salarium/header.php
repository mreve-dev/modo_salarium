<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#da373d",
                        secondary: "#22F",
                        colorLight: "#EEE",
                    },
                },
            },
        };
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class=" bg-[#fbfaf7] h-screen ">
     

            <header class=" border-b-2 flex justify-center  ">
                
                <div class=" flex justify-between w-full max-w-6xl mx-auto py-5 px-5  lg:px-8 ">
                    <div>
                        <?php bloginfo('name') ?><span class="italic">.fr</span>
                    </div>

                    <ul class="flex justify-evenly gap-3">
                        <li>Outils</li>
                        <li>Guides</li>
                        <li>Tarifs</li>
                        <li>A propos</li>
                        <li>Contact</li>
                    </ul>

                </div>


            </header>