@extends('layouts.app')

@section('content')

<section class="text-gray-700 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Accomplish more with better notes
                <br class="hidden lg:inline-block">Evernote helps you capture ideas and find them fast.
            </h1>
            <p class="mb-8 leading-relaxed">Evernote gives you everything you need to keep life organized—great note
                taking, project planning, and easy ways to find what you need, when you need it.</p>


        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/a.png') }}">
        </div>
    </div>
</section>
<section class="text-gray-700 body-font border-t border-gray-200">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h2 class="text-xs text-green-500 tracking-widest font-medium title-font mb-1">ROOF PARTY POLAROID</h2>
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Master Cleanse Reliac Heirloom</h1>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div
                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-gray-900 text-lg title-font font-medium">WORK ANYWHERE</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Keep important info handy by syncing your notes to all your
                            devices.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div
                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-gray-900 text-lg title-font font-medium">The Catalyzer</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast
                            vegan taxidermy. Gastropub indxgo juice poutine.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div
                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <h2 class="text-gray-900 text-lg title-font font-medium">Neptune</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast
                            vegan taxidermy. Gastropub indxgo juice poutine.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-gray-700 body-font border-t border-gray-200">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <img alt="feature" class="object-cover object-center h-full w-full" src="{{ asset('img/a.png') }}">
        </div>
        <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
            <div class="flex flex-col mb-10 lg:items-start items-center">

                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Flexible organization</h2>
                    <p class="leading-relaxed text-base">Evernote doesn’t force you to organize a certain way. Create a
                        system of notebooks or don’t organize at all. Any note is a quick search away.</p>

                    </a>
                </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">

                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Available everywhere</h2>
                    <p class="leading-relaxed text-base">Have an iPhone and a Windows computer? Android and Mac? Like
                        using Linux? Unlike most note-taking apps, Evernote works on them all.</p>

                </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Web Clipper</h2>
                    <p class="leading-relaxed text-base">Some note-taking apps strictly limit what you can save online.
                        Evernote’s Web Clipper lets you save and annotate web pages, images, and PDFs.</p>
                </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Character recognition</h2>
                    <p class="leading-relaxed text-base">Find notes by searching for keywords, even if the words appear
                        in photos, whiteboard scans, business cards, handwriting, or documents.
                    </p>
                </div>
            </div>

            <div class="flex flex-col mb-10 lg:items-start items-center">
                <div class="flex-grow">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Web application</h2>
                    <p class="leading-relaxed text-base">Many note-taking apps lack a fully functional web application.
                        Evernote Web offers a complete lineup of features from any major browser.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="text-gray-700 body-font border-t border-gray-200">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Keep your notes handy
            </h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-base">Evernote syncs across your devices so your best ideas
                stay with you.</p>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-gray-300 p-6 rounded-lg">
                    <div
                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <img src="{{ asset('img/1.svg') }}" alt="">
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Sync and Organize</h2>
                    <p class="leading-relaxed text-base">Seamlessly move between devices
                        Inspiration can strike anywhere. Begin a note on your phone and finish it on your laptop without
                        losing your train of thought.</p>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-gray-300 p-6 rounded-lg">
                    <div
                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <img src="{{ asset('img/2.svg') }}" alt="">
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Web Clipper</h2>
                    <p class="leading-relaxed text-base">Organize effortlessly
                        Spaces are a home for all your team's ideas and work. Easily collect, organize, and share
                        everything your team needs to turn inspiration into action.</p>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-gray-300 p-6 rounded-lg">
                    <div
                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <img src="{{ asset('img/3.svg') }}" alt="">
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">App Integrations</h2>
                    <p class="leading-relaxed text-base">With Evernote Integrations
                        Because there’s no single tool for all of your organizing needs, Evernote integrates with your
                        favorite apps like Google Drive so you can be more productive
                        to execution.</p>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-gray-300 p-6 rounded-lg">
                    <div
                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <img src="{{ asset('img/4.svg') }}" alt="">
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Document Scanning</h2>
                    <p class="leading-relaxed text-base">Scan your important papers
                        Keep all your important papers with you whenever and wherever you need them: healthcare and
                        insurance files, warranty and product information, invoices, receipts, and more.</p>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-gray-300 p-6 rounded-lg">
                    <div
                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <img src="{{ asset('img/5.svg') }}" alt="">
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Bring Your Team Together</h2>
                    <p class="leading-relaxed text-base">Organize effortlessly
                        Spaces are a home for all your team's ideas and work. Easily collect, organize, and share
                        everything your team needs to turn inspiration into action.</p>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-gray-300 p-6 rounded-lg">
                    <div
                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                        <img src="{{ asset('img/6.svg') }}" alt="">
                    </div>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Templates</h2>
                    <p class="leading-relaxed text-base">Better notes are just a click away. Save time and effort with
                        easy-to-install note templates to fit every need. They're fully customizable and endlessly
                        reusable.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="text-gray-700 body-font border-t border-gray-200">
    <div class="container px-5 py-24 mx-auto">
        <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8"
                viewBox="0 0 975.036 975.036">
                <path
                    d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                </path>
            </svg>
            <p class="leading-relaxed text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <span class="inline-block h-1 w-10 rounded bg-green-500 mt-8 mb-6"></span>
            <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">CARL INVOKER</h2>
            <p class="text-gray-500">Arsenal Magus</p>
        </div>
    </div>
</section>

<footer class="text-gray-700 body-font">

    <div class="border-t border-gray-200">
        <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
            <div class="flex md:flex-no-wrap flex-wrap justify-center md:justify-start">
                <input
                    class="sm:w-64 w-40 bg-gray-100 rounded sm:mr-4 mr-2 border border-gray-400 focus:outline-none focus:border-indigo-500 text-base py-2 px-4"
                    placeholder="" type="text">
                <button
                    class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
                </p>
            </div>
            <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </div>
    <div class="bg-gray-200">
        <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">

        </div>
    </div>
</footer>


@endsection
