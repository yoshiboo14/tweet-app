@props([
    'tweets' => []
    ])
<div class="bg-white rounded-md shadow-lg mt-5 mb-5">
    <ul>
        @foreach($tweets as $tweet)
        <li class="border-b last:border-b-0 border-gray-200 p-4 flex item-start justify-between">
                <div>
                    <p class="text-gray-600">{!! nl2br(e($tweet->content)) !!}</p>
                </div>
                <div>
                    <!-- 編集と削除 -->
                </div>
        @endforeach
        </li>
    </ul>
</div>