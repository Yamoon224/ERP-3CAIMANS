<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * 
 * @property int $id
 * @property string $title
 * @property string $path
 * @property int $article_id
 * @property Carbon $created_at
 * @property int $created_by
 * @property Carbon $updated_at
 * @property int $updated_by
 * @property int $deleted
 * 
 * @property Article $article
 * @property User $user
 *
 * @package App\Models
 */
class Image extends Model
{
	protected $table = 'images';

	protected $casts = [
		'article_id' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted' => 'int'
	];

	protected $fillable = [
		'title',
		'path',
		'article_id',
		'created_by',
		'updated_by',
		'deleted'
	];

	public function article()
	{
		return $this->belongsTo(Article::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'updated_by');
	}
}
