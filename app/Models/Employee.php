<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Employee extends Model
{
    use HasFactory;
    protected $fillable =['name', 'email', 'phone', 'address'];

    function rel_to_skill(){
        return $this->belongsTo(Skill::class,'employee_id');
    }
}

