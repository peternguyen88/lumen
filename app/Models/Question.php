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
 * App\Models\Question
 *
 * @property int $id
 * @property string $pack_no
 * @property string $set_no
 * @property string $question_no
 * @property string $question_type
 * @property string $reading_passage
 * @property string $stimulus
 * @property string $option_A
 * @property string $option_B
 * @property string $option_C
 * @property string $option_D
 * @property string $option_E
 * @property string $correct_answer
 * @property string $photo_url
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Question whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Question wherePackNo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Question whereQuestionNo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Question whereQuestionType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Question whereSetNo($value)
 * @mixin \Eloquent
 */
class Question extends Model
{
    protected $table = 'zeth_question';

}