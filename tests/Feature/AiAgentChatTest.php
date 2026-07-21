<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Portfolio;
use App\Models\AiAgent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AiAgentChatTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Seed data
        $this->artisan('db:seed');
    }

    /**
     * Test the landing page returns 200 and contains dynamic content.
     */
    public function test_landing_page_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Solutions Factory Studio');
        $response->assertSee('Calculadora Científica Matricial');
        $response->assertSee('Socrates');
    }

    /**
     * Test AI agent chat endpoint responds correctly.
     */
    public function test_ai_agent_chat_endpoint_returns_simulated_response(): void
    {
        $agent = AiAgent::first();

        $response = $this->postJson("/agents/{$agent->id}/chat", [
            'message' => 'hola'
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure(['response']);
        $response->assertSee('indagar'); // Socrates prompt fallback checks
    }

    /**
     * Test authorization policies.
     */
    public function test_user_policies_enforce_correct_permissions(): void
    {
        $admin = User::where('role', 'admin')->first();
        $subscriber = User::where('role', 'suscriptor')->first();

        // Admin can access/modify everything
        $this->actingAs($admin);
        $this->assertTrue($admin->can('viewAny', User::class));
        $this->assertTrue($admin->can('create', Portfolio::class));
        $this->assertTrue($admin->can('create', AiAgent::class));

        // Subscriber is restricted
        $this->actingAs($subscriber);
        $this->assertFalse($subscriber->can('viewAny', User::class)); // Cannot manage users
        $this->assertFalse($subscriber->can('create', Portfolio::class)); // Cannot modify portfolio
        $this->assertFalse($subscriber->can('create', AiAgent::class)); // Cannot modify agents
        
        // Subscriber CAN view portfolios and agents in the backend panel
        $portfolio = Portfolio::first();
        $agent = AiAgent::first();
        $this->assertTrue($subscriber->can('viewAny', Portfolio::class));
        $this->assertTrue($subscriber->can('viewAny', AiAgent::class));
    }
}
