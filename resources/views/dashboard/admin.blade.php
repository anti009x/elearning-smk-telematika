<style>
    a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-left: 0.5rem;
    }
</style>

<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <svg class="fill-current float-left" style="width:39px;" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path d= />
                </svg>
                <span class="text-4xl">{{ sprintf('%02d', count($students)) }}</span>
                <a>Siswa</a>
            </h3>
        </div>

        <div class="w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 mx-0 sm:mx-6 my-4 sm:my-0 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <svg class="fill-current float-left" style="width:39px;" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path d= />
                </svg>
                <span class="text-4xl">{{ sprintf('%02d', count($teachers)) }}</span>
                <a>Guru</a>
            </h3>
        </div>
        <div class="w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <svg class="fill-current float-left" style="width:39px;" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path d= />
                </svg>
                <span class="text-4xl">{{ sprintf('%02d', count($parents)) }}</span>
                <a>Orang Tua</a>
            </h3>
        </div>

    </div>
</div>

<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <svg class="fill-current float-left" style="width:39px;" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path d= />
                </svg>
                <span class="text-4xl">{{ sprintf('%02d', count($subjects)) }}</span>
                <span class="leading-tight">Subjek</span>
            </h3>
        </div>
        <div class="w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 mx-0 sm:mx-6 my-4 sm:my-0 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <svg class="fill-current float-left" style="width:39px;" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <path d= />
                </svg>
                <span class="text-4xl">{{ sprintf('%02d', count($classes)) }}</span>
                <a>Kelas</a>
            </h3>
        </div>

    </div>
</div>
