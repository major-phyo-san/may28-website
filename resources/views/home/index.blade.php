@extends('layouts.main')

@section('page_title', 'Home')
@section('home', 'active')
@section('home-sidebar', 'sidebar-active')

@section('content')
    <div class="content-container">

        <section class="text-black mb-8 lg:mb-16 animation-two mt-12 home-slider" id="home_section">
            <div id="portfolio_slider_one" class=" w-full mx-auto portfolio-arrow">
                
                <div class="relative">
                    <img src="{{ asset('img/port1.jpg') }}" class=" w-full aspect-video" alt="">
                    <div class="slider-text-container">
                        <p class=" text-xl lg:text-6xl text-white mb-4">
                            Reliable Internet for the Whole Family
                        </p>
                        <p class="text-white mb-2 hidden lg:block text-base">
                            At Sam Mouk Mo Co., Ltd., we bring high-speed, stable internet to every corner of your home—perfect for streaming movies, online learning, video calls, and gaming. Our FTTH plans are designed to handle multiple devices smoothly, so your family stays connected, entertained, and informed—without interruption.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('img/port2.jpg') }}" class=" w-full aspect-video" alt="">
                    <div class="slider-text-container">
                        <p class=" text-xl lg:text-6xl text-white mb-4">
                        Experience the future of Connectivity
                        </p>
                        <p class="text-white mb-2 hidden lg:block text-base">
                        Sam Monk Mo. Co.,ltd is dedicated to providing high-quilty internet services in Keng Tung Township,Eastern Shan State,Myanmar.We offer DIA and FTTH services to meet the growing demand for better internet solutions in the region
                        </p>
                    </div>

                </div>

                

                <div class="relative">
                    <img src="{{ asset('img/port3.jpg') }}" class=" w-full aspect-video" alt="">
                    <div class="slider-text-container">
                        <p class=" text-xl lg:text-6xl text-white mb-4">
                            Blazing Fast. Ultra Smooth. Always Reliable.
                        </p>
                        <p class="text-white mb-2 hidden lg:block text-base">
                            Say goodbye to buffering and lag. With Sam Mouk Mo Co., Ltd., you’ll enjoy lightning-fast speeds that power everything—from 4K streaming and online gaming to video conferencing and large file transfers. Whether at home or work, our high-speed plans keep you moving at the speed of life.
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <section class="mb-10 lg:mb-16 home-one" id="about_us_section">
            <div>
                <p class="text-2xl lg:text-4xl font-[900] mb-2">
                    Our Mission
                </p>
                <p class="mb-4 w-full lg:w-10/12 text-sm lg:text-base">
                    At Sam Mouk Mo Co., Ltd, we are committed to delivering reliable and high-speed internet services to our
                    customers. Our mission is to provide FTTx, Enterprise Network, and SME Network Solutions that empower
                    individuals and businesses.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-4">
                <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                    <div class="">
                        <div class="mb-2">
                            <i class="fal fa-globe-asia text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-base lg:text-lg font-bold text-slate-900 mb-1">FTTx Solutions</h3>
                            <p class="text-slate-600 text-sm lg:text-base">Fiber-to-the-x (FTTx) technology for ultra-fast
                                internet speeds.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                    <div class="">
                        <div class="mb-2">
                            <i class="fal fa-city text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-base lg:text-lg font-bold text-slate-900 mb-1">Enterprise Networks</h3>
                            <p class="text-slate-600 text-sm lg:text-base">Robust and secure network solutions for large
                                enterprises.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                    <div class="">
                        <div class="mb-2">
                            <i class="fal fa-users text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-base lg:text-lg font-bold text-slate-900 mb-1">SME Networks</h3>
                            <p class="text-slate-600 text-sm lg:text-base">Tailored network solutions for small and
                                medium-sized businesses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="mb-20 home-two" id="package_section">
            <div class="text-left mb-6">
                <h2 class="text-2xl font-semibold text-gray-900">Package</h2>
            </div>

            <div id="package_slider" class=" w-full -mx-3 equal-height-slider">
                <div class=" h-full mx-3">
                    <div class="bg-[#F7FAFC] rounded-2xl border border-[#CFD4E8] py-8 px-12 shadow-sm h-full">
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">20 <span class="text-gray-600 ml-1">Mbps</span></h3>
                            <!-- <span class="text-gray-600 ml-1">Mbps</span> -->
                            <div class="flex items-baseline">
                                <span class="text-4xl font-extrabold text-gray-900">30,000MMK</span>
                            </div>
                        </div>
                        <button
                            class="w-full bg-[#243B8F] text-white font-medium py-3 px-4 rounded-full mb-6 transition-colors">
                            Family Plan
                        </button>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Up to 50 Mbps</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Unlimited Data</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Basic Support</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Free Installation</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Free Router</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=" h-full mx-3">
                    <div class="bg-[#F7FAFC] rounded-2xl border border-[#CFD4E8] py-8 px-12 shadow-sm h-full">
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">30 <span class="text-gray-600 ml-1">Mbps</span></h3>
                            <div class="flex items-baseline">
                                <span class="text-4xl font-extrabold text-gray-900">41,000MMK</span>
                            </div>
                        </div>
                        <button
                            class="w-full bg-[#243B8F] text-white font-medium py-3 px-4 rounded-full mb-6 transition-colors">
                            Family Plan
                        </button>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Up to 100 Mbps</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Unlimited Data</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Priority Support</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Free Installation</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Free Router</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=" h-full mx-3">
                    <div class="bg-[#F7FAFC] rounded-2xl border border-[#CFD4E8] py-8 px-12 shadow-sm h-full">
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4"> 50 <span class="text-gray-600 ml-1">Mbps</span></h3>
                            <div class="flex items-baseline">
                                <span class="text-4xl font-extrabold text-gray-900">65,000MMK</span>
                            </div>
                        </div>
                        <button
                            class="w-full bg-[#243B8F] text-white font-medium py-3 px-4 rounded-full mb-6 transition-colors">
                            Business Plan
                        </button>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Up to 200 Mbps</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Unlimited Data</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">24/7 Premium Support</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Free Installation</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Free Router</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=" h-full mx-3">
                    <div class="bg-[#F7FAFC] rounded-2xl border border-[#CFD4E8] py-8 px-12 shadow-sm h-full">
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4"> 70 <span class="text-gray-600 ml-1">Mbps</span></h3>
                            <div class="flex items-baseline">
                                <span class="text-4xl font-extrabold text-gray-900">90,000MMK</span>
                            </div>
                        </div>
                        <button
                            class="w-full bg-[#243B8F] text-white font-medium py-3 px-4 rounded-full mb-6 transition-colors">
                            Business Plan
                        </button>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Up to 200 Mbps</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Unlimited Data</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">24/7 Premium Support</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Free Installation</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Free Router</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=" h-full mx-3">
                    <div class="bg-[#F7FAFC] rounded-2xl border border-[#CFD4E8] py-8 px-12 shadow-sm h-full">
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4"> 100 <span class="text-gray-600 ml-1">Mbps</span></h3>
                            <div class="flex items-baseline">
                                <span class="text-4xl font-extrabold text-gray-900">120,000MMK</span>
                            </div>
                        </div>
                        <button
                            class="w-full bg-[#243B8F] text-white font-medium py-3 px-4 rounded-full mb-6 transition-colors">
                            Business Plan
                        </button>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Up to 200 Mbps</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Unlimited Data</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">24/7 Premium Support</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Free Installation</span>
                            </li>
                            <li class="flex items-center gap-x-4">
                                <i class="fal fa-check"></i>
                                <span class="text-gray-700">Free Router</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <section class="mb-20 home-three" id="service_section">
            <div class="flex flex-col lg:flex-row gap-x-8">
                <div class="w-full lg:w-5/12">
                    <p class="mb-3">
                        Usability
                    </p>
                    <p class="text-2xl lg:text-4xl font-[900] mb-2 lg:mb-4">
                        Perfect for Every Need
                    </p>
                    <p class="mb-4 w-full text-sm lg:text-base text-gray-700">
                        Our services are designed to cater to a wide range of needs, ensuring seamless connectivity for
                        gaming, streaming, home use, and office environments.
                    </p>
                </div>
                <div class="  w-full lg:w-7/12">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                            <div class="">
                                <div class="mb-2">
                                    <i class="fal fa-gamepad text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 mb-1">Gaming</h3>
                                    <p class="text-slate-600 text-sm lg:text-base">Low latency and high speeds for competitive gaming.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                            <div class="">
                                <div class="mb-2">
                                    <i class="fal fa-tv text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 mb-1">Streaming</h3>
                                    <p class="text-slate-600 text-sm lg:text-base">Buffer-free streaming of high-definition content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                            <div class="">
                                <div class="mb-2">
                                    <i class="fal fa-home-lg-alt text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 mb-1">Home Use</h3>
                                    <p class="text-slate-600 text-sm lg:text-base">Reliable internet for all your home devices.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                            <div class="">
                                <div class="mb-2">
                                    <i class="fal fa-briefcase text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 mb-1">Office</h3>
                                    <p class="text-slate-600 text-sm lg:text-base">Stable and fast connections for efficient work.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="mb-20 home-four">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-8 gap-y-4">
                <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8] min-h-full lg:min-h-[60vh]">
                    <div class="">
                        <div class="mb-2">
                            <i class="fal fa-globe-asia text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 mb-1">Why Speed Isn’t Everything—Choose Stability First</h3>
                            <p class="text-slate-600">
                                A fast internet connection means nothing if it’s not stable. Imagine video calls dropping, downloads failing, or your online game freezing at the worst moment. At Sam Mouk Mo, we prioritize both speed and stability—ensuring you stay connected without interruptions. Our advanced infrastructure and proactive monitoring mean you’ll enjoy a smooth experience 24/7, no matter what you're doing online.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                    <div class="">
                        <div class="mb-2">
                            <i class="fal fa-globe-asia text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 mb-1">Connecting Communities, Empowering Lives</h3>
                            <p class="text-slate-600">
                                At Sam Mouk Mo, we believe the internet is more than just cables and signals—it's a lifeline for learning, growth, and opportunity. From rural towns to bustling cities, we’re committed to bridging the digital divide across Myanmar. With our service, families stay closer, students learn better, and businesses grow stronger. Let’s build the future, together.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-20 home-five">
            <div>
                <p class="text-2xl lg:text-4xl font-[900] mb-3">
                    Quality and Benefits
                </p>
                <p class="mb-6 w-10/12 text-sm lg:text-base text-gray-700">
                    We provide top-tier internet services with a focus on quality, reliability, and customer satisfaction.
                    Our offerings are designed to meet the diverse needs of our users.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-4">
                <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                    <div class="">
                        <div class="mb-2">
                            <i class="fal fa-wifi text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 mb-1">High-Speed Internet</h3>
                            <p class="text-slate-600 text-sm lg:text-base">Experience lightning-fast internet speeds with our advanced
                                technology.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                    <div class="">
                        <div class="mb-2">
                            <i class="fal fa-shield-check text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 mb-1">Secure Connections</h3>
                            <p class="text-slate-600 text-sm lg:text-base">Benefit from secure and stable connections, ensuring your data is
                                protected.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                    <div class="">
                        <div class="mb-2">
                            <i class="fal fa-history text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 mb-1">24/7 Support</h3>
                            <p class="text-slate-600 text-sm lg:text-base   ">Our dedicated support team is available around the clock to assist
                                you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-20 home-six">
            <div id="accordionExample">
                <div class="rounded-lg mb-4 bg-[#E8EBF2]">
                    <h2 class="mb-0" id="headingOne">
                        <button
                            class="group relative flex w-full items-center rounded-t-lg border-0 px-5 py-4 text-left text-base text-black transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:bg-transparent [&:not([data-twe-collapse-collapsed])]:text-black [&:not([data-twe-collapse-collapsed])]:shadow-border-b "
                            type="button" data-twe-collapse-init data-twe-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            What internet speed do I need for my home or business?
                            <span
                                class="-me-1 ms-auto h-5 w-5 shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:h-6 [&>svg]:w-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="!visible" data-twe-collapse-item data-twe-collapse-show
                        aria-labelledby="headingOne" data-twe-parent="#accordionExample">
                        <div class="px-5 py-4 text-[#4D5C99]">
                            It depends on how many devices and users are online at the same time. For light browsing and social media, 10–20 Mbps is enough. But for streaming, gaming, or working from home, we recommend 50 Mbps or higher. For businesses or offices with multiple users, 100+ Mbps ensures smooth performance. Our team can help you choose the best plan for your needs!
                        </div>
                    </div>
                </div>
                <div class=" rounded-lg mb-4 bg-[#E8EBF2] ">
                    <h2 class="mb-0" id="headingTwo">
                        <button
                            class="group relative flex w-full items-center rounded-t-lg border-0 px-5 py-4 text-left text-base text-black transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:bg-transparent [&:not([data-twe-collapse-collapsed])]:text-black [&:not([data-twe-collapse-collapsed])]:shadow-border-b "
                            type="button" data-twe-collapse-init data-twe-collapse-collapsed data-twe-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            What happens if my internet goes down?
                            <span
                                class="-me-1 ms-auto h-5 w-5 shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:h-6 [&>svg]:w-6 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="!visible hidden" data-twe-collapse-item aria-labelledby="headingTwo"
                        data-twe-parent="#accordionExample">
                        <div class="px-5 py-4 text-[#4D5C99]">
                        We monitor our network 24/7 to ensure maximum uptime. If you experience any disruption, our support team is just a call away. We’ll guide you through quick fixes or dispatch a technician if needed. Most issues are resolved within a few hours, and we’re always transparent about the cause and resolution time.
                        </div>
                    </div>
                </div>
                <div class=" rounded-lg mb-4 bg-[#E8EBF2] ">
                    <h2 class="accordion-header mb-0" id="headingThree">
                        <button
                            class="group relative flex w-full items-center rounded-t-lg border-0 px-5 py-4 text-left text-base text-black transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:bg-transparent [&:not([data-twe-collapse-collapsed])]:text-black [&:not([data-twe-collapse-collapsed])]:shadow-border-b"
                            type="button" data-twe-collapse-init data-twe-collapse-collapsed
                            data-twe-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Is installation free, and how long does it take?
                            <span
                                class="-me-1 ms-auto h-5 w-5 shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:h-6 [&>svg]:w-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapseThree" class="!visible hidden" data-twe-collapse-item aria-labelledby="headingThree"
                        data-twe-parent="#accordionExample">
                        <div class="px-5 py-4 text-[#4D5C99]">
                            Yes! We offer free installation on most plans. Once your application is confirmed, installation usually takes 1–3 working days, depending on your location. Our technicians will handle everything—from cabling to router setup—so you can start enjoying high-speed internet right away.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <script>
        gsap.registerPlugin(ScrollTrigger);

        const sections = ['.home-two', '.home-three', '.home-four', '.home-five', '.home-six'];

        sections.forEach(selector => {
            gsap.to(selector, {
                scrollTrigger: {
                    trigger: selector,
                    start: 'top 80%',
                    end: 'bottom center',
                    toggleActions: 'play none none none',
                },
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power2.out',
            });
        });
        gsap.to('.home-one', {
            scrollTrigger: {
                trigger: '.home-one',
                start: 'top 75%',
                end: 'bottom center',
                toggleActions: 'play none none none',
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out',
        });
        window.addEventListener('load', () => {
            const sections = ['.home-slider'];

            sections.forEach(selector => {
                gsap.to(selector, {
                    opacity: 1,
                    y: 0,
                    duration: 1.2,
                    ease: 'power2.out'
                });
            });
        });


        $('#customer_slider').slick({
            infinite: true,
            arrows: true,
            dot: false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        $('#portfolio_slider_one').slick({
            infinite: true,
            arrows: true,
            dot: false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            cssEase: 'linear',
            

        });




        $('#package_slider').slick({
            infinite: true,
            arrows: false,
            dots: false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 3,
            slidesToScroll: 1,
            cssEase: 'linear',
            responsive: [{
                breakpoint: 1280,
                settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
            });
        // let sliderInitialized = false;

        // function handleResponsiveSlider() {
        //     const isPhone = window.innerWidth < 1024;

        //     if (isPhone && !sliderInitialized) {
        //         $('#package_slider').slick({
        //             infinite: true,
        //             arrows: false,
        //             dots: false,
        //             autoplay: true,
        //             autoplaySpeed: 12000,
        //             slidesToShow: 1,
        //             slidesToScroll: 1,
        //             cssEase: 'linear'
        //         });
        //         sliderInitialized = true;
        //     }

        //     if (!isPhone && sliderInitialized) {
        //         $('#package_slider').slick('unslick');
        //         sliderInitialized = false;
        //     }
        // }

        // $(document).ready(handleResponsiveSlider);
        // $(window).on('resize', handleResponsiveSlider);
    </script>



@endsection 