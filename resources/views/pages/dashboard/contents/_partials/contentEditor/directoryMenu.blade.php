<ul class="menu menu-xs h-full w-full max-w-xs flex-nowrap overflow-auto rounded-lg px-0 pb-20">
    @foreach ($directories as $subDirectory)
        @include(
            'pages.dashboard.contents._partials.contentEditor.directoryItem',
            [
                'directory' => $subDirectory,
            ]
        )
    @endforeach

    {{--
        @foreach ($directory->contents as $contentItem)
        @include('pages.dashboard.contents._partials.contentEditor.documentItem', [
        'content' => $contentItem
        ])
        @endforeach
    --}}
</ul>
