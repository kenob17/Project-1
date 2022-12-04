

<x-layout>
    <div class="h-screen">
        <div class="form w-80 mx-auto mt-4 ">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Word
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="word" type="text" placeholder="Word">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Romaji
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="romaji" type="text" placeholder="Romaji">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Meaning
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="meaning" type="text" placeholder="Meaning">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Type
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="type" type="text" placeholder="Type">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Lesson
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="lesson" type="text" placeholder="Lesson">
            
            <button class="storevalues md:px-4 md:py-2 px-4 bg-primary text-sm md:text-base text-green-50" type="submit" id="storevalues" value="" name="addtocart">
                Store
              </button>
        </div>
            
        
    </div>
</x-layout>

<script>
$(document).ready(function (){
    
    $(document).on('click', '.storevalues',  function(e){
        e.preventDefault();

        var food_id = 1;
        var word = document.getElementById('word').value;
        var romaji = document.getElementById('romaji').value;
        var meaning = document.getElementById('meaning').value;
        var type = document.getElementById('type').value;
        var lesson = document.getElementById('lesson').value;

        //console.log(word);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: 'store',
            data: {"word":word, "romaji":romaji, "meaning":meaning, "type":type, "lesson":lesson},
            success: function(response){
                alert("stored successfully");
                $('.form').load(location.href + " .form");
            }
        })
    });
})
  
</script>