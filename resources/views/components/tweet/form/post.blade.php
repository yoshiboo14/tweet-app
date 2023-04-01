@auth
    <div class="p-4">
        <form action="{{ route('tweetCreate') }}" method="post">
            @csrf
            <div class="mt-1">
                <textarea 
                    class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2" name="tweet" 
                    placeholder="つぶやきを入力" 
                    rows="3"></textarea>
            </div>
            <p class="mt-2 text-sm text-gray-500">
                140文字まで
            </p>
            <div class="flex flex-wrap justify-end">
                <x-tweet.form.button>
                    つぶやく
                </x-tweet.form.button>
            </div>
        </form>
    </div>
@endauth