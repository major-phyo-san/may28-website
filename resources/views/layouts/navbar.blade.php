<div class=" fixed top-0 w-full z-[80] navbar hidden lg:block px-0 bg-white" id="navbar">
    <div class="w-11/12 lg:!w-[84%] mx-auto flex justify-between py-1.5 px-[2%] items-center">
        <div class="lg:flex self-center items-center hidden">
            <img src="{{ asset('img/logo.png') }}" class="w-20 my-auto" alt="">
            <span class="font-semibold">
                SAM MOUK MO Co., Ltd
            </span>
        </div>
        <div class="">
            <ul class="flex gap-x-2 lg:gap-x-6 navbar-ul text-black items-center">
                <li>
                    <a href="/home" class=" @yield('home') py-2 home" id="home">
                            Home
                    </a>
                </li>
                <li class="hidden lg:block">
                    <a href="#" class=" @yield('service') py-2 about_us">
                            About Us
                    </a>
                </li>
                <li class="hidden lg:block">
                    <a href="#" class=" @yield('project') py-2 service_scroll">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#" class="   py-2 package_scroll" id="portfolio_scroll">
                        Packages
                    </a>
                </li>
                <li>
                    <a href="#" class=" @yield('team') contact_scroll py-2">
                        Contact Us
                    </a>
                </li>
                
                <li>
                    <a href="tel: 09911" class="py-2 px-4 bg-[#243B8F] text-white rounded-lg text-sm">
                        Call Now
                        <i class="fas fa-phone pl-1 text-sm"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="grid lg:hidden drawer z-[40] n">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content fixed top-0 left-0 right-0 bg-white shadow flex justify-between z-40">
        <select id="language-selector-mobile" class="bg-transparent text-gray-600 px-2 ml-2 py-1 rounded-md text-sm focus:outline-none focus:ring-0 focus:shadow-none">
            <option value="en">en</option>
            <option value="mm">mm</option>
        </select>
        <label for="my-drawer" class="py-1 px-4 m-2 block text-black w-fit">
            <i class="fas fa-bars"></i>
        </label>
    </div>
    
    <div class="drawer-side hidden">
        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-white text-black min-h-full w-[40%] min-w-[156px] py-4 px-2">
            <li>
                <a href="/home" class=" @yield('home-sidebar') focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Home
                </a>
            </li>
            <li class="">
                <a href="#" class=" @yield('service-sidebar') service_scroll focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Services
                </a>
            </li>
            <li>
                <a href="/project" class=" @yield('project-sidebar') focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Project
                </a>
            </li>
            <li>
                <a href="#" class=" portfolio_scroll focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Portfolio
                </a>
            </li>
            <li>
                <a href="/team" class=" @yield('team-sidebar') focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Team
                </a>
            </li>
            <li>
                <a href="#" class=" testimonial_scroll focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Testimonials
                </a>
            </li>
            <li>
                <a href="#" class=" contact_scroll focus:!bg-transparent active:!bg-transparent focus:!text-black active:!text-black">
                    Contacts
                </a>
            </li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#home').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#home_section').offset().top - 150
            }, 800);
        });
        $('.about_us').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#about_us_section').offset().top - 100
            }, 800); 
        });
        $('.service_scroll').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#service_section').offset().top - 100
            }, 800); 
        });
        $('.package_scroll').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#package_section').offset().top - 150
            }, 800); 
        });
        $('.contact_scroll').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#contact_section').offset().top - 150
            }, 800); 
        });

        if ($(window).scrollTop() > 50) {
            $("#navbar").addClass("scrolled border-b");
            // $("#navbar").removeClass("text-black");
        } else {
            $("#navbar").removeClass("scrolled border-b");
            // $("#navbar").addClass("text-black");
        }
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 50) {
                $("#navbar").addClass("scrolled border-b");
                // $("#navbar").removeClass("text-black");
            } else {
                $("#navbar").removeClass("scrolled border-b");
                // $("#navbar").addClass("text-black");
            }
        });


    })
    
    
</script>