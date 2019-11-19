<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Role;

class AuthTest extends TestCase
{
    /** @test */
    public function user_needs_to_be_logged_in_to_see_dashboard(){
        $response = $this->get('/home')->assertRedirect('/login');
      }

      public function user_with_user_role_can_access_user_dashboard(){
        $user = factory(User::class)->create();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $this->actingAs($user);
        $response = $this->get('/user/home')->assertOk();
      }
}
