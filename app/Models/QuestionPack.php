<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 6/18/2017
 * Time: 11:54 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\QuestionPack
 *
 * @property string $pack_no
 * @property string $pack_description
 * @property bool $is_test_pack
 * @property bool $is_practice_pack
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionPack whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionPack whereIsPracticePack($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionPack whereIsTestPack($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionPack wherePackDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionPack wherePackNo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionPack whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class QuestionPack extends Model
{
    protected $table = 'mt_question_pack';
}