<div class="w-full lg:w-1/5 lg:px-6 text-xl text-gray-800 leading-normal">
   <p class="text-base font-bold py-2 lg:pb-6 text-gray-700">Menu</p>
   <div class="block lg:hidden sticky inset-0">
      <button id="menu-toggle" class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-purple-500 appearance-none focus:outline-none">
         <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
         </svg>
      </button>
   </div>
   <div class="w-full sticky inset-0 hidden h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:5em;" id="menu-content">
      <ul class="list-reset">
         <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
           <a href="/" class="{{ Request::path() == '/' ? 'nav-menu-link lg:border-purple-500 lg:hover:border-purple-500' : 'nav-menu-link' }}">
             {{-- <a href="/" class="nav-menu-link lg:border-purple-500 lg:hover:border-purple-500"> --}}
            {{-- <a href="/" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:border-purple-500 lg:hover:border-purple-500"> --}}
            <span class="{{ Request::path() == '/' ? 'nav-menu-span md:pb-0 text-gray-900 font-bold' : 'nav-menu-span md:pb-0' }}">Home</span>
            {{-- <span class="pb-1 md:pb-0 text-sm text-gray-900 font-bold">Home</span> --}}
            </a>
         </li>
         <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
             <a href="/tasks" class="{{ Request::path() == 'tasks' ? 'nav-menu-link lg:border-purple-500 lg:hover:border-purple-500' : 'nav-menu-link' }}">
            {{-- <a href="/tasks" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400"> --}}
            <span class="{{ Request::path() == 'tasks' ? 'nav-menu-span md:pb-0 text-gray-900 font-bold' : 'nav-menu-span md:pb-0' }}">Tasks</span>
            {{-- <span class="pb-1 md:pb-0 text-sm">Tasks</span> --}}
            </a>
         </li>
         <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
            <a href="/messages" class="{{ Request::path() == 'messages' ? 'nav-menu-link lg:border-purple-500 lg:hover:border-purple-500' : 'nav-menu-link' }}">
            <span class="{{ Request::path() == 'messages' ? 'nav-menu-span md:pb-0 text-gray-900 font-bold' : 'nav-menu-span md:pb-0' }}">Messages</span>
            </a>
         </li>
         <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
            <a href="/analytics" class="{{ Request::path() == 'analytics' ? 'nav-menu-link lg:border-purple-500 lg:hover:border-purple-500' : 'nav-menu-link' }}">
            <span class="{{ Request::path() == 'analytics' ? 'nav-menu-span md:pb-0 text-gray-900 font-bold' : 'nav-menu-span md:pb-0' }}">Analytics</span>
            </a>
         </li>
         <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
            <a href="/payments" class="{{ Request::path() == 'payments' ? 'nav-menu-link lg:border-purple-500 lg:hover:border-purple-500' : 'nav-menu-link' }}">
            <span class="{{ Request::path() == 'payments' ? 'nav-menu-span md:pb-0 text-gray-900 font-bold' : 'nav-menu-span md:pb-0' }}">Payments</span>
            </a>
         </li>
      </ul>
   </div>
</div>
