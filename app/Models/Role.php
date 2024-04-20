<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    const SUPER_ADMIN = 'Super Admin';
    const ADMIN = 'Admin';

    const OPERATOR = 'Operator';

}
