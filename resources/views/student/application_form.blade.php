<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            แบบฟอร์มสมัครเรียน
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-sta-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-white">

                    @if ($errors->any())
                        <div class="mb-4 bg-red-800 text-white p-4 rounded-lg">
                            <strong>เกิดข้อผิดพลาด! กรุณาตรวจสอบข้อมูล:</strong>
                            <ul class="list-disc list-inside mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                                        <form method="POST" action="{{ route('application.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <h3 class="text-2xl font-semibold text-sta-yellow mb-6 border-b-2 border-sta-yellow pb-2">
                            ข้อมูลส่วนตัว
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                            <div>
                                <x-input-label for="fullname" value="ชื่อ-นามสกุล (จากระบบ)" class="text-yellow-500" />
                                <x-text-input id="fullname" class="block mt-1 w-full bg-gray-600 border-gray-500 text-gray-200" type="text" :value="$student->fullname" disabled />
                            </div>
                            <div>
                                <x-input-label for="email" value="อีเมล (จากระบบ)" class="text-yellow-500" />
                                <x-text-input id="email" class="block mt-1 w-full bg-gray-600 border-gray-500 text-gray-200" type="email" :value="$student->email" disabled />
                            </div>
                            <div class="md:col-span-2">
                                <x-input-label for="phone" value="เบอร์โทรศัพท์ (จากระบบ)" class="text-yellow-500" />
                                <x-text-input id="phone" class="block mt-1 w-full bg-gray-600 border-gray-500 text-gray-200" type="text" :value="$student->phone" disabled />
                                <p class="text-xs text-gray-400 mt-1">หากต้องการแก้ไขข้อมูล 3 ช่องนี้, กรุณาไปที่หน้า "User Setting"</p>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-4">
                            <div>
                                <x-input-label for="prefix" value="คำนำหน้าชื่อ" class="text-yellow-500" />
                                <select id="prefix" name="prefix" class="block mt-1 w-full border-gray-500 bg-gray-600 text-white focus:border-yellow-500 focus:ring-yellow-500 rounded-md shadow-sm" required>
                                    <option value="">-- เลือก --</option>
                                    <option value="นาย" {{ old('prefix', $student->prefix) == 'นาย' ? 'selected' : '' }}>นาย</option>
                                    <option value="นางสาว" {{ old('prefix', $student->prefix) == 'นางสาว' ? 'selected' : '' }}>นางสาว</option>
                                    <option value="อื่นๆ" {{ old('prefix', $student->prefix) == 'อื่นๆ' ? 'selected' : '' }}>อื่นๆ</option>
                                </select>
                            </div>
                            <div>
                                <x-input-label for="id_card_number" value="เลขประจำตัวประชาชน (13 หลัก)" class="text-yellow-500" />
                                <x-text-input id="id_card_number" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="id_card_number" :value="old('id_card_number', $student->id_card_number)" required />
                            </div>
                            <div>
                      _           <x-input-label for="dob" value="วัน/เดือน/ปีเกิด (ค.ศ.)" class="text-yellow-500" />
                                <x-text-input id="dob" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="date" name="dob" :value="old('dob', $student->dob)" required />
                            </div>
                            <div>
                                <x-input-label for="age" value="อายุ (ปี)" class="text-yellow-500" />
                                <x-text-input id="age" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="number" name="age" :value="old('age', $student->age)" required />
                            </div>
                            <div>
                                <x-input-label for="nationality" value="สัญชาติ" class="text-yellow-500" />
                                <x-text-input id="nationality" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="nationality" :value="old('nationality', $student->nationality)" required />
Â                       </div>
                            <div>
                                <x-input-label for="ethnicity" value="เชื้อชาติ" class="text-yellow-500" />
                                <x-text-input id="ethnicity" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="ethnicity" :value="old('ethnicity', $student->ethnicity)" required />
                            </div>
                            <div>
                                <x-input-label for="religion" value="ศาสนา" class="text-yellow-500" />
                                <x-text-input id="religion" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="religion" :value="old('religion', $student->religion)" required />
                            </div>
                        </div>

                        <h4 class="text-lg font-semibold text-gray-300 mb-2">ที่อยู่ปัจจุบัน</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-4">
                            <div class="md:col-span-1">
                                <x-input-label for="address_house_no" value="บ้านเลขที่" class="text-yellow-500" />
                                <x-text-input id="address_house_no" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="address_house_no" :value="old('address_house_no', $student->address_house_no)" required />
                            </div>
                            <div class="md:col-span-1">
                                <x-input-label for="address_soi" value="หมู่ที่/ซอย" class="text-yellow-500" />
                                <x-text-input id="address_soi" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="address_soi" :value="old('address_soi', $student->address_soi)" />
                            </div>
                            <div class="md:col-span-1">
                                <x-input-label for="address_street" value="ถนน" class="text-yellow-500" />
                      _         <x-text-input id="address_street" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="address_street" :value="old('address_street', $student->address_street)" />
                            </div>
                            <div>
                                <x-input-label for="address_subdistrict" value="ตำบล/แขวง" class="text-yellow-500" />
                                <x-text-input id="address_subdistrict" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="address_subdistrict" :value="old('address_subdistrict', $student->address_subdistrict)" required />
                            </div>
                            <div>
                                <x-input-label for="address_district" value="อำเภอ/เขต" class="text-yellow-500" />
                                <x-text-input id="address_district" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="address_district" :value="old('address_district', $student->address_district)" required />
                            </div>
                            <div>
                                <x-input-label for="address_province" value="จังหวัด" class="text-yellow-500" />
                                <x-text-input id="address_province" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="address_province" :value="old('address_province', $student->address_province)" required />
                            </div>
                            <div>
                                <x-input-label for="address_postal_code" value="รหัสไปรษณีย์" class="text-yellow-500" />
                                <x-text-input id="address_postal_code" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="address_postal_code" :value="old('address_postal_code', $student->address_postal_code)" required />
                            </div>
                        </div>

                        <h4 class="text-lg font-semibold text-gray-300 mb-2">ข้อมูลผู้ปกครอง</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <div>
                                <x-input-label for="parent_name" value="ชื่อ-นามสกุล ผู้ปกครอง" class="text-yellow-500" />
                                <x-text-input id="parent_name" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="parent_name" :value="old('parent_name', $student->parent_name)" required />
                            </div>
                            <div>
                                <x-input-label for="parent_phone" value="เบอร์โทรศัพท์" class="text-yellow-500" />
                                <x-text-input id="parent_phone" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="parent_phone" :value="old('parent_phone', $student->parent_phone)" required />
                            </div>
                            <div>
                                <x-input-label for="parent_relation" value="ความสัมพันธ์" class="text-yellow-500" />
                                <x-text-input id="parent_relation" class="block mt-1 w-full bg-gray-700 text-white border-gray-600" type="text" name="parent_relation" :value="old('parent_relation', $student->parent_relation)" required />
                            </div>
                        </div>

                        <h3 class="text-2xl font-semibold text-sta-yellow mt-10 mb-6 border-b-2 border-sta-yellow pb-2">
                          ข้อมูลการศึกษา
                        </h3>
                        
                        <div class="mb-4">
                            <x-input-label value="สถานภาพปัจจุบัน" class="text-yellow-500 mb-2" />
                            <div class="space-y-2">
                                <label class="flex items-center text-yellow-500"><input type="radio" name="education_status" value="กำลังศึกษาอยู่ ม.6/ปวช." class="mr-2 text-sta-yellow focus:ring-sta-yellow" {{ old('education_status') == 'กำลังศึกษาอยู่ ม.6/ปวช.' ? 'checked' : '' }} required> กำลังศึกษาอยู่ชั้นมัธยมศึกษาปีที่ 6/ปวช.</label>
                                <label class="flex items-center text-yellow-500"><input type="radio" name="education_status" value="สำเร็จการศึกษา ม.6/ปวช." class="mr-2 text-sta-yellow focus:ring-sta-yellow" {{ old('education_status') == 'สำเร็จการศึกษา ม.6/ปวช.' ? 'checked' : '' }}> สำเร็จการศึกษาระดับมัธยมศึกษาตอนปลาย/ปวช. แล้ว</label>
                                <label class="flex items-center text-yellow-500"><input type="radio" name="education_status" value="กำลังศึกษาอยู่ ปวส." class="mr-2 text-sta-yellow focus