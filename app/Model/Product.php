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

class Product extends Model
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
    protected $table = 'product';

    /*
    |--------------------------------------------------------------------------
    | Property fillable
    |--------------------------------------------------------------------------
    |
    | We specify the required fields
    | that need filling
    |
    */
    protected $fillable= ['name','price','description','image','cat_id','status'];

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

    public function category()
    {
        return $this->belongsTo('App\Model\Category','cat_id','id');
    }
    public function status()
    {
        return $this->status == 0 ? '<span class="text-danger">غیرفعال</span>' : '<span class="text-success"> فعال</span>';
    }

}