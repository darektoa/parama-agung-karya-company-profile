<li>
    <details
        @isset($content)
            @if ($content->paths()->contains($directory->id))
                open
            @endif
        @endisset>
        <summary class="font-bold">
            {{--
                <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-5 w-5"
                >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"
                />
                </svg>
            --}}
            {{ $directory->name }}
        </summary>

        <ul>
            @foreach ($directory->directories as $subDirectory)
                @include(
                    "layouts.dashboard-new._partials.sidemenu.contents.directoryItem",
                    [
                        "directory" => $subDirectory,
                    ]
                )
            @endforeach

            @foreach ($directory->contents as $content)
                @include(
                    "layouts.dashboard-new._partials.sidemenu.contents.documentItem",
                    [
                        "content" => $content,
                    ]
                )
            @endforeach

            @if ($directory->contents->isEmpty() && $directory->directories->isEmpty())
                <li class="disabled">
                    <i>Empty . . .</i>
                </li>
            @endif
        </ul>
    </details>
</li>
