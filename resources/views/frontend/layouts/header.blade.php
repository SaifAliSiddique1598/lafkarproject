<header>
    <div class="bg-bgGray py-4 px-3 fixed z-20 w-full max-w-[786px]">
        <div class="grid grid-cols-12 gap-x-4">
            <div class="col-span-4">
                <div class="flex gap-x-4 justify-start items-center">
                    <div class="" id="menuIcon">
                        <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z"></path>
                        </svg>
                    </div>
                    <div>
                        <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM6 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001ZM8 15.0001H16V17.0001H8V15.0001Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <a href="{{route('frontend.page', '/')}}">
                    <div class="text-2xl font-bold uppercase text-center">
                        Lafkar
                    </div>
                </a>
            </div>
            <div class="col-span-4">
                <div class="flex gap-x-4 justify-end items-center">
                    <div class="">
                        <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path d="M22 17.0022C21.999 19.8731 19.9816 22.2726 17.2872 22.8616L16.6492 20.9476C17.8532 20.7511 18.8765 20.0171 19.4649 19H17C15.8954 19 15 18.1046 15 17V13C15 11.8954 15.8954 11 17 11H19.9381C19.446 7.05369 16.0796 4 12 4C7.92038 4 4.55399 7.05369 4.06189 11H7C8.10457 11 9 11.8954 9 13V17C9 18.1046 8.10457 19 7 19H4C2.89543 19 2 18.1046 2 17V12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12V12.9987V13V17V17.0013V17.0022ZM20 17V13H17V17H20ZM4 13V17H7V13H4Z"></path>
                        </svg>
                    </div>
                    <div>
                        <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path d="M20 17H22V19H2V17H4V10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10V17ZM18 17V10C18 6.68629 15.3137 4 12 4C8.68629 4 6 6.68629 6 10V17H18ZM9 21H15V23H9V21Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menuBx bg-white fixed top-[65px] left-0 w-full h-full p-4 z-10" id="menuBx">
        <ul class="pt-4">
            <li class="border-b border-grayText">
                <a href="{{route('frontend.page', '/')}}" class=""><div class="text-lg uppercase font-semibold hover:text-primary py-[12px]">Home</div></a>
            </li>
            <li class="border-b border-grayText">
                <a href="{{ route('frontend.page', 'company-profile') }}" class=""><div class="text-lg uppercase font-semibold hover:text-primary py-[12px]">Company Profile</div></a>
            </li>
            <li class="border-b border-grayText">
                <a href="{{ route('frontend.page', 'lafkar-welfare') }}" class=""><div class="text-lg uppercase font-semibold hover:text-primary py-[12px]">Lafkar Welfare</div></a>
            </li>
            <li class="border-b border-grayText">
                <a href="{{ route('frontend.page', 'job-onboard') }}" class=""><div class="text-lg uppercase font-semibold hover:text-primary py-[12px]">Jobs Onboard</div></a>
            </li>
            <li class="border-b border-grayText">
                <a href="{{ route('frontend.page', 'support') }}" class=""><div class="text-lg uppercase font-semibold hover:text-primary py-[12px]">Support</div></a>
            </li>
            <li class="border-b border-grayText">
                <a href="{{ route('frontend.page', 'term-condition') }}" class=""><div class="text-lg uppercase font-semibold hover:text-primary py-[12px]">Terms and Conditions</div></a>
            </li>
            <li class="border-b border-grayText">
                <a href="{{ route('frontend.page', 'privacy-policy') }}" class=""><div class="text-lg uppercase font-semibold hover:text-primary py-[12px]">Privacy Policy</div></a>
            </li>
            @auth
                <li class="border-b border-grayText">
                    <a href="{{ route('frontend.page', 'change_password') }}" class="">
                        <div class="text-lg uppercase font-semibold hover:text-primary py-[12px]">Change Password</div>
                    </a>
                </li>
            @endauth
            @guest 
            <li class="border-b border-grayText">
                <a href="{{ route('frontend.page', 'sign_in') }}" class="">
                    <div class="text-lg uppercase font-semibold hover:text-primary py-[12px]">Sign in</div>
                </a>
            </li>
             @endguest
             @guest 
            <li class="border-b border-grayText">
                <a href="{{ route('frontend.page', 'sign_up') }}" class="">
                    <div class="text-lg uppercase font-semibold hover:text-primary py-[12px]">Sign up</div>
                </a>
            </li>
             @endguest
            <li class="border-b border-grayText" id="closeMenu">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="text-lg uppercase font-semibold hover:text-primary py-[12px]">Exit</div>
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
        <div class="flex flex-wrap gap-4 mt-4">
            <div class="" >
                <a href="https://www.facebook.com/" target="_blank">
                    <div class="bg-primary w-[45px] h-[45px] flex justify-center items-center rounded-full">
                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                            <path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="">
                <a href="#" target="_blank">
                    <div class="bg-primary w-[45px] h-[45px] flex justify-center items-center rounded-full">
                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M12.2439 4C12.778 4.00294 14.1143 4.01586 15.5341 4.07273L16.0375 4.09468C17.467 4.16236 18.8953 4.27798 19.6037 4.4755C20.5486 4.74095 21.2913 5.5155 21.5423 6.49732C21.942 8.05641 21.992 11.0994 21.9982 11.8358L21.9991 11.9884L21.9991 11.9991C21.9991 11.9991 21.9991 12.0028 21.9991 12.0099L21.9982 12.1625C21.992 12.8989 21.942 15.9419 21.5423 17.501C21.2878 18.4864 20.5451 19.261 19.6037 19.5228C18.8953 19.7203 17.467 19.8359 16.0375 19.9036L15.5341 19.9255C14.1143 19.9824 12.778 19.9953 12.2439 19.9983L12.0095 19.9991L11.9991 19.9991C11.9991 19.9991 11.9956 19.9991 11.9887 19.9991L11.7545 19.9983C10.6241 19.9921 5.89772 19.941 4.39451 19.5228C3.4496 19.2573 2.70692 18.4828 2.45587 17.501C2.0562 15.9419 2.00624 12.8989 2 12.1625V11.8358C2.00624 11.0994 2.0562 8.05641 2.45587 6.49732C2.7104 5.51186 3.45308 4.73732 4.39451 4.4755C5.89772 4.05723 10.6241 4.00622 11.7545 4H12.2439ZM9.99911 8.49914V15.4991L15.9991 11.9991L9.99911 8.49914Z"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="">
                <a href="#" target="_blank">
                    <div class="bg-primary w-[45px] h-[45px] flex justify-center items-center rounded-full">
                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M18.2048 2.25H21.5128L14.2858 10.51L22.7878 21.75H16.1308L10.9168 14.933L4.95084 21.75H1.64084L9.37084 12.915L1.21484 2.25H8.04084L12.7538 8.481L18.2048 2.25ZM17.0438 19.77H18.8768L7.04484 4.126H5.07784L17.0438 19.77Z"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="">
                <a href="#" target="_blank">
                    <div class="bg-primary w-[45px] h-[45px] flex justify-center items-center rounded-full">
                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M13.0281 2.00098C14.1535 2.00284 14.7238 2.00879 15.2166 2.02346L15.4107 2.02981C15.6349 2.03778 15.8561 2.04778 16.1228 2.06028C17.1869 2.10944 17.9128 2.27778 18.5503 2.52528C19.2094 2.77944 19.7661 3.12278 20.3219 3.67861C20.8769 4.23444 21.2203 4.79278 21.4753 5.45028C21.7219 6.08694 21.8903 6.81361 21.9403 7.87778C21.9522 8.14444 21.9618 8.36564 21.9697 8.58989L21.976 8.78397C21.9906 9.27672 21.9973 9.8471 21.9994 10.9725L22.0002 11.7182C22.0003 11.8093 22.0003 11.9033 22.0003 12.0003L22.0002 12.2824L21.9996 13.0281C21.9977 14.1535 21.9918 14.7238 21.9771 15.2166L21.9707 15.4107C21.9628 15.6349 21.9528 15.8561 21.9403 16.1228C21.8911 17.1869 21.7219 17.9128 21.4753 18.5503C21.2211 19.2094 20.8769 19.7661 20.3219 20.3219C19.7661 20.8769 19.2069 21.2203 18.5503 21.4753C17.9128 21.7219 17.1869 21.8903 16.1228 21.9403C15.8561 21.9522 15.6349 21.9618 15.4107 21.9697L15.2166 21.976C14.7238 21.9906 14.1535 21.9973 13.0281 21.9994L12.2824 22.0002C12.1913 22.0003 12.0973 22.0003 12.0003 22.0003L11.7182 22.0002L10.9725 21.9996C9.8471 21.9977 9.27672 21.9918 8.78397 21.9771L8.58989 21.9707C8.36564 21.9628 8.14444 21.9528 7.87778 21.9403C6.81361 21.8911 6.08861 21.7219 5.45028 21.4753C4.79194 21.2211 4.23444 20.8769 3.67861 20.3219C3.12278 19.7661 2.78028 19.2069 2.52528 18.5503C2.27778 17.9128 2.11028 17.1869 2.06028 16.1228C2.0484 15.8561 2.03871 15.6349 2.03086 15.4107L2.02457 15.2166C2.00994 14.7238 2.00327 14.1535 2.00111 13.0281L2.00098 10.9725C2.00284 9.8471 2.00879 9.27672 2.02346 8.78397L2.02981 8.58989C2.03778 8.36564 2.04778 8.14444 2.06028 7.87778C2.10944 6.81278 2.27778 6.08778 2.52528 5.45028C2.77944 4.79194 3.12278 4.23444 3.67861 3.67861C4.23444 3.12278 4.79278 2.78028 5.45028 2.52528C6.08778 2.27778 6.81278 2.11028 7.87778 2.06028C8.14444 2.0484 8.36564 2.03871 8.58989 2.03086L8.78397 2.02457C9.27672 2.00994 9.8471 2.00327 10.9725 2.00111L13.0281 2.00098ZM12.0003 7.00028C9.23738 7.00028 7.00028 9.23981 7.00028 12.0003C7.00028 14.7632 9.23981 17.0003 12.0003 17.0003C14.7632 17.0003 17.0003 14.7607 17.0003 12.0003C17.0003 9.23738 14.7607 7.00028 12.0003 7.00028ZM12.0003 9.00028C13.6572 9.00028 15.0003 10.3429 15.0003 12.0003C15.0003 13.6572 13.6576 15.0003 12.0003 15.0003C10.3434 15.0003 9.00028 13.6576 9.00028 12.0003C9.00028 10.3434 10.3429 9.00028 12.0003 9.00028ZM17.2503 5.50028C16.561 5.50028 16.0003 6.06018 16.0003 6.74943C16.0003 7.43867 16.5602 7.99944 17.2503 7.99944C17.9395 7.99944 18.5003 7.43954 18.5003 6.74943C18.5003 6.06018 17.9386 5.49941 17.2503 5.50028Z"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="">
                <a href="#" target="_blank">
                    <div class="bg-primary w-[45px] h-[45px] flex justify-center items-center rounded-full">
                        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M16 8.24537V15.5C16 19.0899 13.0899 22 9.5 22C5.91015 22 3 19.0899 3 15.5C3 11.9101 5.91015 9 9.5 9C10.0163 9 10.5185 9.06019 11 9.17393V12.3368C10.5454 12.1208 10.0368 12 9.5 12C7.567 12 6 13.567 6 15.5C6 17.433 7.567 19 9.5 19C11.433 19 13 17.433 13 15.5V2H16C16 4.76142 18.2386 7 21 7V10C19.1081 10 17.3696 9.34328 16 8.24537Z"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="h-[65px]"></div>
</header>
