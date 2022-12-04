
<x-layout>
    <div class="h-full w-screen bg-zinc-900">
        <div>
            <p class="text-4xl font-bold text-orange-600 text-center mt-2">Flashcards: Lesson 1</p>
        </div>
        <div class="mt-20 h-screen grid lg:grid-cols-4 md:grid-cols-2 gap-y-6 overflow-y-scroll">
            @foreach ($vocabs as $item)
                <div class="flip-card mx-auto mb-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <p class="title">{{$item->word}}</p>
                            <p>Type: {{$item->type}}</p>
                        </div>
                        <div class="flip-card-back">
                            <p class="title">{{$item->romaji}}</p>
                            <p>{{$item->meaning}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</x-layout>