<x-guest-layout>
    <div class="text-center mb-4">
        <h2 class="text-2xl font-bold text-sta-yellow">Register (ลงทะเบียน)</h2>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="fullname" value="ชื่อ-นามสกุล (Full Name)" class="text-yellow-300" />
            <x-text-input id="fullname" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="fullname" :value="old('fullname')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="username" value="ชื่อผู้ใช้ (Username)" class="text-yellow-300" />
            <x-text-input id="username" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="username" :value="old('username')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" value="Email" class="text-yellow-300" />
            <x-text-input id="email" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" value="Password (รหัสผ่าน)" class="text-yellow-300" />
            <x-text-input id="password" class="block mt-1 w-full bg-gray-700 text-white border-gray-600"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" value="Confirm Password (ยืนยันรหัสผ่าน)" class="text-yellow-300" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full bg-gray-700 text-white border-gray-600"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <a class="underline text-sm text-yellow-400 hover:text-sta-yellow" href="{{ route('login') }}">
                เป็นสมาชิกอยู่แล้ว? (Login)
            </a>

            <button type="submit" class="px-4 py-2 bg-gradient-to-r from-yellow-400 via-sta-yellow to-yellow-500 text-black font-bold rounded-md hover:from-yellow-500 hover:to-yellow-600 focus:outline-none focus:ring-2 focus:ring-sta-yellow focus:ring-offset-2 focus:ring-offset-sta-dark">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</x-guest-layout>