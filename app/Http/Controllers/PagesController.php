<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Tasks;
use Carbon;
use App\Client;
use DB;
use Debugbar;
use App\User;
use App\Settings;
use App\Leads;
use App\Repositories\User\UserRepositoryContract;
use App\Repositories\Client\ClientRepositoryContract;
use App\Repositories\Setting\SettingRepositoryContract;
use App\Repositories\Task\TaskRepositoryContract;
use App\Repositories\Lead\LeadRepositoryContract;

class PagesController extends Controller
{

    protected $users;
    protected $clients;
    protected $settings;
    protected $tasks;
    protected $leads;
    protected $app;

    public function __construct(
        UserRepositoryContract $users,
        ClientRepositoryContract $clients,
        SettingRepositoryContract $settings,
        taskRepositoryContract $tasks,
        leadRepositoryContract $leads
    ) {
    
        $this->users = $users;
        $this->clients = $clients;
        $this->settings = $settings;
        $this->tasks = $tasks;
        $this->leads = $leads;
    }

    public function dashboard(Request $request)
    {
      /**
         * Other Statistics
         *
         */
        /*Debugbar::startMeasure('render','Time for rendering');
        p($request->user()->hehe());
        Debugbar::stopMeasure('render');*/
        // p(Auth::getUser()->hehe());
        // $user = $request->user();
        // $sql = DB::getQueryLog();
        // p(lastSql());
        // p(Debugbar::getQueryLog());
        // p($user['attributes']);
        // exit;
        $companyname = $this->settings->getCompanyName();
        // p(lastSql());
        $users = $this->users->getAllUsers();
        // p(lastSql());
        $totalClients = $this->clients->getAllClientsCount();
        // p(lastSql());
        // $totalClients->toSql();
        // exit;
        $totalTimeSpent = $this->tasks->totalTimeSpent();

     /**
      * Statistics for all-time tasks.
      *
      */
        $alltasks = $this->tasks->allTasks();
        $allCompletedTasks = $this->tasks->allCompletedTasks();
        $totalPercentageTasks = $this->tasks->percantageCompleted();

     /**
      * Statistics for today tasks.
      *
      */
        $completedTasksToday =  $this->tasks->completedTasksToday();
        $createdTasksToday = $this->tasks->createdTasksToday();

     /**
      * Statistics for tasks this month.
      *
      */
         $taskCompletedThisMonth = $this->tasks->completedTasksThisMonth();
    

     /**
      * Statistics for tasks each month(For Charts).
      *
      */
        $createdTasksMonthly = $this->tasks->createdTasksMothly();
        $completedTasksMonthly = $this->tasks->completedTasksMothly();

     /**
      * Statistics for all-time Leads.
      *
      */
     
        $allleads = $this->leads->allLeads();
        $allCompletedLeads = $this->leads->allCompletedLeads();
        $totalPercentageLeads = $this->leads->percantageCompleted();
     /**
      * Statistics for today leads.
      *
      */
        $completedLeadsToday = $this->leads->completedLeadsToday();
        $createdLeadsToday = $this->leads->completedLeadsToday();

     /**
      * Statistics for leads this month.
      *
      */
        $leadCompletedThisMonth = $this->leads->completedLeadsThisMonth();

     /**
      * Statistics for leads each month(For Charts).
      *
      */
        $completedLeadsMonthly = $this->leads->createdLeadsMonthly();

        $createdLeadsMonthly = $this->leads->completedLeadsMonthly();
        


       
        return view('pages.dashboard', compact(
            'completedTasksToday',
            'completedLeadsToday',
            'createdTasksToday',
            'createdLeadsToday',
            'createdTasksMonthly',
            'completedTasksMonthly',
            'completedLeadsMonthly',
            'createdLeadsMonthly',
            'taskCompletedThisMonth',
            'leadCompletedThisMonth',
            'totalTimeSpent',
            'totalClients',
            'users',
            'companyname',
            'alltasks',
            'allCompletedTasks',
            'totalPercentageTasks',
            'allleads',
            'allCompletedLeads',
            'totalPercentageLeads'
        ));
    }
}
