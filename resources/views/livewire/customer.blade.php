<div>
    <div class="content-header">ผู้เข้าพัก</div>
    <div class="content-body">
        <button class="btn-info" wire:click="openModal">

            <i class="fa-solid fa-plus mr-2"></i>
            เพิ่มผู้เข้าพัก
        </button>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th class="text-left">ชื่อ</th>
                    <th class="text-left">เบอร์โทร</th>
                    <th class="text-right">ห้องพัก</th>
                    <th class="text-left">วันที่เข้าพัก</th>
                    <th class="text-left">ประเภทการเข้าพัก</th>
                    <th class="text-left">หมายเหตุ</th>
                    <th width="230px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td class="text-right">{{ $customer->room->name }}</td>
                        <td>{{ date('d/m/Y', strtotime($customer->created_at)) }}</td>
                        <td>{{ $customer->stay_type == 'd' ? 'รายวัน' : 'รายเดือน' }}</td>
                        <td>{{ $customer->remark }}</td>
                        <td class="text-center">
                            <button class="btn-edit" wire:click="openModalMove({{ $customer->id }})">
                                ย้ายห้อง
                            </button>

                            <button class="btn-edit" wire:click="openModalEdit({{ $customer->id }})">
                                <i class="fa-solid fa-pencil mr-2"></i>
                            </button>

                            <button class="btn-delete" wire:click="openModalDelete({{ $customer->id }})">
                                <i class="fa-solid fa-times mr-2"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-modal wire:model="showModal" title="ผู้เข้าพัก">
        <div class="flex gap-2">
            <div class="w-1/2">
                <div>ชื่อ</div>
                <input type="text" class="form-control" wire:model="name">
            </div>
            <div class="w-1/2">
                <div>เบอร์โทร</div>
                <input type="text" class="form-control" wire:model="phone">
            </div>
        </div>
        <div class="flex gap-2 mt-3">
            <div class="w-1/3">
                <div>ห้องพัก</div>
                <select wire:model="roomId" class="form-control">
                    <option value="">เลือกห้องพัก</option>
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}">
                            {{ $room->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="w-1/3">
                <div>วันที่เข้าพัก</div>
                <input type="date" class="form-control" wire:model="createdAt">
            </div>
            <div class="w-1/3">
                <div>ประเภทการเข้าพัก</div>
                <select wire:model="stayType" class="form-control">
                    <option value="d">รายวัน</option>
                    <option value="m">รายเดือน</option>
                </select>
            </div>
        </div>

        <div class="mt-3">ที่อยู่</div>
        <input type="text" class="form-control" wire:model="address">

        <div>หมายเหตุ</div>
        <input type="text" class="form-control" wire:model="remark">

        <div class="flex gap-2 mt-2 justify-center">
            <button class="btn-success" wire:click="save">
                <i class="fa-solid fa-check mr-2"></i>
                บันทึก
            </button>
            <button class="btn-secondary" wire:click="closeModal">
                <i class="fa-solid fa-times mr-2"></i>
                ยกเลิก
            </button>
        </div>
    </x-modal>

    <x-modal-confirm wire:modal="showModalDelete" title="ลบผู้เข้าพัก" text="คุณต้องการลบผู้เข้าพักนี้ใช่หรือไม่"
        clickConfirm="delete" clickCancel="closeModalDelete">
    </x-modal-confirm>

    <x-modal wire:model="showModalMove" title="ย้ายห้องพัก">
        <div>ห้องใหม่</div>
        <select class="form-control" wire:model="roomIdMove">
            <option value="">เลือกห้องพัก</option>
            @foreach ($rooms as $room)
                <option value="{{ $room->id }}">
                    {{ $room->name }}
                </option>
            @endforeach
        </select>

        <div class="mt-3 text-center">
            <button class="btn-success" wire:click="move">
                <i class="fa fa-check mr-2"></i>
                บันทึก
            </button>
            <button class="btn-secondary" wire:click="closeModalMove">
                <i class="fa fa-times mr-2"></i>
                ยกเลิก
            </button>
        </div>
    </x-modal>
</div>
