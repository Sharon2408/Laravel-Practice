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
    public function scopeEmpid($query)
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
       // return $this->getCompany()[$attribute];
       if (isset($this->getCompanyid()[$attribute])) {
        return $this->getCompanyid()[$attribute];
    } else {
        return;
    }
    }





    public function getActiveAttribute($attribute)
    {
        // return [
        //     0 => 'Not Working',
        //     1 => 'Working',
        // ][$attribute];
       // return $this->getActive()[$attribute];
       if (isset($this->getActive()[$attribute])) {
        return $this->getActive()[$attribute];
    } else {
        return;
    }
    }







    public function getCompanyid()
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