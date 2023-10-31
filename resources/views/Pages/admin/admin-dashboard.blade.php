<x-app-layout>
    <div class="flex flex-wrap -mx-3">
            {{--  users list  --}}
            <div class="w-full max-w-full px-3 mt-3 md:w-7/12 md:flex-none">
                <div class="flex-auto p-4 pb-0">
                    <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all b
                    g-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md
                    bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs
                    active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                        href="{{ route('admin.user.index') }}"> <i class="fas fa-plus" aria-hidden="true"> </i>&nbsp;&nbsp;Add New User
                    </a>
                    <div>
                        &nbsp;
                    </div>
                    @livewire('admin.users-table')
                </div>
            </div>
            {{-- end users list --}}

            {{--  module list  --}}
            <div class="w-full max-w-full px-3 mt-3 md:w-5/12 md:flex-none">
                <div class="flex-auto p-4 pb-0">
                <a class="inline-block px-6 py-3 mt-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25"
                    href="javascript:;"> <i class="fas fa-plus" aria-hidden="true"> </i>&nbsp;&nbsp;Add New Module
                </a>
                <div>
                    &nbsp;
                </div>
                @livewire('admin.module-table', )
                </div>
            </div>
            {{-- end module list  --}}
    </div>
</x-app-layout>
