<!DOCTYPE html>
<html>

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('nav')

<div class="rounded-[10px] bg-[#FFFFFF] flex flex-col items-center w-[1920px] box-sizing-border">
  <div class="m-[0_0_0_95px] flex flex-row w-[fit-content] box-sizing-border">
    <div class="m-[76px_49px_414px_0] flex flex-col items-center box-sizing-border">
      <div class="m-[0_0_35px_0] flex self-start box-sizing-border">
        <span class="break-words font-['Inter'] font-[var(--title-font-weight,700)] text-[64px] tracking-[var(--title-letter-spacing,-1.3px)] text-[#000000]">
          Sign Up
        </span>
      </div>
      <div class="m-[0_0_36px_0] flex flex-col w-[fit-content] box-sizing-border">
        <div class="m-[0_0_24px_0] flex flex-row w-[fit-content] box-sizing-border">
          <div class="m-[0_32px_0_0] flex flex-col w-[400px] box-sizing-border">
            <div class="m-[0_0_8px_0] inline-block self-start break-words font-['Inter'] font-medium text-[20px] leading-[1.5] text-[#000000]">
              First name
            </div>
            <div class="shadow-[var(--button-shadow,0px_1px_2px_0px_rgba(0,0,0,0.05))] rounded-[8px] border-[1px_solid_#E0E0E0] bg-[#FFFFFF] p-[11px_15px_7px_15px] w-[fit-content] box-sizing-border">
              <span class="break-words font-['Inter'] font-medium text-[20px] leading-[1.5] text-[#828282]">
                First name
              </span>
            </div>
          </div>
          <div class="flex flex-col w-[400px] box-sizing-border">
            <div class="m-[0_0_8px_0] inline-block self-start break-words font-['Inter'] font-medium text-[20px] leading-[1.5] text-[#000000]">
              Last name
            </div>
            <div class="shadow-[var(--button-shadow,0px_1px_2px_0px_rgba(0,0,0,0.05))] rounded-[8px] border-[1px_solid_#E0E0E0] bg-[#FFFFFF] p-[11px_15px_7px_15px] w-[fit-content] box-sizing-border">
              <span class="break-words font-['Inter'] font-medium text-[20px] leading-[1.5] text-[#828282]">
                Last name
              </span>
            </div>
          </div>
        </div>
        <div class="m-[0_0_26px_0] flex flex-col w-[fit-content] box-sizing-border">
          <div class="m-[0_0_8px_0] inline-block self-start break-words font-['Inter'] font-medium text-[20px] leading-[1.5] text-[#000000]">
            Email address
          </div>
          <div class="shadow-[var(--button-shadow,0px_1px_2px_0px_rgba(0,0,0,0.05))] rounded-[8px] border-[1px_solid_#E0E0E0] bg-[#FFFFFF] p-[11px_15px_7px_15px] w-[fit-content] box-sizing-border">
            <span class="break-words font-['Inter'] font-medium text-[20px] leading-[1.5] text-[#828282]">
              Email
            </span>
          </div>
        </div>
        <div class="m-[0_0_24px_0] flex flex-col w-[fit-content] box-sizing-border">
          <div class="m-[0_0_8px_0] inline-block self-start break-words font-['Inter'] font-medium text-[20px] leading-[1.5] text-[#000000]">
            Password
          </div>
          <div class="shadow-[var(--button-shadow,0px_1px_2px_0px_rgba(0,0,0,0.05))] rounded-[8px] border-[1px_solid_#E0E0E0] bg-[#FFFFFF] p-[11px_15px_7px_15px] w-[fit-content] box-sizing-border">
            <span class="break-words font-['Inter'] font-medium text-[20px] leading-[1.5] text-[#828282]">
              Password
            </span>
          </div>
        </div>
        <div class="shadow-[var(--button-shadow,0px_1px_2px_0px_rgba(0,0,0,0.05))] rounded-[8px] bg-[#000000] flex p-[13.5px_0.5px_13.5px_0] w-[832px] box-sizing-border">
          <span class="break-words font-['Inter'] font-[var(--body-text-font-weight,500)] text-[20px] leading-[var(--body-text-line-height,1.5)] text-[#FFFFFF]">
            Sign Up
          </span>
        </div>
      </div>
      <div class="m-[0_0_18px_0] flex box-sizing-border">
        <span class="break-words font-['Inter'] font-[var(--small-text-font-weight,500)] text-[16px] leading-[var(--small-text-line-height,1.5)] text-[#000000]">
          Or Sign Up with 
        </span>
      </div>
      <div class="rounded-[10px] bg-[#CECBCB] relative flex flex-row p-[0_0_6px_0] w-[486px] box-sizing-border">
        <div class="bg-[url('../../resources/images/LogoGoogle.png')] bg-[50%_50%] bg-cover bg-no-repeat m-[0_3px_0_0] w-[44px] h-[40px]">
        </div>
        <div class="m-[10px_0_11px_0] inline-block break-words font-['Inter'] font-normal text-[16px] tracking-[-0.3px] text-[#000000]">
          Sign Up with google
        </div>
      </div>
    </div>
    <div class="bg-[url('../../resources/images/register.png')] bg-[50%_50%] bg-cover bg-no-repeat w-[944px] h-[1121px]">
    </div>
  </div>
</div>

</body>

</html>
