<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="h-screen w-screen">
        <div class="h-full w-full p-10 ">
            <div class="flex justify-center bg-slate-100 rounded-xl  w-full h-full">
                <div class="w-full h-full flex justify-center">
                    <div class="flex flex-col h-full w-full">
                        <div class="flex justify-center w-full">
                            <div
                                class="text-xs bg-slate-300 inline-block mt-5 p-2 rounded-xl bg-opacity-70 sm:text-sm md:text-xl lg:text-2xl xl:text-3xl font-semibold">
                                E-SPMI
                            </div>
                        </div>
                        <div class="h-full  items-center flex justify-center mt-2 w-full">
                            <form class="" action="{{ route('login.proccess') }}" method="POST"
                                class="flex flex-col">
                                @csrf
                                <div class="my-2">
                                    <x-input-form placeholder="Username" />
                                </div>
                                <div>
                                    <x-input-form placeholder="Password" />
                                </div>
                                <div class="">
                                    <button class="w-full bg-slate-200 mt-2 bg-opacity-80 rounded-xl">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
