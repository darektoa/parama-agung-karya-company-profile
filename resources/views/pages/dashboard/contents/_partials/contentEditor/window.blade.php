<div class="mockup-window h-full w-full border bg-base-300">
    <div class="jus group relative flex h-full w-full bg-base-200">
        <input
            type="checkbox"
            id="contentEditorSidebarIsOpenInput"
            class="peer/sidebarIsOpen hidden appearance-none [&_~_*_.contentEditorSidebarContent]:checked:hidden"
            aria-hidden="true"
        />

        <section class="flex h-full items-start justify-start p-2">
            <ul class="static h-full !w-auto rounded-xl bg-base-300 p-1">
                @include('pages.dashboard.contents._partials.contentEditor.sideNav.editor')
                @include('pages.dashboard.contents._partials.contentEditor.sideNav.stats')
                @include('pages.dashboard.contents._partials.contentEditor.sideNav.info')
            </ul>
        </section>

        <div
            class="h-full w-full max-w-2xs border-r border-base-300 transition-all peer-checked/sidebarIsOpen:w-0"
        ></div>

        <section class="flex h-full w-full rounded-xl p-4">
            @include('pages.dashboard.contents._partials.contentEditor.editorForm')
        </section>
    </div>
</div>
