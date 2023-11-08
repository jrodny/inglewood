<div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
    @if (session()->has('message'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="relative w-full p-4 text-white rounded-lg bg-lime-500">
            {{ session('message') }}
        </div>
    @endif
    <div class="flex flex-wrap -mx-3 p-6 pb-3 mb-0">
        <div class="flex items-center flex-none w-1/2 max-w-full px-3">
            <h6 class="mb-0">Users List</h6>
        </div>
        <div class="flex-none w-1/2 max-w-full px-3 text-right">
            <div class="relative mb-6">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </div>
                <input type="text" placeholder="Search id, name, username" wire:model.live="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
    </div>
    <div class="flex-auto px-0 pt-0 pb-2">
        <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                <thead class="align-bottom">
                    <tr>
                        <th
                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Id
                        </th>
                        <th
                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Name
                        </th>
                        <th
                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Username
                        </th>
                        <th
                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Status
                        </th>
                        <th
                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td
                                class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="flex flex-col justify-center">
                                        <p class="mb-0 text-xs leading-tight text-slate-400">
                                            {{ $user->id }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">
                                    <div class="flex flex-col justify-center">
                                        <p class="mb-0 text-xs leading-tight text-slate-400">
                                            {{ $user->name }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-xs leading-tight text-slate-400"> {{ $user->username }}</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                @if ($user->status == 1)
                                    <span
                                        class="bg-green-400 px-2.5 text-xs
                                rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center
                                align-baseline font-bold uppercase leading-none text-white">
                                        Active
                                    </span>
                                @else
                                    <span
                                        class="bg-red-600 px-2.5 text-xs
                                rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center
                                align-baseline font-bold uppercase leading-none text-white">
                                        Not active
                                    </span>
                                @endif
                            </td>
                            <td
                                class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div x-data="{ open: false }">
                                    <span
                                        class="bg-blue-500 px-2.5 text-xs
                            rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center
                            align-baseline font-bold uppercase leading-none text-white">
                                        <i class="fas fa-edit" aria-hidden="true"> </i>
                                        edit
                                    </span>
                                    @if ($user->status == 1)

                                        <button @click="open = ! open">
                                            <span
                                                                    class="bg-yellow-300 px-2.5 text-xs
                                                    rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center
                                                    align-baseline font-bold uppercase leading-none text-white">
                                                                    <i class="fas fa-times-circle" aria-hidden="true"> </i>
                                                </span>
                                        </button>

                                        <div x-show="open" @click.outside="open = false">
                                            <button type="submit"
                                                    wire:click.prevent="editStatus({{ $user->id }})"
                                                >
                                                                <span
                                                                    class="bg-red-600 px-2.5 text-xs
                                                    rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center
                                                    align-baseline font-bold uppercase leading-none text-white">
                                                                    <i class="fas fa-times" aria-hidden="true"> </i>
                                                </span>
                                            </button>
                                        </div>

                                    @else
                                    <button type="submit"
                                                    wire:click.prevent="editStatus({{ $user->id }})"
                                                >
                                        <span
                                            class="bg-blue-900 px-2.5 text-xs
                            rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center
                            align-baseline font-bold uppercase leading-none text-white">
                                            <i class="fas fa-retweet" aria-hidden="true"> </i>
                                        </span>
                                    </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                <h6 class="mb-0 text-sm leading-normal">
                                    &nbsp; &nbsp; {{ $search }} Not found
                                </h6>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="flex items-center justify-center">
            {{ $users->links() }}
        </div>
    </div>
</div>



