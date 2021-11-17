<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Studentinformations
 * @package App\Models
 * @version November 17, 2021, 2:29 pm UTC
 *
 * @property string $Name
 * @property integer $Age
 * @property integer $ContactNO
 * @property string $Address
 * @property string $Gender
 * @property string $Citizenship
 */
class Studentinformations extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'studentinformations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Age',
        'ContactNO',
        'Address',
        'Gender',
        'Citizenship'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'Age' => 'integer',
        'ContactNO' => 'integer',
        'Address' => 'string',
        'Gender' => 'string',
        'Citizenship' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|string|max:255',
        'Age' => 'required|integer',
        'ContactNO' => 'required|integer',
        'Address' => 'required|string|max:255',
        'Gender' => 'required|string|max:255',
        'Citizenship' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
