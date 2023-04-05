<?php
// コンポーネント自体で特殊な処理などを行いたい場合はクラスベースコンポーネントを利用すると未投資が良い

namespace App\View\Components\Tweet;

use Illuminate\View\Component;

class Options extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     private int $tweetId;


    //  コンストラクタはpropsの受け入れとなる
    public function __construct(int $tweetId)
    {
        $this->tweetId = $tweetId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tweet.options')
        ->with('tweetId', $this->tweetId);
    }
}
