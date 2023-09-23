<?php

namespace App\Livewire;

use App\Models\Card;
use App\Models\Group;
use Livewire\Component;

class Trello extends Component
{
    public function addGroup()
    {
        Group::create([
            "title" => uniqid()
        ]);
    }
    public function addCard($group_id)
    {
        Card::create([
            "group_id" => $group_id,
            "title" => uniqid()
        ]);
    }
    public function render()
    {
        $groups = Group::orderBy("sort")->get();
        return view('livewire.trello',[
            "groups" => $groups, 
        ]);
    }
}
