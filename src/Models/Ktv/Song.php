<?php
namespace Msi\Falcon\Models\Ktv;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->connection = env('DB_FALCON_CONNECTION', 'mysql');
        
        parent::__construct($attributes);
    }
}
