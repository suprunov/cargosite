@props(['breadcrumbs'])

<div class="pathBar">
    <div class="pathBar__inner">
        @foreach ($breadcrumbs as $index => $breadcrumb)
            @if ($index < count($breadcrumbs) - 1)
                <a href="{{ $breadcrumb['url'] }}" class="pathBar__item">{{ $breadcrumb['title'] }}</a>
                <span class="pathBar__sep"></span>
            @else
                <span class="pathBar__item _active">{{ $breadcrumb['title'] }}</span>
            @endif
        @endforeach
    </div>
</div>

@if (count($breadcrumbs) > 1)
    <div class="pathBar _back">
        <div class="pathBar__inner">
            @php
                $backBreadcrumb = $breadcrumbs[count($breadcrumbs) - 2];
            @endphp
            <a href="{{ $backBreadcrumb['url'] }}" class="pathBar__item _back">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="#20212B" stroke-width="1.6" d="M13.242 16.243 9.07 12.07a.1.1 0 0 1 0-.142l4.172-4.172"/>
                </svg>
                Назад
            </a>
        </div>
    </div>
@endif
