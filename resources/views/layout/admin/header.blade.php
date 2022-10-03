<div id="mobile-menu"
     class="h-full md:h-auto text-gray-800 z-40 fixed duration-300 bg-gray-300 px-2 shadow-md md:static w-60 md:w-80 lg:w-80"
     @mouseenter="CollapsedHover()" @mouseleave="CollapsedHover()">
    <div class="font-bold text-xl h-16 pr-2 md:pr-0 flex relative z-50">
        <div class="flex transition-all ease-in-out duration-500" :class="collapsed ? 'w-full' : 'w-0'">
            <img class="h-14 mx-2 my-auto" :src="logo_ytcb" alt="">
            <img class="h-10 my-auto" :src="logo_hb" alt="">
        </div>
        <button @click="CloseBar()" type="button"
                class="transition-all bg-gray-700 shrink-0 -mr-3 w-10 h-10 text-white rounded-lg ease-in-out duration-500 z-50 m-auto -mr-5">
            <!-- Heroicon name: outline/x -->
            <i class="" :class="collapsed ? 'fa-solid fa-bars' : 'fa-solid fa-xmark'"></i>
        </button>
    </div>
    <div class="text-lg font-normal tracking-tight">
        <div class="py-5 px-1 py-2">
            <div class="py-0.5 my-2 rounded-xl overflow-hidden truncate">
                <a href="{{route('admin')}}">
                    <div class="hover:bg-gray-200 px-2 py-1.5 rounded-lg"
                         :class="livehref === dataurl['dashboard'] ? 'bg-gray-300' : 'bg-gray-100'">
                        <div class="flex w-52">
                            <div class="w-10">
                                <i class="fa-solid fa-gauge-high mr-3"></i>
                            </div>
                            <span>Dashboard</span>
                        </div>
                    </div>
                </a>
            </div>
            <div v-if="is_admin === 'true'" class="py-0.5 my-2 rounded-xl overflow-hidden truncate">
                <a href="{{route('admin.gallery')}}">
                    <div class="hover:bg-gray-200 px-2 py-1.5 rounded-lg">
                        <div class="flex w-52">
                            <div class="w-10">
                                <i class="fa-solid fa-images mr-3"></i>
                            </div>
                            <span>Gallery</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
