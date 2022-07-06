<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'name',
        'salary'
    ];

    public function transactions(){

        return $this->hasMany(Transaction::class);
    }

    public static function store(Request $request){
        
        $emp = new Employee;
        $emp -> name = request -> name;
        $emp -> salary = request -> salary;
        $emp -> save();
        return $request;
    }

    // public function scopeFilter($query , array $filters) {

        
    //     $query->when($filters['emp'] ?? false , fn($query , $emp)=>
            
    //         $query->where('employee_id',  $emp));

        // $query->when($filters['Transaction'] ?? false , fn($query , $Transaction)=>
            
        //     $query->where('transaction_id' . Transaction));

    // }

}
