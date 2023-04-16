<h1> {{ $heading }} </h1>
@unless (count($listings) == 0)
    @foreach ($listings as $listing)
        <h2>
            <a href="{{ 'listing/' }}{{ $listing['id'] }}">
                {{ $listing['title'] }}
            </a>
        </h2>
        <p style="width:50%">
            {{ $listing['description'] }}
        </p>
    @endforeach
@else
    <p>
        {{ 'No Listing Found' }}
    </p>
@endunless ($listings)
