<header class="bg-base-100 py-4 shadow-md dark:bg-base-200">
    <div class="container mx-auto flex h-full items-center justify-between px-6 text-purple-600 dark:text-purple-300">
        <!-- Mobile hamburger -->
        @include('layouts.dashboard-new._partials.mobileHumberger')
        @include('layouts.dashboard-new._partials.searchbox')

        <ul class="flex flex-shrink-0 items-center space-x-6">
            @include('layouts.dashboard-new._partials.themeToggler')
            @include('layouts.dashboard-new._partials.notificationsMenu')
            @include('layouts.dashboard-new._partials.profileMenu')
        </ul>
    </div>
</header>
