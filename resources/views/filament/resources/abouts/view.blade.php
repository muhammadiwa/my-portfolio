<div class="space-y-6">
    <div class="grid grid-cols-2 gap-6">
        <div>
            <h3 class="text-lg font-medium">Personal Information</h3>
            <div class="mt-2">
                <p><strong>Name:</strong> {{ $record->name }}</p>
                <p><strong>Email:</strong> {{ $record->email }}</p>
                <p><strong>Phone:</strong> {{ $record->phone }}</p>
                <p><strong>Address:</strong> {{ $record->address }}</p>
            </div>
        </div>
        <div>
            <h3 class="text-lg font-medium">Profile Image</h3>
            <div class="mt-2">
                <img src="{{ asset('storage/' . $record->image) }}" alt="Profile" class="w-32 h-32 object-cover rounded">
            </div>
        </div>
    </div>

    <div>
        <h3 class="text-lg font-medium">Profile</h3>
        <div class="mt-2">
            <p><strong>Title:</strong> {{ $record->title }}</p>
            <p><strong>Description:</strong> {{ $record->description }}</p>
        </div>
    </div>

    <div>
        <h3 class="text-lg font-medium">Portfolio Thumbnails</h3>
        <div class="mt-2 grid grid-cols-3 gap-4">
            @if(!empty($record->thumbnail) && is_array($record->thumbnail))
                @foreach($record->thumbnail as $thumbnail)
                    @if(isset($thumbnail['image']))
                        <img src="{{ asset('storage/' . $thumbnail['image']) }}" 
                             alt="Thumbnail" 
                             class="w-full h-32 object-cover rounded">
                    @endif
                @endforeach
            @endif
        </div>
    </div>

    <div>
        <h3 class="text-lg font-medium">Social Media</h3>
        <div class="mt-2">
            <p><strong>LinkedIn:</strong> <a href="{{ $record->linkedin }}" target="_blank" class="text-primary-600">{{ $record->linkedin }}</a></p>
            <p><strong>GitHub:</strong> <a href="{{ $record->github }}" target="_blank" class="text-primary-600">{{ $record->github }}</a></p>
            <p><strong>WhatsApp:</strong> {{ $record->whatsapp }}</p>
        </div>
    </div>
</div>