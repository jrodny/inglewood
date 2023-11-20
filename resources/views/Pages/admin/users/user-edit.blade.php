<x-app-layout>
    <div class="w-full px-6  mx-auto">
        <div class="flex flex-wrap my-6 -mx-3">
            <!-- card 1 -->

            <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
                <div  x-data="{ addrack: false}" class="mb-5">
                    <button @click="addrack=!addrack" class="inline-flex items-center px-4 py-1.5 border border-gray-300 shadow-sm text-sm font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        &nbsp;&nbsp;&nbsp;&nbsp;Add
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 -mr-0.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </button>
                    <div id="addrack" x-show="addrack" class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                    aria-modal="true" style="display: none">
                    <div  x-show="addrack"  @click.away="addrack = false"
                        class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                        <div x-show="addrack" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75">
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div x-show="addrack" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-gray-100 rounded-lg shadow-xl ul_modal_body sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                            <div class="sm:flex sm:items-center">
                                <div
                                    class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-green-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                                    <svg class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Add Rack</h3>
                                </div>
                                <div class="mt-3 text-center rounded-lg sm:mt-0 sm:ml-4 sm:text-left">
                                    <p class="px-4 text-sm font-medium leading-6 text-white bg-red-300" id="edit-modal-message"></p>
                                </div>
                            </div>
                            <div class="mt-2 space-y-6 ul_form sm:space-y-5">
                                <div>
                                    <div class="relative px-3 py-2 border border-gray-300 rounded-md shadow-sm ">
                                        <label for="name"
                                            class="absolute inline-block px-1 -mt-px text-xs font-medium text-gray-900 bg-white -top-2 left-2">Freezer
                                            Location Name</label>
                                        <input type="text" name="name" id="name"
                                            class="w-full p-2 text-gray-900 placeholder-gray-500 sm:text-sm" placeholder="Enter Name">
                                    </div>
                                    <span class="inline-flex w-full px-4 font-medium bg-gray-200 rounded-md text-md message"
                                        style="display:none">asd</span>
                                </div>
                            </div>
                            <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                                <button type="submit" @click.stop
                                    class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">Save</button>
                                <button type="button" @click.stop="addrack=false"
                                    class="closerack inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div
                    class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <div class="flex flex-wrap mt-0 -mx-3">
                            <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                                <h6>Edit User</h6>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-6 px-0 pb-2">
                        <div class="overflow-x-auto ps">
                            <form action="{{ route('admin.user.update', $id->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">

                                    <div class="w-1/2 px-3 float-left">
                                        <label for="" class="text-xs font-semibold px-1">First name</label>
                                        <input value="{{ $id->firstName }}" name="firstName" type="text" placeholder=""
                                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                        @error('firstName')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="w-1/2 px-3 mb-5 float-right">
                                        <label for="" class="text-xs font-semibold px-1">Last name</label>
                                        <input value="{{ $id->lastName }}" name="lastName" type="text" placeholder=""
                                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                        @error('lastName')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="w-1/2 px-3 mb-5 float-left">
                                        <label for="" class="text-xs font-semibold px-1">Username</label>
                                        <input value="{{ $id->username }}" name="username" type="text"
                                            placeholder=""
                                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                        @error('username')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="w-1/2 px-3 mb-5 float-right">
                                        <label for="" class="text-xs font-semibold px-1">Email</label>
                                        <input value="{{ $id->email }}" name="email" type="email" placeholder=""
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
                                                </i>&nbsp;&nbsp;Update User</button>
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
                        <h6>Remove permission</h6>
                    </div>

                    <div class="flex-auto p-4">
                        <h6 class="font-bold leading-tight uppercase text-xs text-slate-500"></h6>
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            @forelse ($permissions as $permission)
                                <li class="relative block px-0 py-2 bg-white border-0 rounded-t-lg text-inherit">
                                    <div class="min-h-6 mb-0.5 block pl-0">
                                        <input id="follow" class="mt-0.54 rounded-10 duration-250 ease-soft-in-out
                                        after:rounded-circle after:shadow-soft-2xl after:duration-250
                                        checked:after:translate-x-5.25 h-5 relative float-left ml-auto w-10
                                        cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none
                                        bg-contain bg-left bg-no-repeat align-top transition-all after:absolute
                                        after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white
                                        after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95
                                        checked:bg-none checked:bg-right" type="checkbox" "=" checked="" name="modules[]" value="{{ $permission->id }}">
                                    <label for="follow" class="w-4/5 mb-0 ml-4 overflow-hidden font-normal cursor-pointer select-none text-sm text-ellipsis whitespace-nowrap text-slate-500">{{ $permission->name }}</label>
                                    </div>
                                </li>
                                @empty
                                <h4>No permission</h4>
                                @endforelse
                        </ul>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


