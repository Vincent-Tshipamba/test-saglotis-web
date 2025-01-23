<div
    class="fixed w-full z-30 flex shadow-lg bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none p-2 items-center justify-center h-16 px-10">
    <div
        class="flex items-center justify-center flex-none h-full ml-12 duration-500 ease-in-out transform logo text-gray-900 dark:text-white">
        <a href="{{ route('dashboard') }}" class="flex ms-2 md:me-24">
            <img loading="lazy" src="data:image/png;base64,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" class="h-8 me-3" alt="Logo de Vincode" />
            <span class="self-center font-semibold text-gray-900 dark:text-white text-1xl sm:text-1xl whitespace-nowrap">
                Brasserie Vincode
            </span>
        </a>
    </div>
    <!-- SPACER -->
    <div class="flex items-center justify-center h-full grow"></div>
    <div class="flex items-center gap-3 2xsm:gap-7">


        <!-- User Area -->
        <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
            <a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
                <span class="hidden text-right lg:block">
                    <span class="block text-sm font-medium text-black dark:text-white"> {{ Auth::user()->name }}</span>
                </span>

                <span class="h-12 w-12 rounded-full">
                    <img loading="lazy" src="{{ asset('img/profil.png') }}" alt="User" class="rounded-ful" />
                </span>

                <svg :class="dropdownOpen && 'rotate-180'" class="hidden fill-current sm:block" width="12"
                    height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                        fill="" />
                </svg>
            </a>

            <!-- Dropdown Start -->
            <div x-show="dropdownOpen"
                class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <ul class="flex flex-col gap-5 border-b border-stroke px-6 py-7.5 dark:border-strokedark">
                    <li>
                        <a href="{{ route('profile.edit') }}"
                            class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                            <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 9.62499C8.42188 9.62499 6.35938 7.59687 6.35938 5.12187C6.35938 2.64687 8.42188 0.618744 11 0.618744C13.5781 0.618744 15.6406 2.64687 15.6406 5.12187C15.6406 7.59687 13.5781 9.62499 11 9.62499ZM11 2.16562C9.28125 2.16562 7.90625 3.50624 7.90625 5.12187C7.90625 6.73749 9.28125 8.07812 11 8.07812C12.7188 8.07812 14.0938 6.73749 14.0938 5.12187C14.0938 3.50624 12.7188 2.16562 11 2.16562Z"
                                    fill="" />
                                <path
                                    d="M17.7719 21.4156H4.2281C3.5406 21.4156 2.9906 20.8656 2.9906 20.1781V17.0844C2.9906 13.7156 5.7406 10.9656 9.10935 10.9656H12.925C16.2937 10.9656 19.0437 13.7156 19.0437 17.0844V20.1781C19.0094 20.8312 18.4594 21.4156 17.7719 21.4156ZM4.53748 19.8687H17.4969V17.0844C17.4969 14.575 15.4344 12.5125 12.925 12.5125H9.07498C6.5656 12.5125 4.5031 14.575 4.5031 17.0844V19.8687H4.53748Z"
                                    fill="" />
                            </svg>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profile.edit') }}"
                            class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                            <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.8656 8.86874C20.5219 8.49062 20.0406 8.28437 19.525 8.28437H19.4219C19.25 8.28437 19.1125 8.18124 19.0781 8.04374C19.0437 7.90624 18.975 7.80312 18.9406 7.66562C18.8719 7.52812 18.9406 7.39062 19.0437 7.28749L19.1125 7.21874C19.4906 6.87499 19.6969 6.39374 19.6969 5.87812C19.6969 5.36249 19.525 4.88124 19.1469 4.50312L17.8062 3.12812C17.0844 2.37187 15.8469 2.33749 15.0906 3.09374L14.9875 3.16249C14.8844 3.26562 14.7125 3.29999 14.5406 3.23124C14.4031 3.16249 14.2656 3.09374 14.0937 3.05937C13.9219 2.99062 13.8187 2.85312 13.8187 2.71562V2.54374C13.8187 1.47812 12.9594 0.618744 11.8937 0.618744H9.96875C9.45312 0.618744 8.97187 0.824994 8.62812 1.16874C8.25 1.54687 8.07812 2.02812 8.07812 2.50937V2.64687C8.07812 2.78437 7.975 2.92187 7.8375 2.99062C7.76875 3.02499 7.73437 3.02499 7.66562 3.05937C7.52812 3.12812 7.35625 3.09374 7.25312 2.99062L7.18437 2.88749C6.84062 2.50937 6.35937 2.30312 5.84375 2.30312C5.32812 2.30312 4.84687 2.47499 4.46875 2.85312L3.09375 4.19374C2.3375 4.91562 2.30312 6.15312 3.05937 6.90937L3.12812 7.01249C3.23125 7.11562 3.26562 7.28749 3.19687 7.39062C3.12812 7.52812 3.09375 7.63124 3.025 7.76874C2.95625 7.90624 2.85312 7.97499 2.68125 7.97499H2.57812C2.0625 7.97499 1.58125 8.14687 1.20312 8.52499C0.824996 8.86874 0.618746 9.34999 0.618746 9.86562L0.584371 11.7906C0.549996 12.8562 1.40937 13.7156 2.475 13.75H2.57812C2.75 13.75 2.8875 13.8531 2.92187 13.9906C2.99062 14.0937 3.05937 14.1969 3.09375 14.3344C3.12812 14.4719 3.09375 14.6094 2.99062 14.7125L2.92187 14.7812C2.54375 15.125 2.3375 15.6062 2.3375 16.1219C2.3375 16.6375 2.50937 17.1187 2.8875 17.4969L4.22812 18.8719C4.95 19.6281 6.1875 19.6625 6.94375 18.9062L7.04687 18.8375C7.15 18.7344 7.32187 18.7 7.49375 18.7687C7.63125 18.8375 7.76875 18.9062 7.94062 18.9406C8.1125 19.0094 8.21562 19.1469 8.21562 19.2844V19.4219C8.21562 20.4875 9.075 21.3469 10.1406 21.3469H12.0656C13.1312 21.3469 13.9906 20.4875 13.9906 19.4219V19.2844C13.9906 19.1469 14.0937 19.0094 14.2312 18.9406C14.3 18.9062 14.3344 18.9062 14.4031 18.8719C14.575 18.8031 14.7125 18.8375 14.8156 18.9406L14.8844 19.0437C15.2281 19.4219 15.7094 19.6281 16.225 19.6281C16.7406 19.6281 17.2219 19.4562 17.6 19.0781L18.975 17.7375C19.7312 17.0156 19.7656 15.7781 19.0094 15.0219L18.9406 14.9187C18.8375 14.8156 18.8031 14.6437 18.8719 14.5406C18.9406 14.4031 18.975 14.3 19.0437 14.1625C19.1125 14.025 19.25 13.9562 19.3875 13.9562H19.4906H19.525C20.5562 13.9562 21.4156 13.1312 21.45 12.0656L21.4844 10.1406C21.4156 9.72812 21.2094 9.21249 20.8656 8.86874ZM19.8344 12.1C19.8344 12.3062 19.6625 12.4781 19.4562 12.4781H19.3531H19.3187C18.5281 12.4781 17.8062 12.9594 17.5312 13.6469C17.4969 13.75 17.4281 13.8531 17.3937 13.9562C17.0844 14.6437 17.2219 15.5031 17.7719 16.0531L17.8406 16.1562C17.9781 16.2937 17.9781 16.5344 17.8406 16.6719L16.4656 18.0125C16.3625 18.1156 16.2594 18.1156 16.1906 18.1156C16.1219 18.1156 16.0187 18.1156 15.9156 18.0125L15.8469 17.9094C15.2969 17.325 14.4719 17.1531 13.7156 17.4969L13.5781 17.5656C12.8219 17.875 12.3406 18.5625 12.3406 19.3531V19.4906C12.3406 19.6969 12.1687 19.8687 11.9625 19.8687H10.0375C9.83125 19.8687 9.65937 19.6969 9.65937 19.4906V19.3531C9.65937 18.5625 9.17812 17.8406 8.42187 17.5656C8.31875 17.5312 8.18125 17.4625 8.07812 17.4281C7.80312 17.2906 7.52812 17.2562 7.25312 17.2562C6.77187 17.2562 6.29062 17.4281 5.9125 17.8062L5.84375 17.8406C5.70625 17.9781 5.46562 17.9781 5.32812 17.8406L3.9875 16.4656C3.88437 16.3625 3.88437 16.2594 3.88437 16.1906C3.88437 16.1219 3.88437 16.0187 3.9875 15.9156L4.05625 15.8469C4.64062 15.2969 4.8125 14.4375 4.50312 13.75C4.46875 13.6469 4.43437 13.5437 4.36562 13.4406C4.09062 12.7187 3.40312 12.2031 2.6125 12.2031H2.50937C2.30312 12.2031 2.13125 12.0312 2.13125 11.825L2.16562 9.89999C2.16562 9.76249 2.23437 9.69374 2.26875 9.62499C2.30312 9.59062 2.40625 9.52187 2.54375 9.52187H2.64687C3.4375 9.55624 4.15937 9.07499 4.46875 8.35312C4.50312 8.24999 4.57187 8.14687 4.60625 8.04374C4.91562 7.35624 4.77812 6.49687 4.22812 5.94687L4.15937 5.84374C4.02187 5.70624 4.02187 5.46562 4.15937 5.32812L5.53437 3.98749C5.6375 3.88437 5.74062 3.88437 5.80937 3.88437C5.87812 3.88437 5.98125 3.88437 6.08437 3.98749L6.15312 4.09062C6.70312 4.67499 7.52812 4.84687 8.28437 4.53749L8.42187 4.46874C9.17812 4.15937 9.65937 3.47187 9.65937 2.68124V2.54374C9.65937 2.40624 9.72812 2.33749 9.7625 2.26874C9.79687 2.19999 9.9 2.16562 10.0375 2.16562H11.9625C12.1687 2.16562 12.3406 2.33749 12.3406 2.54374V2.68124C12.3406 3.47187 12.8219 4.19374 13.5781 4.46874C13.6812 4.50312 13.8187 4.57187 13.9219 4.60624C14.6437 4.94999 15.5031 4.81249 16.0875 4.26249L16.1906 4.19374C16.3281 4.05624 16.5687 4.05624 16.7062 4.19374L18.0469 5.56874C18.15 5.67187 18.15 5.77499 18.15 5.84374C18.15 5.91249 18.1156 6.01562 18.0469 6.11874L17.9781 6.18749C17.3594 6.70312 17.1875 7.56249 17.4625 8.24999C17.4969 8.35312 17.5312 8.45624 17.6 8.55937C17.875 9.28124 18.5625 9.79687 19.3531 9.79687H19.4562C19.5937 9.79687 19.6625 9.86562 19.7312 9.89999C19.8 9.93437 19.8344 10.0375 19.8344 10.175V12.1Z"
                                    fill="" />
                                <path
                                    d="M11 6.32498C8.42189 6.32498 6.32501 8.42186 6.32501 11C6.32501 13.5781 8.42189 15.675 11 15.675C13.5781 15.675 15.675 13.5781 15.675 11C15.675 8.42186 13.5781 6.32498 11 6.32498ZM11 14.1281C9.28126 14.1281 7.87189 12.7187 7.87189 11C7.87189 9.28123 9.28126 7.87186 11 7.87186C12.7188 7.87186 14.1281 9.28123 14.1281 11C14.1281 12.7187 12.7188 14.1281 11 14.1281Z"
                                    fill="" />
                            </svg>
                            Paramettre
                        </a>
                    </li>
                </ul>
                <button
                    class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                    <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.55 5.05312 11.55 4.64062V2.23437C11.55 2.16562 11.5844 2.13124 11.6531 2.13124H15.5375C16.3625 2.13124 17.0156 2.78437 17.0156 3.60937V18.3562C17.0156 19.1812 16.3625 19.8344 15.5375 19.8344H11.6531C11.5844 19.8344 11.55 19.8 11.55 19.7312V17.3594C11.55 16.9469 11.2062 16.6031 10.7594 16.6031C10.3125 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5625 20.0062 18.5625 18.3562V3.64374C18.5625 1.95937 17.1875 0.618744 15.5375 0.618744Z"
                            fill="" />
                        <path
                            d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4844C3.36876 10.7938 3.36876 11.275 3.67814 11.5844L7.11564 15.0906C7.25314 15.2281 7.45939 15.3312 7.66564 15.3312C7.87189 15.3312 8.04376 15.2625 8.21564 15.125C8.52501 14.8156 8.52501 14.3344 8.21564 14.025L6.05001 11.7563Z"
                            fill="" />
                    </svg>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                            Log Out
                        </x-dropdown-link>
                    </form>
                </button>
            </div>
            <!-- Dropdown End -->
        </div>
        <!-- User Area -->
    </div>
</div>

<aside
    class="w-60 -translate-x-48 fixed transition transform ease-in-out duration-1000 z-40 flex h-screen dark:bg-[#0F172A] bg-gray-900">
    <!-- open sidebar button -->
    <div
        class="max-toolbar translate-x-24 scale-x-0 w-full -right-6 transition transform ease-in duration-300 flex items-center justify-between border-4 border-white dark:border-[#0F172A] bg-[#eaeaebf3] dark:bg-[#1E293B]  absolute top-2 rounded-full h-12">
        <div class="flex items-center pl-4 space-x-2 ">
            <div>
                <div onclick="setDark('dark')"
                    class="moon text-gray-700 dark:text-white hover:text-blue-500 dark:hover:text-[#38BDF8]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3}
                        stroke="currentColor" class="w-4 h-4">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                    </svg>
                </div>
                <div onclick="setDark('light')"
                    class="sun hidden text-gray-700 dark:text-white hover:text-[#e38407] dark:hover:text-[#e38407]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div onclick="openNav()"
        class="-right-6 transition transform ease-in-out duration-500 flex border-4 border-white dark:border-[#0F172A] dark:bg-[#1E293B]  bg-[#e38407]  dark:text-white dark:hover:bg-[#0F172A] hover:bg-[#0F172A] absolute top-2 p-3 rounded-full text-white hover:rotate-45">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3}
            stroke="currentColor" class="w-4 h-4">
            <path strokeLinecap="round" strokeLinejoin="round"
                d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
        </svg>
    </div>

    <!-- MAX SIDEBAR-->
    <div class="max hidden text-white mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">
        <div
            class="hover:ml-4 w-full text-white  hover:text-[#e38407] dark:hover:text-[#e38407]  p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <a href="{{ route('dashboard') }}"
                class="hover:ml-4 justify-end pr-5  hover:text-[#e38407] dark:hover:text-[#e38407]  p-3 rounded-full transform ease-in-out duration-300 flex {{ request()->routeIs('dashboard') ? ' text-[#e38407] ' : 'text-white' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m15.943 10.498l-4.055 4.505A2 2 0 0 0 10 17h4a2 2 0 0 0-.603-1.431l3.66-4.067a.75.75 0 1 0-1.114-1.004M5 15.25a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5zm14.75.75a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0 0 1.5H19a.75.75 0 0 0 .75-.75" />
                    <path fill="currentColor"
                        d="M18 13a1 1 0 1 0 0-2a1 1 0 0 0 0 2M7 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0m1-2.5a1 1 0 1 0 0-2a1 1 0 0 0 0 2m9-1a1 1 0 1 1-2 0a1 1 0 0 1 2 0M12.75 6a.75.75 0 0 0-1.5 0v1.5a.75.75 0 0 0 1.5 0z" />
                    <path fill="currentColor"
                        d="M12 3.25C6.063 3.25 1.25 8.063 1.25 14c0 1.498.307 2.927.862 4.224l.005.012c.215.502.363.848.817 1.332c.183.195.439.39.677.548c.238.157.519.315.77.407c.624.227 1.168.227 1.937.227h11.364c.769 0 1.313 0 1.937-.227c.252-.092.532-.25.77-.407s.494-.353.677-.548c.454-.484.603-.83.817-1.332l.005-.012c.555-1.297.862-2.726.862-4.224c0-5.937-4.813-10.75-10.75-10.75M2.75 14a9.25 9.25 0 0 1 18.5 0c0 1.292-.264 2.52-.741 3.634c-.204.477-.267.62-.536.907c-.071.075-.22.197-.41.323c-.19.125-.36.214-.458.25c-.352.128-.632.136-1.502.136H6.397c-.87 0-1.15-.008-1.502-.136a2.6 2.6 0 0 1-.458-.25a2.6 2.6 0 0 1-.41-.323c-.269-.287-.332-.43-.536-.907A9.2 9.2 0 0 1 2.75 14" />
                </svg>
                <span>Dashboard</span>
            </a>
        </div>

        <!-- Wishlist -->
        <div
            class="hover:ml-4 w-full hover:text-[#e38407] dark:hover:text-[#e38407]  p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <a href="{{ route('commandes.index') }}"
                class="hover:ml-4 justify-end pr-5   hover:text-[#e38407] dark:hover:text-[#e38407]  p-3 rounded-full transform ease-in-out duration-300 flex {{ request()->routeIs('commandes.index') ? ' text-[#e38407] ' : 'text-white' }}">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                </svg>

                <span>Liste des commandes</span>
            </a>
        </div>
    </div>
    <!-- MINI SIDEBAR-->
    <div class="mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
            class="hover:ml-4 justify-end pr-5   hover:text-[#e38407] dark:hover:text-[#e38407]  p-3 rounded-full transform ease-in-out duration-300 flex {{ request()->routeIs('dashboard') ? ' text-[#e38407] ' : 'text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="m15.943 10.498l-4.055 4.505A2 2 0 0 0 10 17h4a2 2 0 0 0-.603-1.431l3.66-4.067a.75.75 0 1 0-1.114-1.004M5 15.25a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5zm14.75.75a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0 0 1.5H19a.75.75 0 0 0 .75-.75" />
                <path fill="currentColor"
                    d="M18 13a1 1 0 1 0 0-2a1 1 0 0 0 0 2M7 12a1 1 0 1 1-2 0a1 1 0 0 1 2 0m1-2.5a1 1 0 1 0 0-2a1 1 0 0 0 0 2m9-1a1 1 0 1 1-2 0a1 1 0 0 1 2 0M12.75 6a.75.75 0 0 0-1.5 0v1.5a.75.75 0 0 0 1.5 0z" />
                <path fill="currentColor"
                    d="M12 3.25C6.063 3.25 1.25 8.063 1.25 14c0 1.498.307 2.927.862 4.224l.005.012c.215.502.363.848.817 1.332c.183.195.439.39.677.548c.238.157.519.315.77.407c.624.227 1.168.227 1.937.227h11.364c.769 0 1.313 0 1.937-.227c.252-.092.532-.25.77-.407s.494-.353.677-.548c.454-.484.603-.83.817-1.332l.005-.012c.555-1.297.862-2.726.862-4.224c0-5.937-4.813-10.75-10.75-10.75M2.75 14a9.25 9.25 0 0 1 18.5 0c0 1.292-.264 2.52-.741 3.634c-.204.477-.267.62-.536.907c-.071.075-.22.197-.41.323c-.19.125-.36.214-.458.25c-.352.128-.632.136-1.502.136H6.397c-.87 0-1.15-.008-1.502-.136a2.6 2.6 0 0 1-.458-.25a2.6 2.6 0 0 1-.41-.323c-.269-.287-.332-.43-.536-.907A9.2 9.2 0 0 1 2.75 14" />
            </svg>
        </a>

        <!-- Commandes -->
        <a href="{{ route('commandes.index') }}"
            class="hover:ml-4 justify-end pr-5   hover:text-[#e38407] dark:hover:text-[#e38407]  p-3 rounded-full transform ease-in-out duration-300 flex {{ request()->routeIs('commandes.index') ? ' text-[#e38407] ' : 'text-white' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor">
                    <rect width="14" height="17" x="5" y="4" rx="2" />
                    <path stroke-linecap="round" d="M9 9h6m-6 4h6m-6 4h4" />
                </g>
            </svg>
        </a>
    </div>
</aside>
