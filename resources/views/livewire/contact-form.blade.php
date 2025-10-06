<div>
    <form wire:submit.prevent="save">
        @if ($successMessage)
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
                {{ $successMessage }}
            </div>
        @endif

        <div style="margin-bottom: 15px;">
            <label for="name">Nama</label>
            <input type="text" id="name" wire:model.defer="name" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('name') <span style="color: #dc3545;">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label for="email">Email</label>
            <input type="email" id="email" wire:model.defer="email" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            @error('email') <span style="color: #dc3545;">{{ $message }}</span> @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label for="message">Pesan</label>
            <textarea id="message" wire:model.defer="message" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;" rows="4"></textarea>
            @error('message') <span style="color: #dc3545;">{{ $message }}</span> @enderror
        </div>

        <div>
            <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
                Kirim
            </button>
        </div>
    </form>
</div>