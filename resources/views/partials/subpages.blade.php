@if(Route::is('crm'))
<li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
aria-current="page"><a href="{{ route('find_customer') }}">Find Customer</a></li>
<li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
aria-current="page">Telesales</li>
<li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
aria-current="page">Matrix</li>
@endif
