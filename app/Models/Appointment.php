<?php

namespace App\Models;


use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function client() {
        return $this->belongsTo(Client::class);
    }
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
