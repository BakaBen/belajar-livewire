<div class="container mx-auto p-6">
    <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg p-8">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Data Kontak</h2>
            <p class="text-gray-500 dark:text-gray-400 text-sm">Daftar pesan yang masuk melalui formulir kontak.</p>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400">Pesan</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400">Dikirim Pada</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                    @forelse($contacts as $contact)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-100">{{ $contact->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $contact->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ Str::limit($contact->message, 50) }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">{{ $contact->created_at->format('d F Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">Tidak ada data untuk ditampilkan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-6 px-6 py-4 border-t border-gray-100 dark:border-gray-700">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
</div>