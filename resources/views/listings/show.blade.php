<x-layout>

    <div class="bg-gray-50 border border-gray-200 rounded p-6">
        <h3 class="text-2xl">
            {{$listing->title}}     
        </h3>
        <div class="text-xl font-bold mb-4">
            {{$listing->company}}
        </div>
        <div class="text-lg mt-4">
            {{$listing->email}}
        </div>
        <div class="text-lg mt-4">
            {{$listing->location}}
        </div>
        <div class="text-lg mt-4">
            {{$listing->website}}
        </div>
        <div class="text-lg mt-4">
            {{$listing->tags}}
        </div>
        <div class="text-lg mt-4">
            {{$listing->description}}
        </div>      
    </div>

    
    <div class="mt-4 p-2 flex space-x-6">
        <a href="/listings/{{$listing->id}}/edit">
            <i class="fa-solid fa-pencil"></i>Edit
        </a>

        <form method="POST" action="/listings/{{$listing->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
        </form>
    </div>

</x-layout>


