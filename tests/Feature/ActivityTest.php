<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Activity;

class ActivityControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_activities()
    {
        $user = User::factory()->create();
        $activity = Activity::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->get('/activities');

        $response->assertStatus(200);
        $response->assertSee($activity->type);
    }

    /** @test */
    public function it_can_show_a_single_activity()
    {
        $user = User::factory()->create();
        $activity = Activity::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->get('/activities/' . $activity->id);

        $response->assertStatus(200);
        $response->assertSee($activity->type);
    }

    /** @test */
    public function it_can_create_an_activity()
    {
        $user = User::factory()->create();
        $data = [
            'type' => 'surf',
            'user_id' => $user->id,
            'datetime' => now(),
            'paid' => false,
            'notes' => 'Test notes',
            'satisfaction' => 5,
        ];

        $response = $this->actingAs($user)->post('/activities', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('activities', $data);
    }

    /** @test */
    public function it_can_update_an_activity()
    {
        $user = User::factory()->create();
        $activity = Activity::factory()->create(['user_id' => $user->id]);
        $data = [
            'type' => 'kayak',
            'datetime' => now(),
            'paid' => true,
            'notes' => 'Updated notes',
            'satisfaction' => 8,
        ];

        $response = $this->actingAs($user)->put('/activities/' . $activity->id, $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('activities', $data);
    }

    /** @test */
    public function it_can_delete_an_activity()
    {
        $user = User::factory()->create();
        $activity = Activity::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->delete('/activities/' . $activity->id);

        $response->assertStatus(200);
        $this->assertDatabaseMissing('activities', ['id' => $activity->id]);
    }
}
