@foreach ($categories as $category)

    <option value="{{ $category->id ?? "" }}"

        @isset($article->id)

          @if ( $article->categories->contains('id', $category->id) ) 
             selected="selected"
          @endif

        @endisset
    >
    {!! $delimiter ?? '' !!}{{ $category->title ?? '' }}
    </option>

    @isset ($category->children)

        @include('admin.article._categories', [
            'categories' => $category->children,
            'delimiter'  => ' - ' . $delimiter
        ])

    @endisset

@endforeach
