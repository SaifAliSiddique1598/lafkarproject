@extends('frontend.layouts.master')
@section('title', 'Support')
@section('css')

@endsection
@section('content')
    <!-- Sign Up SECTION -->
    <section class="px-3 py-4">
        <div class="">
            <h1 class="text-2xl mb-6 mt-2 font-bold uppercase text-secondary genHead">Support</h1>
        </div>
        <div class="">
            <form action="{{ route('frontend.support.store') }}" method="POST">
                @csrf
                 <div class="mb-4">
                    @auth
                        <label class="text-base font-bold uppercase" for="">Name</label>
                        <input type="text" name="name" required="" placeholder="Enter Name" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]" value="{{ auth()->check() ? auth()->user()->name : '' }}" {{ auth()->check() ? 'readonly' : '' }}>
                    @endauth
                    @guest 
                        <label class="text-base font-bold uppercase" for="">Name</label>
                        <input type="text" name="name" required="" placeholder="Enter Name" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @endguest
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>      
                <div class="mb-4">
                    @auth
                        <label class="text-base font-bold uppercase" for="">Email</label>
                        <input type="email" name="email" required="" placeholder="Enter Email" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]" value="{{ auth()->check() ? auth()->user()->email : '' }}" {{ auth()->check() ? 'readonly' : '' }}>
                    @endauth
                    @guest 
                        <label class="text-base font-bold uppercase" for="">Email</label>
                        <input type="email" name="email" required="" placeholder="Enter Email" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @endguest
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Subject</label>
                    <input type="text" name="subject" required="" placeholder="Enter Subject" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('subject')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                   <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Content</label>
                    <textarea name="content" placeholder="Enter Content" class="h-[150px] border border-textGray rounded-lg w-full px-3 mt-[4px] py-3"></textarea>
                    @error('content')
                        <span class="text-danger" >{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="w-full h-[50px] text-lg font-bold uppercase rounded-lg bg-primary text-white px-3 mb-4 ">Submit</button>
            </form>
        </div>
    </section>
@endsection
@section('script')
    <script>

    </script>
@endsection
