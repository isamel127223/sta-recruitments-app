<x-guest-layout>
    <div class="text-center mb-4">
        <h2 class="login-title">STA-Recruitment Login</h2>
        <p class="login-subtitle">เข้าสู่ระบบเพื่อทำรายการ</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="username" value="ชื่อผู้ใช้ (Username)" class="text-yellow-200" />
            <x-text-input id="username" class="block mt-1 w-full bg-gray-800 text-white border-gray-700 focus:border-yellow-400 focus:ring-yellow-400"
                type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" value="รหัสผ่าน (Password)" class="text-yellow-200" />
            <x-text-input id="password" class="block mt-1 w-full bg-gray-800 text-white border-gray-700 focus:border-yellow-400 focus:ring-yellow-400"
                type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-yellow-400 shadow-sm focus:ring-yellow-400" name="remember">
                <span class="ms-2 text-sm text-yellow-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="mt-6">
            <button type="submit" class="btn-login py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
                {{ __('เข้าสู่ระบบ') }}
            </button>
        </div>

        <div class="flex justify-between items-center mt-4 text-sm">
            <a href="{{ route('register') }}" class="link">ยังไม่มีบัญชี? สมัครสมาชิก</a>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="link">ลืมรหัสผ่าน?</a>
            @endif
        </div>
    </form>
</x-guest-layout>