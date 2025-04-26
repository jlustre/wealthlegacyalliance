<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public $perpage = 10;
    // public $search = '';
    // public $sortField = 'id';
    // public $sortDirection = 'asc';
    // public $selectedUsers = [];
    // public $selectAll = false;
    // public $showDeleteModal = false;
    // public $showEditModal = false;
    // public $userIdToEdit;
    // public $userToEdit;
    // public $showCreateModal = false;
    // public $userToCreate;
    // public $showImportModal = false;
    // public $showExportModal = false;
    // public $showFilterModal = false;
    // public $filters = [
    //     'status' => null,
    //     'role' => null,
    // ];
    // public $users = [];

    public function render()
    {
        $perpage = $this->perpage;
        $users = User::paginate($perpage);

        return view('livewire.users.user-index', compact('users', 'perpage'));
    }
}
