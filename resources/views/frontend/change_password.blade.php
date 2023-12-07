@extends('frontend.layouts.master')
@section('title', 'Change Password')
@section('css')

@endsection
@section('content')
    <!-- Change Password SECTION -->
    <section class="px-3 py-4">
        <div class="">
            <h1 class="text-2xl mb-6 mt-2 font-bold uppercase text-secondary genHead">Change Password</h1>
        </div>
        <div class="">
           <form action="{{ route('frontend.update-password') }}" method="POST">
            @csrf
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="current_password">Current Password</label>
                    <input type="password" name="current_password" placeholder="Enter Current Password" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('current_password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="password">New Password</label>
                    <input type="password" name="password" placeholder="Enter New Password" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="password_confirmation">Confirm New Password</label>
                    <input type="password" name="password_confirmation" placeholder="Confirm New Password" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <button class="w-full h-[50px] text-lg font-bold uppercase rounded-lg bg-primary text-white px-3 mb-4">Update</button>
            </form>
        </div>
    </section>
@endsection
@section('script')
    <script>

    </script>
@endsection
