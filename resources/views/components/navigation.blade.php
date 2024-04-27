<header>
  <nav class="bg-white border-b border-gray-200 px-6 py-5 fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation" aria-controls="drawer-navigation" class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>                      
                <span class="sr-only">Toggle sidebar</span>
            </button>
            <span class="self-center text-xl lg:text-2xl font-semibold whitespace-nowrap">{{ env('APP_NAME') }}</span>
        </div>
        <div class="flex items-center lg:order-2">
            <button type="button" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png" alt="user photo"/>
            </button>
            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 w-56 text-base list-none bg-white divide-y divide-gray-100 border shadow rounded-xl" id="dropdown">
                <div class="py-3 px-4">
                    <span class="block text-sm font-semibold text-gray-900">{{ Auth::user()->name }}</span>
                    <span class="block text-sm text-gray-900 truncate">{{ Auth::user()->email }}</span>
                </div>
                <ul class="py-1 text-gray-700" aria-labelledby="dropdown">
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100">My profile</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100">Account settings</a>
                    </li>
                </ul>
                
                <ul class="py-1 text-gray-700" aria-labelledby="dropdown">
                    <li>
                        {{-- form logout --}}
                        <form class="hover:bg-gray-100" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="block py-2 px-4 font-normal text-sm" type="submit">{{ __('Sign out') }}</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 lg:translate-x-0" aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto lg:py-8 py-10 px-3 h-full bg-white">
        <ul class="space-y-2">
            <li>
                <a href="/" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-teal-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                      <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                    </svg>
                    
                    <span class="ml-3 group-hover:text-teal-500">Home</span>
                </a>
            </li>
            <li>
                <a href="/" class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-teal-500" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M1.5 9.832v1.793c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875V9.832a3 3 0 00-.722-1.952l-3.285-3.832A3 3 0 0016.215 3h-8.43a3 3 0 00-2.278 1.048L2.222 7.88A3 3 0 001.5 9.832zM7.785 4.5a1.5 1.5 0 00-1.139.524L3.881 8.25h3.165a3 3 0 012.496 1.336l.164.246a1.5 1.5 0 001.248.668h2.092a1.5 1.5 0 001.248-.668l.164-.246a3 3 0 012.496-1.336h3.165l-2.765-3.226a1.5 1.5 0 00-1.139-.524h-8.43z" clip-rule="evenodd" />
                        <path d="M2.813 15c-.725 0-1.313.588-1.313 1.313V18a3 3 0 003 3h15a3 3 0 003-3v-1.688c0-.724-.588-1.312-1.313-1.312h-4.233a3 3 0 00-2.496 1.336l-.164.246a1.5 1.5 0 01-1.248.668h-2.092a1.5 1.5 0 01-1.248-.668l-.164-.246A3 3 0 007.046 15H2.812z" />
                    </svg>
                    <span class="ml-3 group-hover:text-teal-500">Queue</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-teal-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Pages</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                    <li>
                        <a
                        href="#"
                        class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100"
                        >Settings</a
                        >
                    </li>
                    <li>
                        <a
                        href="#"
                        class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100"
                        >Kanban</a
                        >
                    </li>
                    <li>
                        <a
                        href="#"
                        class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100"
                        >Calendar</a
                        >
                    </li>
                </ul>
            </li>
        </ul>
        
    </div>
  </aside>
</header>