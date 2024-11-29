<div class="navbar">
    <div class="flex items-center justify-between">
        <div>
            <i class="fa-solid fa-user me-2"></i>
            <span class="username">{{ $user_name }}</span>
        </div>
        <div>
            <button wire:click="logout" class="border border-orange-400 text-orange-400 px-6 py-3 rounded-2xl">
                <span>ออกจากระบบ</span>
                <i class="fa-solid fa-sign-out ms-3"></i>
            </button>
        </div>
    </div>
</div>
