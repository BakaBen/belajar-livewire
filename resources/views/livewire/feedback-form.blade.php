<form wire:submit.prevent="submitFeedback">
    <div>
        <label for="name">Nama:</label>
        <input type="text" id="name" wire:model="name">
        @error('name') <span class="alert alert-danger">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" wire:model="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="feedback">Feedback:</label>
        <textarea id="feedback" wire:model="feedback"></textarea>
        @error('feedback') <span class="error">{{ $message }}</span> @enderror
    </div>

    <button type="submit">Kirim Feedback</button>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</form>