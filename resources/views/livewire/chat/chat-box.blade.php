<div>
    {{-- header --}}
    <header class="w-full sticky inset-x-0 flex pb-[5px] pt-[5px] top-0 z-0 bg-white border-b">
        <div class="flex w-full items-center px-2 lg:px-4 gap-2 md:gap-5">
            <a href="#" class="shrink-0 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg> 
            </a>

            {{-- avatar --}}
            
            <div class="shrink-0">
                <x-avatar class="h-9 w-9 lg:w-11 lg:h-11 "/>
            </div>

            <h6 class="font-bold truncate text-black sm:text-black">{{ fake()->name() }}</h6>

        </div>
    </header>

    {{-- body  --}}
    <main class="flex flex-col gap-3 p-2.5 overflow-y-auto  flex-grow overscroll-contain overflow-x-hidden w-full my-auto">
        <div>
            
        </div>
    </main>

    {{-- footer --}}
</div>
