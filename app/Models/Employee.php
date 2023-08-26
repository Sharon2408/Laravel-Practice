<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    //protected $fillable = ['name','department','city','contact_no','company_id','active'];

    public function employee()
    {
       return $this->belongsTo(Company::class);
    }

    protected $guarded = [];
    public function scopeId($query)
    {
        return $query->where('emp_id', 1);
    }
    public function scopeName($query)
    {
        return $query->where('name', 'Peter');
    }

    public function getCompanyidAttribute($attribute)
    {
        // return [
        //     1 => 'CG-VAK',
        //     2 => 'G2-Tech',
        //     3 => 'Accenture'
        // ][$attribute];
        return $this->getCompany()[$attribute];

    }





    public function getActiveAttribute($attribute)
    {
        // return [
        //     0 => 'Not Working',
        //     1 => 'Working',
        // ][$attribute];
        return $this->getActive()[$attribute];
    }







    public function getCompany()
    {
        return [
            1 => 'CG-VAK',
            2 => 'G2-Tech',
            3 => 'Accenture'
        ];
    }







    public function getActive()
    {
        return [
            0 => 'Not Working',
            1 => 'Working',
        ];
    }
}