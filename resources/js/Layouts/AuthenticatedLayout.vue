<template>
    <div class="flex min-h-screen bg-gray-100 dark:bg-gray-900">
        <!-- Left Navigation Menu -->
        <nav class="w-32 bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700 flex flex-col justify-between">
            <div class="p-4">
                <!-- Logo -->
                <div class="mb-8 flex items-center">
                    <!-- go to main page -->
                    <Link :href="route('dashboard')">
                        <ApplicationLogo
                            class="block h-9 w-auto fill-current text-white"
                        />
                    </Link>
                </div>

                <!-- Navigation Links -->
                <div class="space-y-4">
                    <!-- ...rest of the NavLinks... -->
                    <NavLink class="flex flex-col items-center" :href="route('dashboard')" :active="route().current('dashboard')">
                        <a :href="route('dashboard')" class="flex flex-col items-center">
                            <HomeIcon class="h-14 w-14 mb-1 text-white items-center" />
                            <span class="text-white">Home</span>
                        </a>
                    </NavLink>
                    <NavLink class="flex flex-col items-center" :href="route('study-plan')" :active="route().current('study-plan')">
                        <a :href="route('study-plan')" class="flex flex-col items-center">
                            <BookOpenIcon class="h-14 w-14 mb-1 text-white items-center" />
                            <span class="text-white">Study Plan</span>
                        </a>
                    </NavLink>
                    <NavLink class="flex flex-col items-center" :href="route('friends')" :active="route().current('friends')">
                        <a :href="route('friends')" class="flex flex-col items-center">
                            <UsersIcon class="h-14 w-14 mb-1 text-white" />
                            <span class="text-white">Friends</span>
                        </a>
                    </NavLink>
                    <NavLink class="flex flex-col items-center" :href="route('progress')" :active="route().current('progress')">
                        <a :href="route('progress')" class="flex flex-col items-center">
                            <ChartBarIcon class="h-14 w-14 mb-1 text-white" />
                            <span class="text-white">Progress</span>
                         </a>
                    </NavLink>
                    <NavLink class="flex flex-col items-center" :href="route('discussion')" :active="route().current('discussion')">
                        <a :href="route('discussion')" class="flex flex-col items-center">
                            <ChatIcon class="h-14 w-14 mb-1 text-white" />
                            <span class="text-white">Discussion</span>
                        </a>
                    </NavLink>
                    
                    <NavLink class="flex flex-col items-center" :href="route('study-now')" :active="route().current('study-now')">
                        <a :href="route('study-now')" class="flex flex-col items-center">
                                <div class="h-20 w-20 mt-3 bg-primary rounded-full flex items-center justify-center">
                                    <PlayIcon class="h-14 w-14 text-white text-white" />
                                </div>
                            <span class="text-white">Study Now</span>
                        </a>
                    </NavLink>
                </div>
            </div>
            <div class="p-4 mb-4">
                <NavLink class="flex flex-col items-center" :href="route('settings')" :active="route().current('settings')">
                    <a :href="route('settings')">
                        <CogIcon class="h-14 w-14 mb-1 text-white" />
                        <span class="text-white">Settings</span>
                    </a>
                </NavLink>
            </div>
        </nav>


        <div class="flex-1">
            <!-- Page Heading -->
            <header class="bg-white dark:bg-gray-800 shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Main -->
            <main>
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>

<script setup>
// import your icons here
import { HomeIcon, BookOpenIcon, UsersIcon, ChartBarIcon, ChatIcon, PlayIcon, CogIcon } from '@heroicons/vue/outline'
</script>
