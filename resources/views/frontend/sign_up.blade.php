@extends('frontend.layouts.master')
@section('title', 'Sign up')
@section('css')

@endsection
@section('content')
    <!-- Sign Up SECTION -->
    <section class="px-3 py-4">
        <div class="">
            <h1 class="text-2xl mb-6 mt-2 font-bold uppercase text-secondary genHead">Sign up</h1>
        </div>
        <div class="">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Name</label>
                    <input type="text" name="name" required="" placeholder="Enter Name" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('name')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">CNIC</label>
                    <input type="text" name="cnic" required="" placeholder="Enter CNIC" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('cnic')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Account Title</label>
                    <input type="text" name="account_title" required="" placeholder="Enter Account Title" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('account_title')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Account Type</label>
                    <input type="text" name="account_type" required="" placeholder="Enter Account Type" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('account_type')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Account #</label>
                    <input type="text" name="account_numer" required="" placeholder="Enter Account Number" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('account_numer')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Contact #</label>
                    <input type="text" name="contact" required="" placeholder="Enter Contact Number" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('contact')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Email</label>
                    <input type="email" name="email" required="" placeholder="Enter Email" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('email')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Password</label>
                    <input type="password" name="password" required="" placeholder="Enter Password" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('password')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="w-full h-[50px] text-lg font-bold uppercase rounded-lg bg-primary text-white px-3 mb-4 ">Sign up</button>

                <div class="mb-4 text-center">
                    <h3>Already have account <a href="{{route('frontend.page', 'sign_in')}}" class="text-primary font-semibold">Sign in</a></h3>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('script')
    <script>

    </script>
@endsection
