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
                @foreach ($followers as $follower)
                  <div class="flex flex-col mr-5 text-center mb-11 lg:mr-16">
                    <div class="inline-block mb-4 relative shrink-0 rounded-[.95rem]">
                      <img class="inline-block shrink-0 rounded-full [.95rem] w-[150px] h-[150px]" 
                      src="{{ asset('storage/' . $follower->avatar) }}" alt="avatar image">
                    </div>
                    <div class="text-center">
                      <a href="javascript:void(0)" class="text-dark font-semibold hover:text-primary text-[1.25rem] transition-colors duration-200 ease-in-out">{{ $follower->name }}</a>
                    </div>
                    <form action="{{ route('unsubscribe', Auth::id()) }}" method="POST">
                      @csrf
                    <button class="bg-transparent hover:bg-red-500 text-red-700 hover:text-white font-semibold py-2 px-4 border border-red-500 hover:border-transparent rounded">
                      Se désabonner
                    </button>
                  </form>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-5">
      </div>

</x-app-layout>