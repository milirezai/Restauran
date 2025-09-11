<?php
namespace App\Model;

use System\Database\ORM\Model;

/*
|--------------------------------------------------------------------------
| class User
|--------------------------------------------------------------------------
|
| Models represent database tables
| They inherit from the original model
|
*/

class Payment extends Model
{

    /*
    |--------------------------------------------------------------------------
    | Property table
    |--------------------------------------------------------------------------
    |
    | Models represent database tables
    | Stores the table name represented by this class.
    |
    */
    protected $table = 'payments';

    /*
    |--------------------------------------------------------------------------
    | Property fillable
    |--------------------------------------------------------------------------
    |
    | We specify the required fields
    | that need filling
    |
    */
    protected $fillable= ['amount', 'user_id', 'pay_date', 'status', 'pay_confirmed', 'order_id', 'trackId'];

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

    public function order()
    {
        return $this->belongsTo('\App\Model\Order','order_id','id');
    }
    public function user()
    {
        return $this->belongsTo('\App\Model\User','user_id','id');
    }
    public function status()
    {
        return status($this->status);
    }
    public function confirmed()
    {
        return $this->pay_confirmed == 1 ? 'تایید شده' : 'تایید نشده';
    }
}