<div class="bg-blue w-full p-4">
    <a wire:click="addGroup" class="m-5 cursor-pointer">
        Add
    </a>
    <div class="flex px-4 pb-8 items-start mt-3">
        @foreach($groups as $group)
        <div class="rounded bg-gray-200 flex-no-shrink w-64 p-2 mr-3">
            <div class="flex justify-between py-1">
                <h3 class="text-sm">{{ $group->title }}</h3>
                <a class="cursor-pointer inline-flex text-red-500">x</a>
            </div>
            <div class="text-sm mt-2">
                <div>
                    @foreach($group->cards as $card)
                        <div class="bg-white p-2 rounded mt-1 border-b cursor-pointer hover:bg-gray-100 flex justify-between">
                            <span>{{ $card->title }}</span>
                            <a class="cursor-pointer inline-flex text-red-500">x</a>
                        </div>
                    @endforeach
                </div>

                <a wire:click="addCard({{ $group->id }})" class="mt-3 cursor-pointers">
                    Add
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
