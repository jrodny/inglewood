@if ($message = Session::get('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="relative w-full p-4 text-white rounded-lg bg-lime-500">
        {{ $message }}
    </div>
@endif



