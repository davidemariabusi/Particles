<a class="fancybox icon-faq" href="#{{ $tooltipName }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="margin-left: 10px; height: 26px;">
        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
</a>
<div id="{{ $tooltipName }}" style="display: none">
    {{ $tooltipContent }}
</div>
