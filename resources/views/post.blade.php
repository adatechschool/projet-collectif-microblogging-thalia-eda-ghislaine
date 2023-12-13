<x-app-layout>
  <!-- Header -->

          <div class="py-2 px-2">
                  <div class="relative mt-1 flex">
                      <div class="mr-2">
                          <img class="h-7 w-7 rounded-full" src="{{ asset('storage/' . $post->user->avatar) }}" alt="User Image">
                      </div>
                      <div class="ml-3 flex justify-start flex-col items-start">
                          <p class="text-gray-900 text-sm">
                              {{ $post->user->name }}
                          </p>
                      </div>
                  </div>
              </div>

             
         <div class="flex">
    <div class="relative w-1/2 h-full">
      @if($post->image)
      <img src="{{ asset('storage/' . $post->image) }}" alt="Image du post" class="w-full h-full object-cover">
  @else
      <p class="w-full h-full flex items-center justify-center bg-gray-200 text-gray-500">Aucune image</p>
  @endif    </div>
    <div class="p-2 flex flex-col space-y-3 w-1/2">
        <div class="w-full">
            <p>{{ $post->content }}</p>
            <svg fill="#262626" height="20" viewBox="0 0 48 48" width="24"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>

            <p class="font-bold text-sm text-gray-700">{{ $post->likes->count() }} likes
              
            </p>
        </div>
        <div class="w-full">
            <p class="font-normal text-xs text-gray-500">publié le {{ $post->created_at }}</p>
        </div>
    </div>
</div>

              <div class="z-50">
                  <form>
                      <div class="flex justify-between border-t items-center w-full">
                          <div class="w-full">
                              <input type="text" name="comment" id="comment" placeholder="Add A Comment..."
                                  class="w-full text-sm py-4 px-3 rounded-none focus:outline-none">
                          </div>
                          <div class="w-20">
                              <button
                                  class="border-none text-sm px-4 bg-white py-4 text-indigo-600 focus:outline-none">Publier</button>
                          </div>
                      </div>
                  </form>
          </div>
</x-app-layout>
