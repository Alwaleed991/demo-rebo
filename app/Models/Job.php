<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

 


                     // what this model class we get and what does extends mean ?
    class Job extends Model{  // One file = one class = file name matches the class name IMPORNANT!!!
        use HasFactory;
        protected $table = "job_listings"; // or you should name the class JobListing like the migration but singular
         
        protected $fillable = ["title", "salary",'employer_id']; // is a security rule that protects your database from mass-assignment attacks. Mass-assignment = inserting or updating many fields at once using an array.
    

        public function employer(){ //If a method returns a relationship → access it as a property If it’s a normal method → call it with parentheses
            return $this->belongsTo(Employer::class); //this return object of type Employer
        }

        public function tags(){
            return $this->belongsToMany(Tag::class);
        }
    }

    