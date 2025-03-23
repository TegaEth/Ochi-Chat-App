<div
x-data="{type:'all'}"
class="flex flex-col transition-all h-full overflow-hidden>
    <header class="px-3 z-10 bg-white sticky top-0 w-full py-2">

        <div class="border-b justify-between flex items-center pb-2">

            <div class="flex items-center gap-2">
                 <h5 class="font-extrabold text-2xl text-black">Chats</h5>
            </div>

             <button>

                <svg class="w-7 h-7 fill-black"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                  </svg>

             </button>

        </div>

        {{-- Filters --}}

        <div class="flex gap-3 items-center overflow-x-scroll p-2 bg-white">

            <button @click="type='all'" :class="{'bg-blue-100 border-0 text-black':type=='all'}" class="text-gray-800 inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1  lg:py-2.5 border ">
                All
            </button>
            <button @click="type='deleted'" :class="{'bg-blue-100 border-0 text-black':type=='deleted'}" class="text-gray-800 inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1  lg:py-2.5 border">
                Deleted
            </button>

        </div>

    </header>

   <main class=" overflow-y-scroll overflow-hidden grow  h-full relative " style="contain:content">
        <ul class="p-2 grid w-full spacey-y-2">
            <li class="py-3 hover:bg-gray-50 rounded-2xl  transition-colors duration-150 flex gap-4 relative w-full cursur-pointer px-2">
                <a href="#" class="shrink-0">
                    <x-avatar />
                </a>
                <aside class="grid grid-cols-12 w-full">
                    <a href="#" class="col-span-11 border-b pb-2 border-gray-200 relative overflow-hidden truncate leading-5 w-full flex-nowrap p-1">
                        {{-- name and date --}}

                        <div class="flex justify-between w-full items-center">
                            <h6 class="truncate font-medium tracking-wider text-gray-900">
                                Ochi Ojie
                            </h6>
                            <small class="text-gray-700">5d</small>
                        </div>

                        {{-- message body --}}

                        <div class="flex gap-x-2 items-center">
                            {{-- double tick --}}
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all fill-black" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0"/>
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708"/>
                                  </svg>
                            </span>
                            {{-- single tick --}}
                            {{-- <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                  </svg>
                            </span> --}}
                            <p class="grow truncate text-sm font-[100] text-black">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas ratione fuga voluptatibus qui quibusdam tempore harum aliquid perspiciatis esse, delectus expedita obcaecati quia veniam repudiandae odio porro doloribus, magnam earum!
                            </p>

                            {{-- unread count --}}
                            <span class="font-bold p-px px-2 text-xs shrink-0 rounded-full bg-blue-500 text-white">
                                5
                             </span>
                        </div>
                    </a>

                    {{-- dropdown --}}
                    <div class="col-span-1 flex flex-col text-center my-auto bg-white">
                        <flux:dropdown>
                            <flux:button icon="ellipsis-vertical" />
                            <flux:menu>
                                <flux:menu.item icon="eye">View Profile</flux:menu.item>
                                <flux:menu.item variant="danger" icon="trash">Delete Chat</flux:menu.item>
                            </flux:menu>
                        </flux:dropdown>
                    </div>
                </aside>
            </li>
        </ul>
   </main>
</div>