<nav class="header__nav">
    <ul>
        @foreach($data as $menuItem)
            @if(isset($menuItem['groups']))
                <li class="header__nav-item-sub">
                    <div class="header__nav-label">
                        {{ $menuItem['title'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16">
                            <path stroke="#20212B" stroke-width="1.06667"
                                  d="m5.172 7.333 2.78 2.782a.067.067 0 0 0 .095 0l2.781-2.782"/>
                        </svg>
                    </div>
                    <div class="header__nav-sub">
                        @foreach($menuItem['groups'] as $group)
                            <div class="header__nav-sub-item">
                                <div class="header__nav-sub-item-header">
                                    @if(isset($group['route']))
                                        <a href="{{ route($group['route']) }}" class="header__nav-sub-item-header-name">
                                            <img src="{{ Vite::image("icons/menu/". $group['icon']) }}" alt="">
                                            {{ $group['title'] }}
                                        </a>
                                    @else
                                        <span class="header__nav-sub-item-header-name">
                                            <img src="{{ Vite::image("icons/menu/" . $group['icon']) }}" alt="">
                                            {{ $group['title'] }}
                                        </span>
                                    @endif
                                    <div class="header__nav-sub-item-header-label">{{ $group['subtitle'] }}</div>
                                </div>
                                @if(!empty($group['items']))
                                    <ul>
                                        @foreach($group['items'] as $item)
                                            <li>
                                                @if(isset($item['route']))
                                                    <a href="{{ route($item['route']) }}">
                                                        {{ $item['title'] }}
                                                    </a>
                                                @else
                                                    <span>
                                                        {{ $item['title'] }}
                                                    </span>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </li>
            @else
                <li class="header__nav-item-much">
                    @if(isset($menuItem['route']))
                        <a href="{{ route($menuItem['route']) }}">
                            {{ $menuItem['title'] }}
                        </a>
                    @else
                        <span>
                            {{ $menuItem['title'] }}
                        </span>
                    @endif
                </li>
            @endif
        @endforeach
    </ul>
</nav>
