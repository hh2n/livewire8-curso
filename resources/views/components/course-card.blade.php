<div>
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="{{ route('course', $course->slug) }}">
            <img src="{{ $course->image }}" class="rounded-t-md mb-2">
            <h2 class="text-lg text-zinc-600 truncate">
                {{ $course->name }}
            </h2>
            <h3 class="text-sm text-gray-400"> 
                {{ $course->excerpt }}
            </h3>
            <img 
                src="{{ $course->user->avatar }}" 
                class="rounded-full mt-4 mx-auto h-16 w-16"
            >
        </a>
    </div>

</div>