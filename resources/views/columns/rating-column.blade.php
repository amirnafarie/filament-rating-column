@php
    $stars = $column->getStars();
@endphp

<div class="flex items-center space-x-1 rtl:space-x-reverse text-yellow-500">
    @for ($i = 0; $i < $stars['full']; $i++)
        <x-heroicon-s-star class="w-5 h-5 fill-current" />
    @endfor

    @if ($stars['half'])
        <x-heroicon-s-star class="w-5 h-5 fill-current opacity-50" />
    @endif

</div>
