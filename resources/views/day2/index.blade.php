@extends('layout.master')
@section('title', 'Home')
@section('content')
    <div @click="closeModal">
        <div class="overflow-hidden h-[52rem]">
            <div class="overflow-hidden w-screen transform -rotate-3 mt-20">
                <div class="flex -translate-x-10 h-80 w-full mb-5">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                </div>
                <div class="flex h-80 w-full">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                    <img src="" class="mx-3 h-80 w-60 bg-white rounded-2xl">
                </div>
            </div>
        </div>
        <div>
            <h1 class="text-5xl text-center text-yellow-500 font-bold">Kids Preneurship</h1>
            <div class="px-20 text-white text-center font-semibold text-lg mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Nunc dui leo, tempus id quam a, tempus placerat nisl. Aenean posuere felis eu faucibus imperdiet.
                Proin pellentesque consectetur convallis. Sed eleifend enim at ante placerat aliquet. Donec mollis lacus
                lacus, ultricies imperdiet arcu ullamcorper ut. Aliquam ornare posuere rutrum. Nam vitae lorem arcu. Sed
                vel odio sed ex suscipit lacinia. Vestibulum suscipit odio eu elit semper consequat quis in libero.
                Mauris commodo nibh a vehicula lacinia. Sed purus erat, auctor id sollicitudin et, congue accumsan sem.
                Sed purus nunc, viverra sed augue id, finibus convallis felis. Praesent nisl arcu, scelerisque at
                laoreet vitae, consequat ac quam.
            </div>
        </div>
        <div class="my-40 overflow-hidden flex relative">
            <div class="absolute w-full h-full flex justify-between px-3">
                <button @click="prevCarousel" class="my-auto w-10 h-10 bg-gray-400/50 rounded-xl backdrop-blur-sm">
                    <FontAwesomeIcon icon="fa-solid fa-angle-left"/>
                </button>
                <button @click="nextCarousel" class="my-auto w-10 h-10 bg-gray-400/50 rounded-xl backdrop-blur-sm">
                    <FontAwesomeIcon icon="fa-solid fa-angle-right"/>
                </button>
            </div>
        </div>
        <div class="w-full h-full">
            <div class="flex"><span class="m-auto grid grid-cols-4 gap-5"><div
                        class="bg-white rounded-lg h-28 w-28"><img
                            class="object-cover rounded-lg object-top h-full w-full"
                            src="https://raw.githubusercontent.com/younixue3/stock_photo_rdev/main/you-can-call-me-a-tech-user.jpg"></div><div
                        class="bg-white rounded-lg h-28 w-28"><img
                            class="object-cover rounded-lg object-top h-full w-full"
                            src="https://raw.githubusercontent.com/younixue3/stock_photo_rdev/main/wanna-say-something_-say-it-now.jpg"></div><div
                        class="bg-white rounded-lg h-28 w-28"><img
                            class="object-cover rounded-lg object-top h-full w-full"
                            src="https://raw.githubusercontent.com/younixue3/stock_photo_rdev/main/self-confident-young-man.jpg"></div><div
                        class="bg-white rounded-lg h-28 w-28"><img
                            class="object-cover rounded-lg object-top h-full w-full"
                            src="https://raw.githubusercontent.com/younixue3/stock_photo_rdev/main/JaneDoe.webp"></div></span>
            </div>
            <div class="flex my-10">
                <div class="m-auto bg-white rounded-lg w-[60rem] h-96 grid grid-cols-3 p-5">
                    <div class="flex"><img class="object-cover m-auto h-80 w-80 rounded-lg"
                                           src="https://raw.githubusercontent.com/younixue3/stock_photo_rdev/main/you-can-call-me-a-tech-user.jpg">
                    </div>
                    <div class="col-span-2 pl-10"><h3 class="text-3xl font-bold text-start">Jane Doe</h3>
                        <p class="my-5 text-start">lorem ipsum dolor sit amet, lorem ipsum dolor sit amet, lorem ipsum
                            dolor sit amet, lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit
                            amet, lorem ipsum dolor sit amet</p>
                        <div class="flex">
                            <button class="bg-gray-100 mx-2 w-10 h-10 text-lg">
                            </button>
                            <button class="bg-gray-100 mx-2 w-10 h-10 text-lg">
                            </button>
                            <button class="bg-gray-100 mx-2 w-10 h-10 text-xs">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-100 flex w-full relative my-32">
            <div class="grid grid-cols-4 w-full justify-items-center py-10 gap-20">
                <div class="w-40 h-40 p-9 flex bg-white rounded-2xl transform rotate-12"><img class="m-auto bg-white"
                                                                                              src="https://www.salesforceben.com/wp-content/uploads/2021/03/google-logo-icon-PNG-Transparent-Background-2048x2048.png">
                </div>
                <div class="w-40 h-40 p-9 flex bg-white rounded-2xl transform -rotate-45 scale-75"><img
                        class="m-auto bg-white"
                        src="https://th.bing.com/th/id/R.3d6a2ad56bc3403c5cfcc3efe09b741b?rik=gnNKMMZSvZ3uMA&amp;riu=http%3a%2f%2fpurepng.com%2fpublic%2fuploads%2flarge%2fpurepng.com-microsoft-logo-iconlogobrand-logoiconslogos-251519939091wmudn.png&amp;ehk=1%2fl4i5MeDLTCpvZhUZlCefvhSzsGR16HIPqagpDxYDg%3d&amp;risl=&amp;pid=ImgRaw&amp;r=0">
                </div>
                <div
                    class="w-40 h-40 p-9 flex bg-white rounded-2xl transform -rotate-12 scale-125 mt-5 justify-self-end">
                    <img class="m-auto bg-white" src="https://1000logos.net/wp-content/uploads/2021/10/logo-Meta.png">
                </div>
                <div class="w-40 h-40 p-9 flex bg-white rounded-2xl transform -rotate-12 scale-75 -rotate-12 scale-75">
                    <img class="m-auto bg-white" src="https://avatars.githubusercontent.com/u/29785210?s=200&amp;v=4">
                </div>
                <div class="w-40 h-40 p-9 flex bg-white rounded-2xl transform -rotate-12"><img class="m-auto bg-white"
                                                                                               src="https://www.freepnglogos.com/uploads/tesla-logo-png-27.png">
                </div>
                <div class="w-40 h-40 p-9 flex bg-white rounded-2xl transform col-start-4 rotate-12 scale-75"><img
                        class="m-auto bg-white"
                        src="https://download.logo.wine/logo/Amazon_Web_Services/Amazon_Web_Services-Logo.wine.png">
                </div>
            </div>
            <div class="absolute w-full h-full flex text-center">
                <div class="m-auto">
                    <h3 class="font-bold text-4xl">Supported by</h3>
                    <h1 class="font-bold text-6xl">
                        Excellent Company
                    </h1>
                </div>
            </div>
        </div>
    </div>
@endsection
