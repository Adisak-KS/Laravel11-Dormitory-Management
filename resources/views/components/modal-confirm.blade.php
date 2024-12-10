@props(['title', 'text', 'clickConfirm', 'clickCancel', 'showModalDelete'])

<x-modal wire:model="{{ $showModalDelete}}" zIndex="51" title="{{ $title }}" maxWidth="xl">
    <div class="p-5 text-center text-xl">
        <div class="text-8xl text-orange-500 mb-3">
            <i class="fa fa-question"></i>
        </div>
        <div class="text-4xl font-bold">{{ $title }}</div>
        <div class="mt-3 text-2xl">{{ $text }}</div>
    </div>
    <div class="mt-5 text-center pb-5">
        <button class="btn-success mr-2" wire:click="{{ $clickConfirm }}">
            <i class="fa-solid fa-check mr-2"></i>
            ยืนยัน
        </button>
        <button class="btn-secondary mr-2" wire:click="{{ $clickCancel }}">
            <i class="fa-solid fa-times mr-2"></i>
            ยกเลิก
        </button>
    </div>
</x-modal>
