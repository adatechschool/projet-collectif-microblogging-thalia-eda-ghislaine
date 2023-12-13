<x-app-layout>

<div class="insta-clone">
    <!--body start-->
    <!--profile data-->
    <div class="bg-gray-100 h-auto px-48">
      <div class="flex md:flex-row-reverse flex-wrap">
        <div class="w-full md:w-3/4 p-4 text-center">
          <div class="text-left pl-4 pt-3">
            <span class="text-base text-gray-700 text-2xl mr-2">{{ Auth::user()->name }}</span>
            <span class="text-base font-semibold text-gray-700 mr-2">
              <a href="{{ route('profile.edit') }}"><button
                class="bg-transparent hover:bg-blue-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-gray-600 hover:border-transparent rounded"
              >Editer ma page</button></a>
            </span>
            <span class="text-base font-semibold text-gray-700">
              <button
                class="p-1 border-transparent text-gray-700 rounded-full hover:text-blue-600 focus:outline-none focus:text-gray-600"
                aria-label="Notifications"
              >
                <svg
                  class="h-8 w-8"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="1.5"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                  />
                  <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            </button>
            </span>
          </div>
        <br>
          <div class="text-left pl-4 pt-3">
            <span class="text-base font-semibold text-gray-700 mr-2">
              <b>{{ Auth::user()->posts->count() }}</b> posts
            </span>
            <span class="text-base font-semibold text-gray-700 mr-2">
              <b>{{ $followers->count() }}</b> followers
            </span>
            <span class="text-base font-semibold text-gray-700">
              <b>{{ $followings->count() }}</b> following
            </span>
          </div>
          <br>
          <div class="text-left pl-4 pt-3">
            <p
              class="text-base font-medium text-blue-700 mr-2"
            >{{ Auth::user()->biography }}</p>
            <br>
            <span class="text-base font-semibold text-gray-700 mr-2">
              <a href="{{ route('abonnements') }}"><button
                class="bg-transparent hover:bg-blue-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-gray-600 hover:border-transparent rounded"
              >Mes abonnements</button></a>
            </span>
          </div>

        </div>

        <div class="w-full md:w-1/4 p-4 text-center">
          <div class="w-full relative md:w-3/4 text-center mt-8">
            <button
              class="flex rounded-full"
              id="user-menu"
              aria-label="User menu"
              aria-haspopup="true"
            >
              <img
                class="h-20 w-20 rounded-full"
                src="{{ asset('storage/' . $user->avatar) }}"
                alt="avatar"
              />
            </button>
          </div>
        </div>
      </div>

     

      <hr class="border-gray-500 mt-6" />
      <hr class="border-gray-500 w-20 border-t-1 ml-64 border-gray-800" />

     
     
      
      </a>

      {{-- <div class="grid grid-cols-2 gap-4">
        @forelse ($posts as $post)
            <div class="flex-1 text-center px-4 py-2 m-2">
                <p class="mb-2">{{ $post->title }}</p>
                
                <div class="flex justify-center items-center mb-2">
                  <a href="{{ route('post.show', $post->id) }}">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Image du post" class="max-w-48 h-auto">
                    @else
                        <p>Aucune image</p>
                    @endif
                </a>
                
                </div>
    
              
            </div>
        @empty
            <p>Aucun post disponible pour le moment.</p>
        @endforelse --}}
    </div>
    
    <div class="max-w-xl mx-auto mt-10">
      <div class="grid grid-cols-1 gap-6">  
        
        @foreach($posts as $post)
          <div class="bg-gray-100 p-4">
  
            <div class="bg-white border rounded-sm max-w-md p-4">
              
              <div class="flex items-center mb-4">
               
                <img class="h-9 w-9 rounded-full" src="{{ asset('storage/' . $user->avatar) }}"/>
                <div class="ml-3">
                  <span class="text-lg font-semibold antialiased block leading-tight">
                    <a href="{{ route('post.show', $post->id) }}">{{$post['title']}}
                      <span class="text-xs text-gray-600 block">
                        Publié le {{ $post->created_at }} par : 
                        <a href="{{ route('users.show', $post->user_id) }}" class="underline">{{ \App\Models\User::find($post->user_id)->name }}</a>
                      </span>
                    </div>
                  </div>
              
                  <div class="relative">
                    @if($post->image)
                      <img src="{{ asset('storage/' . $post->image) }}" alt="Image du post" class="w-full h-40 object-cover mb-4">
                    @else
                      <p class="w-full h-40 flex items-center justify-center bg-gray-200 text-gray-500 mb-4">Aucune image</p>
                    @endif
              
                    <p class="text-gray-600 mb-4 overflow-hidden">
                      {{ \Illuminate\Support\Str::limit($post->content, 100, $end='...') }}
                      @if (strlen($post->content) > 100)
                        <a href="{{ route('post.show', $post->id) }}" class="more-link">Lire plus</a>
                      @endif
                    </p>
                  </div>
              
                <div class="flex items-center justify-between mx-4 mt-3">
                <div class="flex gap-3 items-center">
                  {{ $post->likes->count() }}<svg fill="#262626" height="20" viewBox="0 0 48 48" width="24"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>
                  <svg fill="#262626" height="20" viewBox="0 0 48 48" width="24"><path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path></svg>
                  <svg fill="#262626" height="20" viewBox="0 0 48 48" width="24"><path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path></svg>
                </div>
                <form action="{{ route('deletePost', $post->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
  
                  <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                    Supprimer
                  </button>
              </form>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div> 
  



    </div>
  </div>

</x-app-layout>
