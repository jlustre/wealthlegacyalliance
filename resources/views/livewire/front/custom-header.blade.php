<div>
    <flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700 pt-2 md:pt-0">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Wealth Legacy Alliance" class="max-lg:hidden dark:hidden" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Wealth Legacy Alliance" class="max-lg:hidden! hidden dark:flex" />

        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item icon="home" href="#" current>Home</flux:navbar.item>
            <flux:navbar.item icon="inbox" badge="12" href="#">Inbox</flux:navbar.item>
            <flux:navbar.item icon="document-text" href="#">Documents</flux:navbar.item>
            <flux:navbar.item icon="calendar" href="#">Calendar</flux:navbar.item>

            <flux:separator vertical variant="subtle" class="my-2"/>

            <flux:dropdown class="max-lg:hidden">
                <flux:navbar.item icon:trailing="chevron-down">Favorites</flux:navbar.item>

                <flux:navmenu>
                    <flux:navmenu.item href="#">Marketing site</flux:navmenu.item>
                    <flux:navmenu.item href="#">Android app</flux:navmenu.item>
                    <flux:navmenu.item href="#">Brand guidelines</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>
        </flux:navbar>

        <flux:spacer />

        @auth
            <flux:navbar class="hidden lg:flex mr-2">
                <flux:navbar.item class="max-lg:hidden" icon="computer-desktop" href="/dashboard">Dashboard</flux:navbar.item>
            </flux:navbar>
            <flux:dropdown position="top" align="start">
                <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />

                <flux:menu>
                    <flux:menu.radio.group>
                        <flux:menu.radio checked>{{ Auth::user()->name }}</flux:menu.radio>
                        <flux:menu.item icon="computer-desktop" class="max-lg:blocked" href="{{ route('dashboard') }}">Dashboard</flux:menu.item>
                        <flux:menu.item icon="identification" href="{{ route('settings.profile') }}">Profile</flux:menu.item>
                        <flux:menu.item icon="cog-6-tooth" href="{{ route('settings.appearance') }}">Appearance</flux:menu.item>
                        <flux:menu.item icon="lock-open" href="{{ route('settings.password') }}">Password</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <flux:menu.item icon="arrow-right-start-on-rectangle" as="button" type="submit" class="bg-none border-none p-0 w-full text-left">
                            Logout
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        @else
            <flux:navbar class="lg:flex mr-2">
                <flux:navbar.item icon="arrow-right-end-on-rectangle" href="/login">Log In</flux:navbar.item>
                <flux:navbar.item icon="user-plus" href="/register">Register</flux:navbar.item>
            </flux:navbar>
        @endauth
        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif

    </flux:header>

    <flux:sidebar stashable sticky class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc." class="px-2 dark:hidden" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc." class="px-2 hidden dark:flex" />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="home" href="#" current>Home</flux:navlist.item>
            <flux:navlist.item icon="inbox" badge="12" href="#">Inbox</flux:navlist.item>
            <flux:navlist.item icon="document-text" href="#">Documents</flux:navlist.item>
            <flux:navlist.item icon="calendar" href="#">Calendar</flux:navlist.item>

            <flux:navlist.group expandable heading="Favorites" class="max-lg:hidden">
                <flux:navlist.item href="#">Marketing site</flux:navlist.item>
                <flux:navlist.item href="#">Android app</flux:navlist.item>
                <flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
            <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>
</div>
