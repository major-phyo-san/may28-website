@extends('layouts.main')

@section('page_title', 'Home')
@section('home', 'active')
@section('home-sidebar', 'sidebar-active')

@section('content')
<div class="content-container">

    <section class="text-black mb-8 lg:mb-16 animation-two mt-12 home-slider" id="portfolio_section_one">
        <div id="portfolio_slider_one" class=" w-full mx-auto portfolio-arrow">
            <div class="relative">
                <img src="{{ asset('img/img1.png') }}" class=" w-full aspect-video" alt="">

            </div>
        </div>
    </section>


    <section class="mb-16 home-one">
        <div>
            <p class="text-4xl font-[900] mb-2">
                Our Mission
            </p>
            <p class="mb-4 w-10/12">
                At Sam Mouk Mo Co., Ltd, we are committed to delivering reliable and high-speed internet services to our
                customers. Our mission is to provide FTTx, Enterprise Network, and SME Network Solutions that empower
                individuals and businesses.
            </p>
        </div>
        <div class="grid grid-cols-3 gap-x-8">
            <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                <div class="">
                    <div class="mb-2">
                        <i class="fal fa-globe-asia text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 mb-1">FTTx Solutions</h3>
                        <p class="text-slate-600">Fiber-to-the-x (FTTx) technology for ultra-fast internet speeds.</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                <div class="">
                    <div class="mb-2">
                        <i class="fal fa-city text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 mb-1">Enterprise Networks</h3>
                        <p class="text-slate-600">Robust and secure network solutions for large enterprises.</p>
                    </div>
                </div>
            </div>
            <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                <div class="">
                    <div class="mb-2">
                        <i class="fal fa-users text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 mb-1">SME Networks</h3>
                        <p class="text-slate-600">Tailored network solutions for small and medium-sized businesses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mb-20 home-two">
        <div class="text-left mb-6">
            <h2 class="text-2xl font-semibold text-gray-900">Package</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8 w-full">
            <div class="bg-[#F7FAFC] rounded-2xl border border-[#CFD4E8] py-8 px-12 shadow-sm">
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Basic</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-extrabold text-gray-900">$29</span>
                        <span class="text-gray-600 ml-1">/month</span>
                    </div>
                </div>
                <button
                    class="w-full bg-[#243B8F] text-white font-medium py-3 px-4 rounded-full mb-6 transition-colors">
                    Choose Plan
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
                </ul>
            </div>
            <div class="bg-[#F7FAFC] rounded-2xl border border-[#CFD4E8] p-8 shadow-sm">
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Standard</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-extrabold text-gray-900">$49</span>
                        <span class="text-gray-600 ml-1">/month</span>
                    </div>
                </div>
                <button
                    class="w-full bg-[#243B8F] text-white font-medium py-3 px-4 rounded-full mb-6 transition-colors">
                    Choose Plan
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
                </ul>
            </div>
            <div class="bg-[#F7FAFC] rounded-2xl border border-[#CFD4E8] p-8 shadow-sm">
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Premium</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-extrabold text-gray-900">$79</span>
                        <span class="text-gray-600 ml-1">/month</span>
                    </div>
                </div>
                <button
                    class="w-full bg-[#243B8F] text-white font-medium py-3 px-4 rounded-full mb-6 transition-colors">
                    Choose Plan
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
    </section>

    <section class="mb-20 home-three">
        <div class="flex gap-x-8">
            <div class="w-5/12">
                <p class="mb-3">
                    Usability
                </p>
                <p class="text-4xl font-[900] mb-4">
                    Perfect for Every Need
                </p>
                <p class="mb-4 w-full">
                    Our services are designed to cater to a wide range of needs, ensuring seamless connectivity for
                    gaming, streaming, home use, and office environments.
                </p>
            </div>
            <div class="  w-7/12">
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                        <div class="">
                            <div class="mb-2">
                                <i class="fal fa-gamepad text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 mb-1">Gaming</h3>
                                <p class="text-slate-600">Low latency and high speeds for competitive gaming.</p>
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
                                <p class="text-slate-600">Buffer-free streaming of high-definition content.</p>
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
                                <p class="text-slate-600">Reliable internet for all your home devices.</p>
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
                                <p class="text-slate-600">Stable and fast connections for efficient work.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mb-20 home-four">
        <div class="grid grid-cols-2 gap-x-8">
            <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8] min-h-[60vh]">
                <div class="">
                    <div class="mb-2">
                        <i class="fal fa-globe-asia text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 mb-1">FTTx Solutions</h3>
                        <p class="text-slate-600">
                            Our services are designed to cater to a wide range of needs, ensuring seamless connectivity
                            for gaming, streaming, home use, and office environments.
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
                        <h3 class="text-lg font-bold text-slate-900 mb-1">FTTx Solutions</h3>
                        <p class="text-slate-600">
                            Our services are designed to cater to a wide range of needs, ensuring seamless connectivity
                            for gaming, streaming, home use, and office environments.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-20 home-five">
        <div>
            <p class="text-4xl font-[900] mb-3">
                Quality and Benefits
            </p>
            <p class="mb-6 w-10/12">
                We provide top-tier internet services with a focus on quality, reliability, and customer satisfaction.
                Our offerings are designed to meet the diverse needs of our users.
            </p>
        </div>
        <div class="grid grid-cols-3 gap-x-8">
            <div class="bg-[#F7FAFC] rounded-xl p-6 shadow-sm border border-[#CFD4E8]">
                <div class="">
                    <div class="mb-2">
                        <i class="fal fa-wifi text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 mb-1">High-Speed Internet</h3>
                        <p class="text-slate-600">Experience lightning-fast internet speeds with our advanced
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
                        <p class="text-slate-600">Benefit from secure and stable connections, ensuring your data is
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
                        <p class="text-slate-600">Our dedicated support team is available around the clock to assist
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
                        What is FTTH?
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
                    FTTH stands for Fiber To The Home. It is a technology that uses optical fiber directly from the central point to the residences. This provides significantly higher speeds and bandwidth compared to traditional copper-based internet connections.
                    </div>
                </div>
            </div>
            <div class=" rounded-lg mb-4 bg-[#E8EBF2] ">
                <h2 class="mb-0" id="headingTwo">
                    <button
                        class="group relative flex w-full items-center rounded-t-lg border-0 px-5 py-4 text-left text-base text-black transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:bg-transparent [&:not([data-twe-collapse-collapsed])]:text-black [&:not([data-twe-collapse-collapsed])]:shadow-border-b "
                        type="button" data-twe-collapse-init data-twe-collapse-collapsed data-twe-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        What is DIA?
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
                        FTTH stands for Fiber To The Home. It is a technology that uses optical fiber directly from the central point to the residences. This provides significantly higher speeds and bandwidth compared to traditional copper-based internet connections.
                    </div>
                </div>
            </div>
            <div
                class=" rounded-lg mb-4 bg-[#E8EBF2] ">
                <h2 class="accordion-header mb-0" id="headingThree">
                    <button
                        class="group relative flex w-full items-center rounded-t-lg border-0 px-5 py-4 text-left text-base text-black transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none  [&:not([data-twe-collapse-collapsed])]:bg-transparent [&:not([data-twe-collapse-collapsed])]:text-black [&:not([data-twe-collapse-collapsed])]:shadow-border-b"
                        type="button" data-twe-collapse-init data-twe-collapse-collapsed
                        data-twe-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
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
                        FTTH stands for Fiber To The Home. It is a technology that uses optical fiber directly from the central point to the residences. This provides significantly higher speeds and bandwidth compared to traditional copper-based internet connections.
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
            arrows:true,
            dot:false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
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
            arrows:true,
            dot:false,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            cssEase: 'linear'

        });
        
    </script>



@endsection