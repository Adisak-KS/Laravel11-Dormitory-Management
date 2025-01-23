<div class="navbar">
    <div class="flex items-center justify-between">
        <div>
            <i class="fa-solid fa-user me-2"></i>
            <span class="username">{{ $user_name }} ({{ $userLevel }})</span>
        </div>
        <div>
            <button wire:click="editProfile"
                class="border border-orange-300 text-blue-300  px-6 py-3 rounded-2xl hover:bg-blue-400 hover:text-white mr-2">
                <i class="fa-solid fa-user mr-2"></i>
                แก้ไขข้อมูลส่วนตัว

            </button>
            <button wire:click="showModal = true" class="border border-orange-400 text-orange-400 px-6 py-3 rounded-2xl">
                <span>ออกจากระบบ</span>
                <i class="fa-solid fa-sign-out-alt ms-2"></i>
            </button>
        </div>
    </div>

    <x-modal wire:model="showModal" maxWidth="sm" title="ออกจากระบบ">
        <div class="text-center">
            <div><i class="fa-solid fa-question text-red-500 text-5xl"></i></div>
            <div class="text-3xl font-bold text-gray-800 mt-3">ออกจากระบบ</div>
            <div class="text-gray-800 mt-3 text-2xl">คุณต้องการออกจากระบบหรือไม่</div>
        </div>
        <div class="flex justify-center mt-6 pb-4">
            <button class="btn-danger mr-2" wire:click="logout">
                <i class="fa-solid fa-check"></i>
                ยืนยัน
            </button>
            <button class="btn-secondary" wire:click="showModal = false">
                <i class="fa-solid fa-xmark"></i>
                ยกเลิก
            </button>
        </div>
    </x-modal>


    <x-modal wire:model="showModalEdit" maxWidth="sm" title="แก้ไขข้อมูลส่วนตัว">
        @if ($errors->any())
            <div class="alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div>Username</div>
        <input type="text" class="form-control" wire:model="username">

        <div class="mt-3">Password ใหม่</div>
        <input type="password" class="form-control" wire:model="password">

        <div class="mt-5">ยืนยัน Password ใหม่</div>
        <input type="password" class="form-control" wire:model="password_confirm">

        <div class="flex justify-center mt-6 pb-4">
            <button class="btn-primary mr-2" wire:click="updateProfile">
                <i class="fa-solid fa-check mr-2"></i>
                ยืนยัน
            </button>
            <button class="btn-secondary" wire:click="showModalEdit = false">
                <i class="fa-solid fa-xmark mr-2"></i>
                ยกเลิก
            </button>
        </div>

        @if ($saveSuccess)
            <div class="alert-success alert">
                <i class="fa-solid fa-check mr-2"></i>
                บันทึกข้อมูลสำเร็จ
            </div>
        @endif
    </x-modal>

</div>
