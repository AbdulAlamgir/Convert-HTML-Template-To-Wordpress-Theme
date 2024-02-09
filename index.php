<?php get_header(); ?>
<body>


<div class="body" data-parallax="scroll" data-image-src="<?php $body_image = get_option('body_image'); echo esc_url($body_image); ?>" alt="body Image">

<div class="container mx-auto px-2 tm-intro-width">
    <div class="sm:pb-60 sm:pt-48 py-20">
        <div class="bg-black bg-opacity-70 p-12 mb-5 text-center">
            <h1 class="text-white text-5xl tm-logo-font mb-5">Antique Cafe</h1>
            <p class="tm-text-gold tm-text-2xl">your daily energy booster</p>
        </div> 
        
        <div class="bg-black bg-opacity-70 p-10 mb-5">
            <p class="text-white leading-8 text-sm font-light">
                This is a coffee shop template named Antique Cafe which is a parallax HTML5 template with a good responsiveness.
                Feel free to use this layout for your cafe.
                If you have any question, please <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">send us a message</a>. </p>
        </div>
        <div class="text-center">
            <div class="inline-block">
                <a href="#menu" class="flex justify-center items-center bg-black bg-opacity-70 py-6 px-8 rounded-lg font-semibold tm-text-2xl tm-text-gold hover:text-gray-200 transition">
                    <i class="fas fa-coffee mr-3"></i>
                    <span>Let's explore...</span>                        
                </a>
            </div>                    
        </div>                
    </div>
</div>   
</div> 
<!-- Cafe Menu -->
 
<div id="menu" class="go" data-parallax="scroll" data-image-src="<?php $cafe_menu_image = get_option('cafe_menu_image');echo  esc_url( $cafe_menu_image) . '" alt="cafe menu Image">';?>"
    <div class="container mx-auto tm-container py-24 sm:py-48">
        <div class="text-center mb-16">
            <h2 class="bg-white tm-text-brown py-6 px-12 text-4xl font-medium inline-block rounded-md">Our Cafe Menu</h2>
        </div>            
        <div class="flex flex-col lg:flex-row justify-around items-center">
            <div class="flex-1 m-5 rounded-xl px-4 py-6 sm:px-8 sm:py-10 tm-bg-brown tm-item-container">
                <div class="flex items-start mb-6 tm-menu-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-1.jpg"  alt="Image" class="rounded-md">
                    <div class="ml-3 sm:ml-6">
                        <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Cappuccino</h3>
                        <div class="text-white text-md sm:text-lg font-light mb-1">S $8.50</div>
                        <div class="text-white text-md sm:text-lg font-light">L $10.50</div>
                    </div>                    
                </div>
                <div class="flex items-start mb-6 tm-menu-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-2.jpg"  alt="Image" class="rounded-md">
                    <div class="ml-3 sm:ml-6">
                        <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Americano</h3>
                        <div class="text-white text-md sm:text-lg font-light mb-1">S $9.50</div>
                        <div class="text-white text-md sm:text-lg font-light">L $12.50</div>
                    </div>                    
                </div>
                <div class="flex items-start mb-6 tm-menu-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-3.jpg"  alt="Image" class="rounded-md">
                    <div class="ml-3 sm:ml-6">
                        <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Latte</h3>
                        <div class="text-white text-md sm:text-lg font-light mb-1">M $11.75</div>
                        <div class="text-white text-md sm:text-lg font-light">L $14.75</div>
                    </div>                    
                </div>
                <div class="flex items-start mb-6 tm-menu-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-4.jpg"  alt="Image" class="rounded-md">
                    <div class="ml-3 sm:ml-6">
                        <h3 class="text-lg sm:text-xl tm-text-yellow mb-1">Hot Espresso</h3>
                        <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Chocolate</h3>
                        <div class="text-white text-md sm:text-lg font-light"> M $11.75 . L $14.75</div>
                    </div>                    
                </div>
            </div>
            <div class="flex-1 m-5 rounded-xl px-4 py-6 sm:px-8 sm:py-10 tm-bg-brown tm-item-container">
                <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                    <div class="text-right mr-6">
                        <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Cappuccino</h3>
                        <div class="text-white text-md sm:text-lg font-light mb-1">Small $10</div>
                        <div class="text-white text-md sm:text-lg font-light">Large $15</div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-5.jpg"  alt="Image" class="rounded-md">                  
                </div>
                <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                    <div class="text-right mr-6">
                        <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Americano</h3>
                        <div class="text-white text-md sm:text-lg font-light mb-1">Small $12.50</div>
                        <div class="text-white text-md sm:text-lg font-light">Large $16.50</div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-6.jpg"  alt="Image" class="rounded-md">                   
                </div>
                <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                    <div class="text-right mr-6">
                        <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Milky Latte</h3>
                        <div class="text-white text-md sm:text-lg font-light mb-1">Small $14</div>
                        <div class="text-white text-md sm:text-lg font-light">Large $18</div>
                    </div>   
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-7.jpg"  alt="Image" class="rounded-md">                
                </div>
                <div class="flex items-start justify-end mb-6 tm-menu-item-2">                    
                    <div class="text-right mr-6">
                        <h3 class="text-lg sm:text-xl tm-text-yellow mb-1">Iced Espresso</h3>
                        <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Mocha</h3>
                        <div class="text-white text-md sm:text-lg font-light">Small $10 . Large $15</div>
                    </div> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-8.jpg"  alt="Image" class="rounded-md">                   
                </div>
            </div>
        </div>
    </div>        
</div>
<!--About -->
<div id="about" class="parallax-window" data-parallax="scroll" data-image-src="<?php $about_image = get_option('about_image');echo  esc_url( $about_image) . '" alt="about Image">';?>"
    <div class="container mx-auto tm-container py-24 sm:py-48">
        <div class="tm-item-container sm:ml-auto sm:mr-12 mx-auto sm:px-0 px-4">
            <div class="bg-white bg-opacity-80 p-12 pb-14 rounded-xl mb-5">
                <h2 class="mb-6 tm-text-green text-4xl font-medium">About our cafe</h2>
                <p class="mb-6 text-base leading-8">
                    Images are taken from Pexels, a great stock photo website. This template used Tailwind CSS. You may modify Antique Cafe template in any way you prefer and use it for your website.
                </p>
                <p class="text-base leading-8">
                    If you wish to <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">support us</a>, please make a little donation via PayPal. That would be
                very helpful. Another way is to tell your friends about Tooplate website. Thank you. </p>
            </div>
            <a href="#contact" class="inline-block tm-bg-green transition text-white text-xl pt-3 pb-4 px-8 rounded-md">
                <i class="far fa-comments mr-4"></i>
                Contact
            </a>
        </div>           
    </div>        
</div>
<!--contact -->
<div id="contact" class="relative" data-parallax="scroll" data-image-src="<?php $contact_image = get_option('contact_image');echo  esc_url( $contact_image) . '" alt="contact Image">';?>"
<div class="container mx-auto tm-container pt-24 pb-48 sm:py-48">
        <div class="flex flex-col lg:flex-row justify-around items-center lg:items-stretch">
            <div class="flex-1 rounded-xl px-10 py-12 m-5 bg-white bg-opacity-80 tm-item-container">
                <h2 class="text-3xl mb-6 tm-text-green">Contact Us</h2>
                <p class="mb-6 text-lg leading-8">
                    Praesent tellus magna, consectetur sit amet volutpat eu, pulvinar vitae sem.
                    Sed ultrices.    
                </p>
                <p class="mb-10 text-lg">
                    <span class="block mb-2">Tel: <a href="tel:0100200340" class="hover:text-yellow-600 transition">010-020-0340</a></span>
                    <span class="block">Email: <a href="mailto:info@company.com" class="hover:text-yellow-600 transition">info@company.com</a></span>                        
                </p>
                <div class="text-center">
                    <a href="https://www.google.com/maps" class="inline-block text-white text-2xl pl-10 pr-12 py-6 rounded-lg transition tm-bg-green">
                        <i class="fas fa-map-marked-alt mr-8"></i>
                        Open Maps
                    </a>
                </div>                    
            </div>
            <div class="flex-1 rounded-xl p-12 pb-14 m-5 bg-black bg-opacity-50 tm-item-container">
                <form action="" method="POST" class="text-lg">
                    <input type="text" name="name" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Name" required="" />
                    <input type="email" name="email" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Email" required="" />
                    <textarea rows="6" name="message" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Message..." required=""></textarea>
                    <div class="text-right">
                        <button type="submit" class="text-white hover:text-yellow-500 transition">Send it</button>
                    </div>                        
                    </form>
            </div>
        </div>
        <?php get_footer(); ?>
    </div>
</div>


</body>
</html>