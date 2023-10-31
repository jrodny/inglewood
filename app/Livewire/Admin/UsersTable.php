<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public $search = '';
    private $pagination = 10;
    protected $paginationTheme = 'custom';

    public function render()
    {
        $users = User::where('id', '!=', auth()->id())
                ->search($this->search)
                ->paginate($this->pagination);
        return view('livewire.admin.users-table', ['users' => $users]);
    }
}
