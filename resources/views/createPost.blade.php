<x-app-layout>
    <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 mt-10 rounded-md">
        <h2 class="text-2xl font-semibold mb-6 text-center">Créer une nouvelle publication</h2>

        <form method="post" action="{{ route('storePost') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Titre :</label>
                <input type="text" name="title" id="title" class="mx-auto p-2 w-full sm:w-80 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image :</label>
                <input type="file" name="image" id="image" class="mt-1 p-2 w-full sm:w-80 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Contenu :</label>
                <textarea name="content" id="content" class="mt-1 p-2 w-full sm:w-80 border rounded-md" required></textarea>
            </div>
            
        
            <div class="mt-6">
                <button type="submit" class="bg-black-500 text-black p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200">
                    Publier
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
