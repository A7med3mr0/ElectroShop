<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register()
    {
        $payload = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        $response = $this->postJson('/api/register', $payload);

        $response->assertStatus(201)
                 ->assertJsonStructure([
                     'status',
                     'message',
                     'access_token',
                     'token_type',
                     'data' => [
                         'id',
                         'name',
                         'email',
                     ],
                 ]);

        $this->assertDatabaseHas('users', ['email' => 'john@example.com']);
    }

    public function test_user_can_login()
    {
        $user = User::factory()->create([
            'password' => Hash::make('password123'),
        ]);

        $payload = [
            'email' => $user->email,
            'password' => 'password123',
        ];

        $response = $this->postJson('/api/login', $payload);

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'status',
                     'message',
                     'access_token',
                     'token_type',
                     'data',
                 ]);
    }

    public function test_user_cannot_login_with_invalid_credentials()
    {
        $user = User::factory()->create([
            'password' => Hash::make('password123'),
        ]);

        $payload = [
            'email' => $user->email,
            'password' => 'wrongpassword',
        ];

        $response = $this->postJson('/api/login', $payload);

        $response->assertStatus(401)
                 ->assertJson([
                     'status' => false,
                     'message' => 'Invalid credentials',
                 ]);
    }

    public function test_user_can_get_profile()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->getJson('/api/me');

        $response->assertStatus(200)
                 ->assertJson([
                     'status' => true,
                     'data' => [
                         'id' => $user->id,
                         'email' => $user->email,
                     ],
                 ]);
    }

    public function test_user_can_update_profile()
{
    $user = User::factory()->create();

    $payload = [
        'name' => 'Updated Name',
    ];


    $response = $this->actingAs($user)->putJson('/api/update-profile', $payload);

    $response->assertStatus(200)
             ->assertJson([
                 'status' => true,
                 'message' => 'Profile updated successfully',
             ]);

    $this->assertDatabaseHas('users', [
        'id' => $user->id,
        'name' => 'Updated Name',
    ]);
}

    public function test_user_can_change_password()
    {
        $user = User::factory()->create([
            'password' => Hash::make('oldpassword'),
        ]);

        $payload = [
            'current_password' => 'oldpassword',
            'new_password' => 'newpassword123',
            'new_password_confirmation' => 'newpassword123',
        ];

        $response = $this->actingAs($user)->postJson('/api/change-password', $payload);

        $response->assertStatus(200)
                 ->assertJson([
                     'status' => true,
                     'message' => 'Password changed successfully',
                 ]);

        $this->assertTrue(Hash::check('newpassword123', $user->fresh()->password));
    }

    public function test_user_can_refresh_token()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->postJson('/api/refresh-token');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'status',
                     'message',
                     'access_token',
                     'token_type',
                 ]);
    }

    public function test_user_can_logout()
    {
        $user = User::factory()->create();

        $token = $user->createToken('test_token')->plainTextToken;

        $response = $this->withHeader('Authorization', 'Bearer ' . $token)
                         ->postJson('/api/logout');

        $response->assertStatus(200)
                 ->assertJson([
                     'status' => true,
                     'message' => 'Logout successful',
                 ]);
    }

    public function test_user_can_delete_account()
{
    $user = User::factory()->create();


    $response = $this->actingAs($user)->deleteJson('/api/delete-account');

    $response->assertStatus(200)
             ->assertJson([
                 'status' => true,
                 'message' => 'Account deleted successfully',
             ]);

    $this->assertDatabaseMissing('users', ['id' => $user->id]);
}
}
