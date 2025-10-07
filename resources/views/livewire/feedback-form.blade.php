 <div class="container mx-auto p-6">
    <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg p-8 max-w-md mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Form Feedback</h2>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Silahkan isi form feedback dibawah ini</p>
        </div>


        <!-- Form Section -->
        <form wire:submit.prevent="submitFeedback" class="space-y-4">
            <div class="relative">
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
                    </svg>
                </div>
                <input type="text" id="name" wire:model="name" 
                    placeholder="Masukkan nama anda"
                    class="pl-10 w-full py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-orange-500 focus:ring-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
                @error('name')
                    <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>


            <div class="relative">
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                </div>
                <input type="email" id="email" wire:model="email" 
                    placeholder="Masukkan email anda"
                    class="pl-10 w-full py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-orange-500 focus:ring-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500">
                @error('email')
                    <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>


            <div class="relative">
                <div class="absolute top-3 left-3 flex items-start pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                </div>
                <textarea id="feedback" wire:model="feedback" rows="4" 
                    placeholder="Masukkan feedback anda"
                    class="pl-10 w-full py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-orange-500 focus:ring-orange-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500"></textarea>
                @error('feedback')
                    <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" 
                class="w-full py-3 px-4 bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-xl transition duration-200">
                Kirim Feedback
            </button>
        </form>


        @if (session()->has('message'))
            <div class="mt-4 p-4 rounded-md bg-green-50 text-green-800 text-center dark:bg-green-900 dark:text-green-100">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
