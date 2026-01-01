<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Feedback System | Consulta'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100 antialiased">

    <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">

                
                <div class="flex">
                    <div class="shrink-0 flex items-center font-bold text-xl text-blue-600">
                        Feedback System
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <!-- <a href="<?php echo e(route('services.index')); ?>" wire:navigate
                            class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-300 dark:hover:text-white transition">
                            Services
                        </a> -->
                    </div>
                </div>

                
                <div class="flex items-center gap-4">

                    
                    <button
                        x-data="{ 
                            darkMode: localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) 
                        }"
                        x-init="$watch('darkMode', val => {
                            val ? document.documentElement.classList.add('dark') : document.documentElement.classList.remove('dark');
                            localStorage.theme = val ? 'dark' : 'light';
                        })"
                        @click="darkMode = !darkMode"
                        class="p-2 rounded-lg text-gray-500 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 focus:outline-none transition">
                        <span x-show="darkMode">☀️</span>
                        <span x-show="!darkMode">🌙</span>
                    </button>

                    
                    
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                    <div class="flex items-center gap-3">
                        
                        <div class="flex items-center gap-2">
                            <div class="text-sm font-medium text-gray-700 dark:text-gray-300">
                                <?php echo e(auth()->user()->name); ?>

                            </div>

                            
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->user()->is_admin): ?>
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wide bg-blue-100 text-blue-800 dark:bg-blue-900/50 dark:text-blue-200 border border-blue-200 dark:border-blue-800">
                                Admin
                            </span>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        
                        <span class="text-gray-300 dark:text-gray-600">|</span>

                        
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="text-sm font-medium text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300 transition">
                                Log Out
                            </button>
                        </form>
                    </div>
                    <?php else: ?>
                    
                    <a href="<?php echo e(route('login')); ?>" wire:navigate class="text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition">
                        Log in
                    </a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>
            </div>
        </div>
    </header>

    <main class="py-8">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
            <?php echo e($slot); ?>

        </div>
    </main>

</body>

</html><?php /**PATH /Users/jaimeconsulta/Downloads/feedbacksystem-main/resources/views/components/layouts/app/navbar.blade.php ENDPATH**/ ?>