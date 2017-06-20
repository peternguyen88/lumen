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
 * App\Models\QuestionSet
 *
 * @property string $set_no
 * @property string $set_description
 * @property int $number_of_question
 * @property string $pack_no
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionSet whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionSet whereNumberOfQuestion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionSet wherePackNo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionSet whereSetDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionSet whereSetNo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\QuestionSet whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class QuestionSet extends Model
{
    protected $table = 'mt_question_set';
}