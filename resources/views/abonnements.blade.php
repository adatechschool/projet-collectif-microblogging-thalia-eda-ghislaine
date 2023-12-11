<x-app-layout>

    <div class="flex flex-wrap -mx-3 mb-5">
        <div class="w-full max-w-full px-3 mb-6  mx-auto">
          <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] border border-dashed border-stone-200 bg-white m-5">
            <!-- card body  -->
            <div class="flex-auto block py-8 px-9">
              <div>
                <div class="mb-9">
                  <h1 class="mb-2 text-[1.75rem] font-semibold text-dark">Les personnes que je suis</h1>
                </div>
                <br>
                <div class="flex flex-wrap w-full">
                {{-- @foreach ($users as $user) --}}
                  <div class="flex flex-col mr-5 text-center mb-11 lg:mr-16">
                    <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                      <img class="inline-block shrink-0 rounded-full [.95rem] w-[150px] h-[150px]" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/avatars/avatar11.jpg" alt="avarat image">
                    </div>
                    <div class="text-center">
                      <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">Samantha Reynolds</a>
                    </div>
                    <button>Se désabonner</button>
                  </div>
                  <div class="flex flex-col mr-5 text-center mb-11 lg:mr-16">
                    <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                      <img class="inline-block shrink-0 rounded-full [.95rem] w-[150px] h-[150px]" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/avatars/avatar2.jpg" alt="avarat image">
                    </div>
                    <div class="text-center">
                      <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">Benjamin Martinez</a>
                    </div>
                    <button>Se désabonner</button>
                  </div>
                  <div class="flex flex-col mr-5 text-center mb-11 lg:mr-16">
                    <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                      <img class="inline-block shrink-0 rounded-full [.95rem] w-[150px] h-[150px]" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/avatars/avatar5.jpg" alt="avarat image">
                    </div>
                    <div class="text-center">
                      <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">Emily Turner</a>
                    </div>
                    <button>Se désabonner</button>
                  </div>
                  <div class="flex flex-col mr-5 text-center mb-11 lg:mr-16">
                    <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                      <img class="inline-block shrink-0 rounded-full [.95rem] w-[150px] h-[150px]" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/avatars/avatar24.jpg" alt="avarat image">
                    </div>
                    <div class="text-center">
                      <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">Jason Anderson</a>
                    </div>
                    <button>Se désabonner</button>
                  </div>
                  <div class="flex flex-col mr-5 text-center mb-11 lg:mr-16">
                    <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                      <img class="inline-block shrink-0 rounded-full [.95rem] w-[150px] h-[150px]" src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/avatars/avatar23.jpg" alt="avarat image">
                    </div>
                    <div class="text-center">
                      <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">Olivia Carter</a>
                    </div>
                    <button>Se désabonner</button>
                  </div>
                  {{-- @endforeach --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-5">
      </div>

</x-app-layout>