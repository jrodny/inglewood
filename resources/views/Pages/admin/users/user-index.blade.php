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
                                        <input value="{{ old('fname') }}" name="fname" type="text" placeholder=""
                                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                        @error('fname')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="w-1/2 px-3 mb-5 float-right">
                                        <label for="" class="text-xs font-semibold px-1">Last name</label>
                                        <input value="{{ old('lname') }}" name="lname" type="text" placeholder=""
                                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                        @error('lname')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="w-1/2 px-3 mb-5 float-left">
                                        <label for="" class="text-xs font-semibold px-1">Username</label>
                                        <input value="{{ old('username') }}" name="username" type="text"
                                            placeholder=""
                                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                        @error('username')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="w-1/2 px-3 mb-5 float-right">
                                        <label for="" class="text-xs font-semibold px-1">Email</label>
                                        <input value="{{ old('email') }}" name="email" type="email" placeholder=""
                                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                        @error('email')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div>&nbsp;</div>
                                    <div class="flex-none mt-5 max-w-full px-3 my-auto text-left  lg:flex-none">
                                        <div class="relative pr-6 lg:float-right">
                                            <span>Automatic password generated: Ex. username first 4
                                                characters+ingle123</span>
                                        </div>
                                    </div>
                                    <div class="flex-none mt-5 max-w-full px-3 my-auto text-left  lg:flex-none">
                                        <div class="relative pr-6 lg:float-left">
                                            <button
                                                class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                                                type="submit"> <i class="fas fa-user-plus" aria-hidden="true">
                                                </i>&nbsp;&nbsp;Save New User</button>
                                        </div>
                                    </div>
                                </div>

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
                        <h6>Permission module</h6>
                    </div>

                    <div class="flex-auto p-4">
                        <h6 class="font-bold leading-tight uppercase text-xs text-slate-500"></h6>
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            @foreach ($permissions as $permission)
                                <li class="relative block px-0 py-2 bg-white border-0 rounded-t-lg text-inherit">
                                    <div class="min-h-6 mb-0.5 block pl-0">
                                        <input id="follow" class="mt-0.54 rounded-10 duration-250 ease-soft-in-out
                                        after:rounded-circle after:shadow-soft-2xl after:duration-250
                                        checked:after:translate-x-5.25 h-5 relative float-left ml-auto w-10
                                        cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none
                                        bg-contain bg-left bg-no-repeat align-top transition-all after:absolute
                                        after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white
                                        after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95
                                        checked:bg-none checked:bg-right" type="checkbox" "=" checked="" name="modules[]" value="{{ $permission->name }}">
                                    <label for="follow" class="w-4/5 mb-0 ml-4 overflow-hidden font-normal cursor-pointer select-none text-sm text-ellipsis whitespace-nowrap text-slate-500">{{ $permission->name }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
