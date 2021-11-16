<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <!-- component -->
    @if (session('laporan'))
    <div class="bg-green-500 p-3 text-white rounded-md my-3">
        {{ session('laporan') }}
    </div>
    @endif

    <table class="min-w-full border-collapse block md:table">
        <thead class="block md:table-header-group">
            <tr
                class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Id Laporan</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Judul laporan</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Tanggal laporan</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Status</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Aksi</th>
            </tr>
        </thead>
        <tbody class="block md:table-row-group">
            <?php $no = 1; ?>
            @foreach ($laporan as $lp)
            <tr
                class="@if($no % 2 == 1)bg-gray-800 @else bg-gray-500 text-white @endif border border-grey-500 md:border-none block md:table-row">
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                        class="inline-block w-1/3 md:hidden font-bold">Id laporan</span>{{ $lp->id_laporan }}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                        class="inline-block w-1/3 md:hidden font-bold">Judul laporan</span>{{ $lp->judul_laporan }}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                        class="inline-block w-1/3 md:hidden font-bold">Tanggal Laporan</span>{{ $lp->tanggal_dibuat }}
                </td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span
                        class="inline-block w-1/3 md:hidden font-bold">Status</span>{{ $lp->status }}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                    <span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
                    <a href="{{ url('/dashboard/edit-laporan/'. $lp->slug) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</a>
                    <a href="{{ url('/dashboard/delete-laporan/' . $lp->slug) }}"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded"
                        onclick="return confirm('apakah kamu yakin ingin menghapus laporan ini?')">Delete</a>
                </td>
            </tr>
            <?php $no++; ?>
            @endforeach
        </tbody>
    </table>
</div>
