@foreach ($categories as $categoryList)

    <option value="{{ $categoryList->id ?? '' }}"

        @isset($category->id)

            @if ($category->parent_id == $categoryList->id)
                selected=""
            @endif

            @if ($category->id == $categoryList->id)
                hidden=""
            @endif

        @endisset

    >
    {{ $delimiter ?? '' }}{{ $categoryList->title ?? '' }}
    </option>

    @isset ($categoryList->children)

        @include('admin.category._categories', [
            'categories' => $categoryList->children,
            'delimiter'  => ' - ' . $delimiter
        ])

    @endif

@endforeach
