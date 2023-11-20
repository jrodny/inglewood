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

    public function editStatus(User $id)
    {
        $newStatus = $id->status == 0 ? 1 : 0; // Toggle the status
        $id->update(['status' => $newStatus]);

        session()->flash('message', 'User status updated successfully');

        return redirect()->to('/');
    }

    public function render()
    {
        $users = User::where('id', '!=', auth()->id())
                ->search($this->search)
                ->orderBy('status', 'desc')
                ->paginate($this->pagination);
        return view('livewire.admin.users-table', ['users' => $users]);
    }
}
