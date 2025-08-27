<?php
namespace App\Model;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

/*
|--------------------------------------------------------------------------
| class User
|--------------------------------------------------------------------------
|
| Models represent database tables
| They inherit from the original model
|
*/

class OrderNumber extends Model
{
    use HasSoftDelete;

    /*
    |--------------------------------------------------------------------------
    | Property table
    |--------------------------------------------------------------------------
    |
    | Models represent database tables
    | Stores the table name represented by this class.
    |
    */
    protected $table = 'order_numbers';

    /*
    |--------------------------------------------------------------------------
    | Property fillable
    |--------------------------------------------------------------------------
    |
    | We specify the required fields
    | that need filling
    |
    */
    protected $fillable= ['price','status'];

    /*
    |--------------------------------------------------------------------------
    | Property hidden
    |--------------------------------------------------------------------------
    |
    | Key information fields
    | and specify the need for data privacy
    |
    */
    protected $hidden= [];

    /*
    |--------------------------------------------------------------------------
    | Property casts
    |--------------------------------------------------------------------------
    |
    |
    |
    */
    protected $casts= [];

    /*
    |--------------------------------------------------------------------------
    | Property primaryKey
    |--------------------------------------------------------------------------
    |
    | The primaryKey table is essential
    | The default is ID
    | It is changeable
    | But it is not recommended.
    |
    */
    protected $primaryKey= 'id';

    /*
    |--------------------------------------------------------------------------
    | Property createdAT , updatedAT , deletedAT
    |--------------------------------------------------------------------------
    |
    | These fields are key
    | Default values are specified
    | Their values are set when a column is created, updated, or deleted from the table
    | They are automatically quantified
    |
    */
    protected $createdAT= 'created_at';

    protected $updatedAT= 'updated_at';

    protected $deletedAT= 'deleted_at';

    public function orders()
    {
        $this->hasMany('App\Model\Order','order_number_id','id');
    }
    public function user()
    {
       return $this->belongsTo('App\Model\User','user_id','id');
    }
    public function status()
    {
        switch ($this->status)
        {
            case 0:
                $status = 'ارسال نشده';
                break;
            case 1:
                $status = 'درحال ارسال';
                break;
            case 100:
                $status = 'ارسال شد';
                break;
        }
        return $status;
    }
}