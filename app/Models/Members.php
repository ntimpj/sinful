<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Members
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\MembersFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Members newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Members newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Members query()
 * @method static \Illuminate\Database\Eloquent\Builder|Members whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Members whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Members whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Members whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Members whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Members wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Members whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Members extends Model
{
    use HasFactory;
    
    protected $guarded = [];
}
