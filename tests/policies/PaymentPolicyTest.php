<?php
namespace Tests\Policies;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use Tests\TestCase;

class PaymentPolicyTest extends TestCase {
    private $adminUser, $nurseUser, $doctorUser;

    public function setUp() {
        parent::setUp();
        $this->adminUser = User::where('role_id', 1)->first();
        $this->nurseUser = User::where('role_id', 3)->first();
        $this->doctorUser = User::where('role_id', 2)->first();
    }


    /**
     * Test whether the stat boxes are visible to each user type
     *
     * @return void
     */
    public function testStatsVisibilityOnDashboard() {
        $this->actingAs($this->adminUser)->visit("/")
            ->see("Patients Registered")
            ->see("Prescriptions Issued")
            ->see("Total Payments")
            ->see("Stocks Running Low");

        $this->actingAs($this->doctorUser)->visit("/")
            ->dontSee("Patients Registered")
            ->dontSee("Prescriptions Issued")
            ->dontSee("Worth of Payments")
            ->dontSee("Stocks Running Low");

        $this->actingAs($this->nurseUser)->visit("/")
            ->dontSee("Patients Registered")
            ->dontSee("Prescriptions Issued")
            ->dontSee("Worth of Payments")
            ->dontSee("Stocks Running Low");


        $this->assertTrue(true);
    }
}
