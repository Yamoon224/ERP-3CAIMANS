<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * @property int $status
 * @property Carbon $created_at
 * @property int $created_by
 * @property Carbon $updated_at
 * @property int $updated_by
 * @property int $deleted
 * 
 * @property User $user
 * @property Collection|Article[] $articles
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $casts = [
		'status' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted' => 'int'
	];

	protected $guarded = [];

	public function updator()
	{
		return $this->belongsTo(User::class, 'updated_by');
	}

	public function creator()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function articles()
	{
		return $this->hasMany(Article::class);
	}
}
