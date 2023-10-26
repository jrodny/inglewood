<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class Moduletable extends Component
{
    use WithPagination;

    public $search = '';
    private $pagination = 10;
    protected $paginationTheme = 'custom';

    public function render()
    {
        $modules = Permission::search($this->search)->paginate($this->pagination);
        return view('livewire.admin.module-table', ['modules' => $modules]);
    }
}
