<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminUsers extends Component
{
  public $perpage = 2;

  public function render()
    {
      $perpage = $this->perpage;
      $users = User::paginate($perpage);

      return view('livewire.admin.admin-users', compact('users', 'perpage'));
    }
}
