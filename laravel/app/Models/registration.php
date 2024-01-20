<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Registration extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'registration';

    protected $fillable = [
        'eventname', 'date', 'location', 'attendees'
    ];


    protected $guarded = [];

    public function saveregistration($data){
        return $this->create($data);
    }

    protected $fillables = ['eventname', 'date', 'location', 'attendees',];
    protected $table = 'registration';

    
    public function deleteregistration($id){
        $registration = $this->find($id);
        $registration->delete();
    }
    public function updateregistration($id){
        return $this->find($id);
    }
    public function updatedregistration($data, $id){
        $registration = $this->find($id);
        $registration->update($data);
    }
}