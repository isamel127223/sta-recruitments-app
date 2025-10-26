<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- ✅ 1. ปรับเนื้อหา Header --}}
            ตั้งค่าโปรไฟล์ (Profile Settings)
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            {{-- ✅ 2. เปลี่ยน bg-green เป็น bg-white --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    {{-- (Partial นี้มีหัวข้อ "Profile Information" อยู่แล้ว) --}}
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            {{-- ✅ 2. เปลี่ยน bg-green เป็น bg-white --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    {{-- (Partial นี้มีหัวข้อ "Update Password" อยู่แล้ว) --}}
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- ✅ 3. ปรับ UI ส่วน "ลบบัญชี" (Danger Zone) --}}
            <div class="p-4 sm:p-8 bg-white shadow-lg shadow-red-500/10 border border-red-500 sm:rounded-lg">
                <div class="max-w-xl">
                    {{-- (Partial นี้มีหัวข้อ "Delete Account" สีแดงอยู่แล้ว) --}}
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>