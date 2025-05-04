<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 * 
 * @property int $id
 * @property string $customer_name
 * @property string $customer_phone
 * @property string|null $customer_address
 * @property float $amount
 * @property float $discount
 * @property Carbon $created_at
 * @property int $created_by
 * @property Carbon $updated_at
 * @property int $updated_by
 * @property int $deleted
 * 
 * @property User $user
 * @property Collection|Sale[] $sales
 *
 * @package App\Models
 */
class Sale extends Model
{
	protected $table = 'sales';

	protected $casts = [
		'amount' => 'float',
		'discount' => 'float',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted' => 'int'
	];

	protected $fillable = [
		'customer_name',
		'customer_phone',
		'customer_address',
		'amount',
		'discount',
		'created_by',
		'updated_by',
		'deleted'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'updated_by');
	}

	public function sales()
	{
		return $this->hasMany(Sale::class);
	}
}
