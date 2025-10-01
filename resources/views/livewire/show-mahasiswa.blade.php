<div>
    @forelse ($data as $item)
        <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
            <span class="font-medium">NRP: {{ $item->nrp }}</span><br>
            <span class="font-medium">Nama: {{ $item->nama }}</span><br>
            <span class="font-medium">Email: {{ $item->email }}</span><br>
            <span class="font-medium">Jurusan: {{ $item->jurusan }}</span>
        </div>
    @empty
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert"></div>
            <span class="font-medium">Data Mahasiswa Tidak Ditemukan!</span>
        </div>
    @endforelse
    <div class="mt-4">
        {{ $data->links() }}
    </div>
</div>
