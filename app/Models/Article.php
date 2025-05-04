<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * 
 * @property int $id
 * @property string $name
 * @property float $price
 * @property float $qty
 * @property string|null $description
 * @property int $category_id
 * @property int $quantity_id
 * @property Carbon $created_at
 * @property int $created_by
 * @property Carbon $updated_at
 * @property int $updated_by
 * @property int $deleted
 * 
 * @property Category $category
 * @property User $user
 * @property Quantity $quantity
 * @property Collection|Sale[] $sales
 * @property Collection|Image[] $images
 *
 * @package App\Models
 */
class Article extends Model
{

	protected $casts = [
		'price' => 'float',
		'qty' => 'float',
		'category_id' => 'int',
		'quantity_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted' => 'int'
	];

	protected $guarded = [];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function quantity()
	{
		return $this->belongsTo(Quantity::class);
	}

	public function sales()
	{
		return $this->hasMany(Sale::class);
	}

	public function images()
	{
		return $this->hasMany(Image::class);
	}
	public function updator()
	{
		return $this->belongsTo(User::class, 'updated_by');
	}

	public function creator()
	{
		return $this->belongsTo(User::class, 'created_by');
	}
}
