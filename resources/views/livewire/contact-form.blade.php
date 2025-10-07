<div class="container mx-auto p-6">
    <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg p-8">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Hubungi Kami</h2>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Silakan isi formulir di bawah ini untuk menghubungi kami.</p>
        </div>

        <form wire:submit.prevent="save">
            @if ($successMessage)
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ $successMessage }}</span>
                </div>
            @endif

            <div class="mb-4">
                <label for="name" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Nama</label>
                <input type="text" id="name" wire:model.defer="name"
                    class="w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-orange-500 focus:ring-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" wire:model.defer="email"
                    class="w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-orange-500 focus:ring-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="message" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Pesan</label>
                <textarea id="message" wire:model.defer="message" rows="4"
                    class="w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-orange-500 focus:ring-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500"></textarea>
                @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-xl focus:outline-none focus:shadow-outline transition-colors duration-200">
                    Kirim Pesan
                </button>
            </div>
        </form>
    </div>
</div>
