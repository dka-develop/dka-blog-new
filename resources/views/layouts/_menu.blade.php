@foreach ($categories as $category)

    @if ($category->children->where('published', 1)->count())
        <li class="nav-item dropdown">
            <a href="{{ route('category', $category->slug) }}" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                {{ $category->title }}
            </a>
            <div class="dropdown-menu">
                @include('layouts._menu', [
                    'categories' => $category->children,
                    'isChild' => true
                ])
            </div>
        </li>
    @else

        @isset ($isChild)
            <a class="nav-link" href="{{ route('category', $category->slug) }}">{{ $category->title }}</a>
            @continue
        @endif  

        <li class="nav-item">             
            <a class="nav-link" href="{{ route('category', $category->slug) }}">{{ $category->title }}</a>
        </li>
    @endif
    
    
@endforeach
