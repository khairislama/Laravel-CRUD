<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Personne extends Model
{
 use HasFactory;
 protected $table = 'Personne';

 public $timestamps = true;
 protected $casts = [
 'price' => 'float'
 ];
 protected $fillable = [
 'nom',
 'prenom',
 'age',
 'created_at'
 ];
}