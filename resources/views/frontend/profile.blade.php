@extends('frontend.layouts.master')
@section('title', 'Profile')
@section('css')

@endsection
@section('content')
    <!-- PROFILE SECTION -->
    <section class="px-5 py-4">
        <div class="flex justify-between items-center">
    <div class="">
        <h1 class="text-2xl mb-6 mt-2 font-bold uppercase text-secondary genHead">Profile</h1>
    </div>
    <div class="">
        <a href="{{ route('frontend.page', 'profile-edit') }}">
       <svg id="SvgjsSvg1065" width="40" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1066"></defs><g id="SvgjsG1067"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40"><path d="M18.2 24H3.8C1.7 24 0 22.3 0 20.2V5.8C0 3.7 1.7 2 3.8 2H11c.6 0 1 .4 1 1s-.4 1-1 1H3.8C2.8 4 2 4.8 2 5.8v14.3c0 1 .8 1.8 1.8 1.8h14.3c1 0 1.8-.8 1.8-1.8V13c0-.6.4-1 1-1s1 .4 1 1v7.2c.1 2.1-1.6 3.8-3.7 3.8z" fill="#d45e07" class="color000 svgShape"></path><path d="M6 19c-.3 0-.5-.1-.7-.3-.2-.2-.3-.6-.3-.9l1-5c0-.2.1-.4.3-.5l12-12c.4-.4 1-.4 1.4 0l4 4c.4.4.4 1 0 1.4l-12 12c-.1.1-.3.2-.5.3l-5 1H6zm1.9-5.5l-.6 3.2 3.2-.6L21.6 5 19 2.4 7.9 13.5z" fill="#d45e07" class="color000 svgShape"></path></svg></g></svg>
       </a>
    </div>
</div>

        <div class="rounded-lg py-4 px-6 mb-6 orangeGred">
            <div class="flex flex-col justify-between h-[180px]">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-3xl font-semibold text-white">30,0000</h2>
                        <h3 class="text-base font-normal text-white">Total Cash</h3>
                    </div>
                    <div>
                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                            <path d="M18.0049 7H21.0049C21.5572 7 22.0049 7.44772 22.0049 8V20C22.0049 20.5523 21.5572 21 21.0049 21H3.00488C2.4526 21 2.00488 20.5523 2.00488 20V4C2.00488 3.44772 2.4526 3 3.00488 3H18.0049V7ZM4.00488 9V19H20.0049V9H4.00488ZM4.00488 5V7H16.0049V5H4.00488ZM15.0049 13H18.0049V15H15.0049V13Z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h6 class="text-lg font-medium text-white">0000 <span class="px-3">0000</span> 0000 <span class="px-3">0000</span></h6>
                </div>
                <div class="border-t border-white">
                    <h4 class="text-lg font-semibold text-white pt-[8px]">{{ $user->name }}</h4>
                </div>
            </div>
        </div>
        <div class="">
            <div class="flex items-center mb-4">
                <div class="w-[20px] h-[60px] bg-primary fancyBorder rounded-md"></div>
                <div class="border border-primary py-2 curveClip w-[95%] ms-[-14px] mt-[4px] rounded-md">
                    <h2><span class="font-bold ps-6 text-">Designation:</span> {{ $user->designation }}</h2>
                </div>
            </div>
            <div class="flex items-center mb-4">
                <div class="w-[20px] h-[60px] bg-primary fancyBorder rounded-md"></div>
                <div class="border border-primary py-2 curveClip w-[95%] ms-[-14px] mt-[4px] rounded-md">
                    <h2><span class="font-bold ps-6 text-">Email:</span> {{ $user->email }}</h2>
                </div>
            </div>
            <div class="flex items-center mb-4">
                <div class="w-[20px] h-[60px] bg-primary fancyBorder rounded-md"></div>
                <div class="border border-primary py-2 curveClip w-[95%] ms-[-14px] mt-[4px] rounded-md">
                    <h2><span class="font-bold ps-6 text-">Trader Id:</span> {{ $user->trade_id }}</h2>
                </div>
            </div>
            <div class="flex items-center mb-4">
                <div class="w-[20px] h-[60px] bg-primary fancyBorder rounded-md"></div>
                <div class="border border-primary py-2 curveClip w-[95%] ms-[-14px] mt-[4px] rounded-md">
                    <h2><span class="font-bold ps-6 text-">Account Title:</span>{{ $user->account_title }}</h2>
                </div>
            </div>
            <div class="flex items-center mb-4">
                <div class="w-[20px] h-[60px] bg-primary fancyBorder rounded-md"></div>
                <div class="border border-primary py-2 curveClip w-[95%] ms-[-14px] mt-[4px] rounded-md">
                    <h2><span class="font-bold ps-6 text-">Account Type:</span> {{ $user->account_type }}</h2>
                </div>
            </div>
            <div class="flex items-center mb-4">
                <div class="w-[20px] h-[60px] bg-primary fancyBorder rounded-md"></div>
                <div class="border border-primary py-2 curveClip w-[95%] ms-[-14px] mt-[4px] rounded-md">
                    <h2><span class="font-bold ps-6 text-">Acc #:</span>{{ $user->account_number }}</h2>
                </div>
            </div>
            <div class="flex items-center mb-4">
                <div class="w-[20px] h-[60px] bg-primary fancyBorder rounded-md"></div>
                <div class="border border-primary py-2 curveClip w-[95%] ms-[-14px] mt-[4px] rounded-md">
                    <h2><span class="font-bold ps-6 text-">Contact:</span>{{ $user->contact }}</h2>
                </div>
            </div>
            <button class="w-full h-[50px] text-lg font-bold uppercase rounded-lg bg-primary text-white px-3 mb-4 ">Withdraw</button>
        </div>
    </section>
@endsection
@section('script')
    <script>

    </script>
@endsection
