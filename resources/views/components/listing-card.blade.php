@props(['listing'])

<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <h3 class="text-2xl">
        <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>      
    </h3>
    <div class="text-xl font-bold mb-4">
        {{$listing->company}}
    </div>
    <div class="text-lg mt-4">
        {{$listing->email}}
    </div>      
</div>