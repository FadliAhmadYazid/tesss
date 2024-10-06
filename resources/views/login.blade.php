<!DOCTYPE html>
<html>

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('nav')

    <div class="bg-[#FFFFFF] w-[1440px] box-sizing-border flex justify-center items-center h-screen">
        <form action="/login" method="post" class="flex flex-col items-center" style="position: absolute; top: 230px; left:200px; transform: scale(1.2);">
            <div class="relative flex flex-col box-sizing-border">
                <div class="m-[0_95px_49px_95px] flex self-start box-sizing-border">
                    <span class="break-words font-['Inter'] font-[var(--title-font-weight,700)] text-[64px] tracking-[var(--title-letter-spacing,-1.3px)] text-[#000000]">
                        Login
                    </span>
                </div>
                <div class="m-[0_95px_0_95px] flex flex-col self-start w-[fit-content] box-sizing-border">
                    <div class="m-[0_0_24px_0] flex flex-col w-[600px] box-sizing-border">
                        <label for="email" class="m-[0_0_8px_0] inline-block self-start break-words font-['Inter'] font-[var(--small-text-font-weight,700)] text-[18px] leading-[var(--small-text-line-height,1.5)] text-[#000000]">
                            Email address
                        </label>
                        <input type="email" id="email" name="email" class="shadow-[var(--button-shadow,0px_1px_2px_2px_rgba(0,0,0,0.05))] rounded-[8px] border-[1px_solid_#E0E0E0] bg-[#FFFFFF] p-[11px_15px_11px_15px] w-[600px] box-sizing-border" placeholder="Email">
                    </div>
                    <div class="m-[0_0_24px_0] flex flex-col w-[600px] box-sizing-border">
                        <label for="password" class="m-[0_0_8px_0] inline-block self-start break-words font-['Inter'] font-[var(--small-text-font-weight,700)] text-[18px] leading-[var(--small-text-line-height,1.5)] text-[#000000]">
                            Password
                        </label>
                        <input type="password" id="password" name="password" class="shadow-[var(--button-shadow,0px_1px_2px_2px_rgba(0,0,0,0.05))] rounded-[8px] border-[1px_solid_#E0E0E0] bg-[#FFFFFF] p-[11px_15px_11px_15px] w-[600px] box-sizing-border" placeholder="Password">
                    </div>
                    <div class="shadow-[var(--button-shadow,0px_1px_2px_0px_rgba(0,0,0,0.05))] rounded-[8px] bg-[#000000] flex justify-center p-[16px_0.6px_16px_0] w-[600px] box-sizing-border">
                        <button type="submit" class="break-words font-['Inter'] font-[var(--body-text-font-weight,500)] text-[20px] leading-[var(--body-text-line-height,1.5)] text-[#FFFFFF]">
                            Submit 
                        </button>
                    </div>
                    <div class="mt-4 text-center">
                        <span class="text-[#000000]">Don't have an account? </span>
                        <a href="/register" class="text-blue-500">Register</a>
                    </div>
                </div>
            </div>
        </form>
        <div class="bg-[url('../../resources/images/login.png')] bg-[50%_50%] bg-cover bg-no-repeat absolute right-[0px] bottom-[124px] w-[736px] h-[736px]">
        </div>
    </div>
</body>

</html>
