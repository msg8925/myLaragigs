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

</x-layout>


