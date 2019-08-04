<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Events\AnswerAction;

class AnswerTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSave()
    {
        $user = $user = factory(\App\User::class)->make();
        $user->save();
        $question = factory(\App\Question::class)->make();
        $question->user()->associate($user);
        $question->save();
        $answer = factory(\App\Answer::class)->make();
        $answer->user()->associate($user);
        $answer->question()->associate($question);
        $this->assertTrue($answer->save());
    }
    public function testLikeEvent()
    {
        $this->expectsEvents(AnswerAction::class);
        $user = factory(\App\User::class)->make();
        $user->save();
        $question = factory(\App\Question::class)->make();
        $question->user()->associate($user);
        $question->save();
        $answer = factory(\App\Answer::class)->make();
        $answer->user()->associate($user);
        $answer->question()->associate($question);
        $this->actingAs($user)->post('/answer/{answer_id}/act');
        $newLikes_count = 0;
        $action = 'like';
        if($action == 'like'){
            $newLikes_count = $answer->likes_count + 1;
        }
        $this->assertTrue($newLikes_count == $answer->likes_count +1);
    }
}
