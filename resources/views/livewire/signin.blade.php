<div class="min-h-screen flex items-center justify-center p-6 bg-gradient-to-br from-orange-400 to-orange-600">
    <div class="w-full max-w-md">
        <!-- Logo -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white rounded-2xl shadow-2xl mb-4">
                <i class="fa fa-building text-4xl text-orange-500"></i>
            </div>
            <h1 class="text-3xl font-bold text-white drop-shadow-lg">ระบบจัดการหอพัก</h1>
            <p class="text-orange-100 mt-2">Dormitory Management System</p>
        </div>

        <!-- Card -->
        <div class="bg-white rounded-3xl shadow-2xl p-10">
            <h2 class="text-xl font-semibold text-gray-800 text-center mb-8">เข้าสู่ระบบ</h2>

            <form wire:submit="signin" class="space-y-6">
                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-2">อีเมล</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-orange-500">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <input
                            type="email"
                            wire:model.live="email"
                            placeholder="example@email.com"
                            class="w-full pl-12 pr-4 py-4 bg-orange-50 border-2 border-orange-100 rounded-xl text-gray-700 placeholder-gray-400 focus:bg-white focus:border-orange-400 focus:outline-none transition-all"
                        >
                    </div>
                    @if ($errorEmail)
                        <p class="text-red-500 text-sm mt-2 flex items-center">
                            <i class="fa fa-circle-exclamation mr-2"></i>{{ $errorEmail }}
                        </p>
                    @endif
                </div>

                <!-- Password -->
                <div x-data="{ showPassword: false }">
                    <label class="block text-sm font-medium text-gray-600 mb-2">รหัสผ่าน</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-orange-500">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input
                            x-ref="passwordInput"
                            type="password"
                            wire:model.live="password"
                            placeholder="••••••••"
                            class="w-full pl-12 pr-12 py-4 bg-orange-50 border-2 border-orange-100 rounded-xl text-gray-700 placeholder-gray-400 focus:bg-white focus:border-orange-400 focus:outline-none transition-all"
                        >
                        <button
                            type="button"
                            x-on:click="showPassword = !showPassword; $refs.passwordInput.type = showPassword ? 'text' : 'password'"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-orange-500 transition-colors"
                        >
                            <i class="fa" x-bind:class="showPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                        </button>
                    </div>
                    @if ($errorPassword)
                        <p class="text-red-500 text-sm mt-2 flex items-center">
                            <i class="fa fa-circle-exclamation mr-2"></i>{{ $errorPassword }}
                        </p>
                    @endif
                </div>

                <!-- Error -->
                @if ($error)
                    <div class="bg-red-50 text-red-600 px-4 py-3 rounded-xl text-sm flex items-center border border-red-200">
                        <i class="fa fa-triangle-exclamation mr-3"></i>{{ $error }}
                    </div>
                @endif

                <!-- Submit -->
                <button
                    type="submit"
                    class="w-full bg-orange-600 hover:bg-orange-700 text-white font-semibold py-4 rounded-xl shadow-lg shadow-orange-600/40 hover:shadow-orange-700/50 transition-all duration-300 mt-4"
                >
                    <span wire:loading.remove wire:target="signin">
                        <i class="fa fa-right-to-bracket mr-2"></i>เข้าสู่ระบบ
                    </span>
                    <span wire:loading wire:target="signin">
                        <i class="fa fa-spinner fa-spin mr-2"></i>กำลังเข้าสู่ระบบ...
                    </span>
                </button>
            </form>
        </div>

        <!-- Footer -->
        <p class="text-center text-orange-100 text-sm mt-8">
            <i class="fa fa-shield-halved mr-1"></i>
            Dormitory Management System v1.0
        </p>
    </div>

    <style>
        /* ซ่อนปุ่ม eye ของ browser */
        input::-ms-reveal,
        input::-ms-clear {
            display: none;
        }
        input::-webkit-credentials-auto-fill-button,
        input::-webkit-clear-button {
            display: none !important;
        }
    </style>
</div>
