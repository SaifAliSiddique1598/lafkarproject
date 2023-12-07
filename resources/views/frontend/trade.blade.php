@extends('frontend.layouts.master')
@section('title', 'Trade')
@section('css')

@endsection
@section('content')
    <!-- PORTFOLIO SECTION -->
    <section class="px-3 py-4 portFolioMain">
        <div class="">
            <h1 class="text-2xl mb-6 mt-2 font-bold uppercase text-secondary genHead">Trade</h1>
        </div>
        <div class="">
             <form action="{{ route('frontend.trade.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Customer Name</label>
                    <input type="text" name="name" placeholder="Enter Customer Name" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
               <div class="mb-4">
                    <label class="text-base font-bold uppercase">Number One</label>
                    <input type="text" name="numbers[]" placeholder="Enter Number One" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase">Number Two</label>
                    <input type="text" name="numbers[]" placeholder="Enter Number Two" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Item Code</label>
                    <input type="text" name="item_code" placeholder="Enter Item Code as per Catalog" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Booking Price</label>
                    <input type="text" name="booking_price" placeholder="Enter Booking Price" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Address</label>
                    <textarea name="address" placeholder="Enter Complete Address" class="h-[150px] border border-textGray rounded-lg w-full px-3 mt-[4px] py-3"></textarea>
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Special Note</label>
                    <textarea name="special_note" placeholder="Enter Special Note" class="h-[150px] border border-textGray rounded-lg w-full px-3 mt-[4px] py-3"></textarea>
                </div>
                <button type="submit" class="w-full h-[50px] text-lg font-bold uppercase rounded-lg bg-primary text-white px-3 mb-4 ">Trade Now</button>
            </form>
        </div>
    </section>
@endsection
@section('script')
    <script>

    </script>
@endsection
