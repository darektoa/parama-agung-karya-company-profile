<li class="static mb-1">
    <input
        type="radio"
        name="contentEditorNav"
        class="peer/contentEditorNavItemInput1 peer hidden appearance-none"
        id="contentEditorNavItemInput1"
        aria-hidden="true"
        checked
    />
    <label
        for="contentEditorSidebarIsOpenInput"
        class="absolute z-50 hidden size-11 cursor-pointer peer-checked:flex"
        aria-hidden="true"
    ></label>
    <label
        class="tooltip tooltip-right flex cursor-pointer rounded-lg p-3 hover:bg-base-content/10 peer-checked:bg-neutral peer-checked:text-neutral-content"
        data-tip="Home"
        for="contentEditorNavItemInput1"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
            />
        </svg>
    </label>
    <section
        class="contentEditorSidebarContent absolute left-16 top-0 ml-1 h-full w-0 max-w-2xs flex-nowrap pr-4 hover:!bg-transparent peer-checked/sidebarIsOpen:w-0 peer-checked:w-full"
    >
        @include('pages.dashboard.contents._partials.contentEditor.directoryMenu')
    </section>
</li>
