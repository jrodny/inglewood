<div>
    <ul class="flex flex-col pl-0 mb-0">
        {{--  admin sidebar  --}}
        @if (Str::startsWith(Route::currentRouteName(), 'admin.'))
            @include('partials.sidebars.admin.admin-sidebar')
        @endif
        {{--  end admin dashboard sidebar  --}}

        {{--  dashboard sidebar  --}}
        @if(Route::is('dashboard'))
            @include('partials.sidebars.dashboard.dashboard-sidebar')
        @endif
        {{-- end dashboard sidebar  --}}

        {{--  logout  --}}
        <li class="mt-0.5 w-full">
            <form
                class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                method="POST" action="{{ route('logout') }}">
                @csrf
                <div
                class="bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="#FFD700" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M10 3H6a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h4M16 17l5-5-5-5M19.8 12H9" />
                    </svg>
                </div>
                <button type="submit">
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Logout</span>
                </button>
            </form>

        </li>
        {{-- end logout  --}}
    </ul>
</div>
