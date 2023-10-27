<x-app-layout>
    <div class="w-full px-6  mx-auto">
        <div class="flex flex-wrap my-6 -mx-3">
            <!-- card 1 -->

            <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <div class="flex flex-wrap mt-0 -mx-3">
                            <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                                <h6>Create New User</h6>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-6 px-0 pb-2">
                        <div class="overflow-x-auto ps">
                            <form action="{{ route('admin.user.store') }}" method="POST">
                                @csrf
                                <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">

                                        <div class="w-1/2 px-3 float-left">
                                            <label for="" class="text-xs font-semibold px-1">First name</label>
                                            <input value="{{old('fname')}}" name="fname" type="text" placeholder="" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                            @error('fname')
                                            <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="w-1/2 px-3 mb-5 float-right">
                                            <label for="" class="text-xs font-semibold px-1">Last name</label>
                                            <input value="{{old('lname')}}" name="lname" type="text" placeholder="" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                            @error('lname')
                                                <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="w-1/2 px-3 mb-5 float-left">
                                            <label for="" class="text-xs font-semibold px-1">Username</label>
                                            <input value="{{old('username')}}" name="username" type="text" placeholder="" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                            @error('username')
                                                <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="w-1/2 px-3 mb-5 float-right">
                                            <label for="" class="text-xs font-semibold px-1">Email</label>
                                            <input value="{{old('email')}}" name="email" type="email" placeholder="" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                            @error('email')
                                                <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>


                                    <div>&nbsp;</div>
                                    <div class="flex-none mt-5 max-w-full px-3 my-auto text-left  lg:flex-none">
                                        <div class="relative pr-6 lg:float-right">
                                            <span>Automatic password generated: Ex. username first 4 characters+ingle123</span>
                                        </div>
                                    </div>
                                    <div class="flex-none mt-5 max-w-full px-3 my-auto text-left  lg:flex-none">
                                        <div class="relative pr-6 lg:float-left">
                                            <button class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                                                type="submit"> <i class="fas fa-plus" aria-hidden="true">
                                                </i>&nbsp;&nbsp;Save New User</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- card 2 -->

            <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <h6>Orders overview</h6>
                        <p class="leading-normal text-sm">
                            <i class="fa fa-arrow-up text-lime-500" aria-hidden="true"></i>
                            <span class="font-semibold">24%</span> this month
                        </p>
                    </div>

                    <div class="flex-auto p-4">
                        <div
                            class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                            <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">$2400, Design
                                        changes</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">22 DEC 7:20
                                        PM</p>
                                </div>
                            </div>
                            <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-html5 leading-pro bg-gradient-to-tl from-red-600 to-rose-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New order
                                        #1832412</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">21 DEC 11
                                        PM</p>
                                </div>
                            </div>
                            <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-cart leading-pro bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Server
                                        payments for April</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">21 DEC 9:34
                                        PM</p>
                                </div>
                            </div>
                            <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-credit-card leading-pro bg-gradient-to-tl from-red-500 to-yellow-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New card added
                                        for order #4395133</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">20 DEC 2:20
                                        AM</p>
                                </div>
                            </div>
                            <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-key-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Unlock
                                        packages for development</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">18 DEC 4:54
                                        AM</p>
                                </div>
                            </div>
                            <div class="relative mb-0 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-money-coins leading-pro bg-gradient-to-tl from-gray-900 to-slate-800 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New order
                                        #9583120</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">17 DEC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>




