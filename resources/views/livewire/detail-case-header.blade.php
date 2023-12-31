<div>
    <div class="flex flex-row w-full">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight grow">
            Kasus: {{ $project->name }}
        </h2>

        <x-button icon="pencil" wire:click="openEditProject" spinner="openEditProject" class="rounded-xl " />

    </div>
    <x-modal wire:model.defer="simpleModal">
        <x-card title="Edit Kasus">
            <p class="text-gray-600">
                <x-input label="Nama Kasus" placeholder="Contoh: Smartphone" wire:model="projectName" />
            </p>

            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button primary label="I Agree" wire:click="editProject" />
                </div>
            </x-slot>
        </x-card>
    </x-modal>
</div>
