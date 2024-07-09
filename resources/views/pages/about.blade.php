@extends('layout.default')
@section('content')
<div class="grid grid-cols-12">
    <div class="sm:col-start-4 sm:col-end-10 sm:flex sm:flex-col lg:col-start-2 lg:col-end-4">
        <img src="man.png" class="rounded-full outline outline-[#222831]" />
        <span class="sm:text-center sm:text-2xl sm:font-bold text-[#00ADB5] sm:mt-2">Alfian Wilfredo Horis</span>
        <span class="sm:text-center sm:font-semibold sm:text-xl">Software
            Engineer</span>
    </div>
    <div class="sm:hidden md:col-span-12 md:mt-7 md:gap-y-3 md:flex md:flex-col lg:col-start-5 lg:col-end-12">
        <div class="sm:flex sm:flex-col">
            <span class="capitalize sm:font-semibold sm:text-xl">work experience</span>
            <div class="sm:flex sm:flex-col sm:mt-2">
                <span class="capitalize sm:font-semibold">PT. Merah Cipta Media</span>
                <div class="flex justify-between">
                    <span class="capitalize">software engineer</span>
                    <span>Feb 2023 - Now</span>
                </div>
                <ul class="list-disc sm:ml-5 capitalize">
                    <li>design and develop performance management system, ticketing system and internal whatsapp panel from the scratch and perform modification / maintainance of existing system</li>
                    </li>
                    <li>write well, testable, efficient code by using best software development practice</li>
                    <li>
                        make sure the development process and product meet the quality standards of user and achive 100% customer satisfaction
                    </li>
                </ul>
            </div>
        </div>
        <div class="sm:flex sm:flex-col">
            <span class="capitalize sm:font-semibold sm:text-xl">background education</span>
            <div class="sm:flex sm:flex-col sm:mt-2">
                <span class="capitalize sm:font-semibold">hacktiv8</span>
                <div class="flex justify-between">
                    <span class="capitalize">fullstack javascript immersive</span>
                    <span>Aug 2022 - Jan 2023</span>
                </div>
                <ul class="list-disc sm:ml-5">
                    <li>learned the basics of javascript, learn how to create web and mobile application from scratch, learn how to create a API and also learn how to deploy it</li>
                </ul>
            </div>
            <div class="sm:flex sm:flex-col sm:mt-2">
                <span class="capitalize sm:font-semibold">Universitas Advent Indonesia</span>
                <div class="flex justify-between">
                    <span class="capitalize">Computer Science</span>
                    <span>Aug 2016 - Jan 2020</span>
                </div>
            </div>
        </div>
        <div class="sm:flex sm:flex-col">
            <span class="capitalize sm:font-semibold sm:text-xl">skills</span>
            <div class="sm:flex sm:flex-col sm:mt-2 sm:grid sm:grid-cols-12">
                <div class="sm:col-start-1 sm:col-end-4">
                    <span class="capitalize sm:font-semibold">frontend</span>
                    <ul class="list-disc list-outside sm:ml-5">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>React</li>
                        <li>React Native</li>
                        <li>Next</li>
                        <li>Vue</li>
                        <li>Nuxt</li>
                        <li>Tailwind</li>
                        <li>Bootstrap</li>
                        <li>Figma</li>
                        <li>Laravel</li>
                    </ul>
                </div>
                <div class="sm:col-start-5 sm:col-end-9">
                    <span class="capitalize sm:font-semibold">backend</span>
                    <ul class="list-disc list-outside sm:ml-5">
                        <li>Express</li>
                        <li>Nest</li>
                        <li>JavaScript</li>
                        <li>Flask</li>
                        <li>Laravel</li>
                    </ul>
                </div>
                <div class="sm:col-start-9 sm:col-end-13">
                    <span class="capitalize sm:font-semibold">language</span>
                    <ul class="list-disc list-outside sm:ml-5">
                        <li>PHP</li>
                        <li>Python</li>
                        <li>JavaScript</li>
                        <li>Typescript</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="md:hidden col-span-12 mt-7 flex flex-col" id="accordionFlushExample">
        <div class="rounded-none border border-e-0 border-s-0 border-t-0 border-neutral-200 bg-white ">
            <h2 class="mb-0" id="flush-headingOne">
                <button class="group relative flex w-full items-center rounded-none border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-twe-collapse-collapsed])]:bg-white [&:not([data-twe-collapse-collapsed])]:text-primary [&:not([data-twe-collapse-collapsed])]:shadow-border-b   " type="button" data-twe-collapse-init data-twe-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Work experience
                    <span class="-me-1 ms-auto h-5 w-5 shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:h-6 [&>svg]:w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="flush-collapseOne" class="!visible border-0" data-twe-collapse-item data-twe-collapse-show aria-labelledby="flush-headingOne" data-twe-parent="#accordionFlushExample">
                <div class="px-5 py-4">
                    <div class="sm:flex sm:flex-col sm:mt-2">
                        <span class="capitalize sm:font-semibold">PT. Merah Cipta Media</span>
                        <div class="flex justify-between">
                            <span class="capitalize">software engineer</span>
                            <span>Feb 2023 - Now</span>
                        </div>
                        <ul class="list-disc sm:ml-5 capitalize">
                            <li>design and develop performance management system, ticketing system and internal whatsapp panel from the scratch and perform modification / maintainance of existing system</li>
                            </li>
                            <li>write well, testable, efficient code by using best software development practice</li>
                            <li>
                                make sure the development process and product meet the quality standards of user and achive 100% customer satisfaction
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-none border border-e-0 border-s-0 border-t-0 border-neutral-200 bg-white">
            <h2 class="mb-0" id="flush-headingTwo">
                <button class="group relative flex w-full items-center rounded-none border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-twe-collapse-collapsed])]:bg-white [&:not([data-twe-collapse-collapsed])]:text-primary [&:not([data-twe-collapse-collapsed])]:shadow-border-b   " type="button" data-twe-collapse-init data-twe-collapse-collapsed data-twe-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Background education
                    <span class="-me-1 ms-auto h-5 w-5 shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:h-6 [&>svg]:w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="!visible hidden border-0" data-twe-collapse-item aria-labelledby="flush-headingTwo" data-twe-parent="#accordionFlushExample">
                <div class="px-5 py-4">
                    <div class="sm:flex sm:flex-col sm:mt-2">
                        <span class="capitalize sm:font-semibold">hacktiv8</span>
                        <div class="flex justify-between">
                            <span class="capitalize">fullstack javascript immersive</span>
                            <span>Aug 2022 - Jan 2023</span>
                        </div>
                        <ul class="list-disc sm:ml-5">
                            <li>learned the basics of javascript, learn how to create web and mobile application from scratch, learn how to create a API and also learn how to deploy it</li>
                        </ul>
                    </div>
                    <div class="sm:flex sm:flex-col sm:mt-2">
                        <span class="capitalize sm:font-semibold">Universitas Advent Indonesia</span>
                        <div class="flex justify-between">
                            <span class="capitalize">Computer Science</span>
                            <span>Aug 2016 - Jan 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-none border border-b-0 border-e-0 border-s-0 border-t-0 border-neutral-200 bg-white">
            <h2 class="mb-0" id="flush-headingThree">
                <button class="group relative flex w-full items-center rounded-none border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-twe-collapse-collapsed])]:bg-white [&:not([data-twe-collapse-collapsed])]:text-primary [&:not([data-twe-collapse-collapsed])]:shadow-border-b   " type="button" data-twe-collapse-init data-twe-collapse-collapsed data-twe-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Skills
                    <span class="-me-1 ms-auto h-5 w-5 shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:h-6 [&>svg]:w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </button>
            </h2>
            <div id="flush-collapseThree" class="!visible hidden" data-twe-collapse-item aria-labelledby="flush-headingThree" data-twe-parent="#accordionFlushExample">
                <div class="px-5 py-4">
                    <div class="sm:flex sm:flex-col sm:mt-2 sm:grid sm:grid-cols-12">
                        <div class="sm:col-start-1 sm:col-end-4">
                            <span class="capitalize sm:font-semibold">frontend</span>
                            <ul class="list-disc list-outside sm:ml-5">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>React</li>
                                <li>React Native</li>
                                <li>Next</li>
                                <li>Vue</li>
                                <li>Nuxt</li>
                                <li>Tailwind</li>
                                <li>Bootstrap</li>
                                <li>Figma</li>
                                <li>Laravel</li>
                            </ul>
                        </div>
                        <div class="sm:col-start-5 sm:col-end-9">
                            <span class="capitalize sm:font-semibold">backend</span>
                            <ul class="list-disc list-outside sm:ml-5">
                                <li>Express</li>
                                <li>Nest</li>
                                <li>JavaScript</li>
                                <li>Flask</li>
                                <li>Laravel</li>
                            </ul>
                        </div>
                        <div class="sm:col-start-9 sm:col-end-13">
                            <span class="capitalize sm:font-semibold">language</span>
                            <ul class="list-disc list-outside sm:ml-5">
                                <li>PHP</li>
                                <li>Python</li>
                                <li>JavaScript</li>
                                <li>Typescript</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection