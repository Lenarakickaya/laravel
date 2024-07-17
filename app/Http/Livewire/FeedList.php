<?php

namespace App\Http\Livewire;
use App\Models\Feed;

use Livewire\Component;

class FeedList extends Component
{
    public $amount = 1;
    public bool $canLoadMore;
    public function loadMore(){
        if(!$this->canLoadMore){
            return null;
        }
        $this->amount += 1;
    }
    public function render()
    {
 
        $feeds = Feed::orderBy('id','DESC')->take($this->amount)->get();
        $this->canLoadMore = count($feeds) >= $this->amount;
        return view('livewire.feed-list', compact('feeds'));
    }
}