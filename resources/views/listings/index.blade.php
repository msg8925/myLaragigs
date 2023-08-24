<x-layout>

    <h1>Listings</h1><br>

    @foreach($listings as $listing)

        <x-listing-card :listing="$listing" />
    
    @endforeach


</x-layout>





