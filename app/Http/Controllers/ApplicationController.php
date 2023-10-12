<?php

namespace App\Http\Controllers;

use App\Events\EmployeeEvent;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\User;
use App\Services\ApplicationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Event;

class ApplicationController extends Controller
{
    public function __construct(protected ApplicationService $service)
    {
        
    }
    


    public function all()
    {
        $applications = $this->service->getList();
        // dd($applications);
        return view('blog.allapp',['applications'=>$applications]);
    }

    public function topUsers()
    {
        $users = Application::leftJoin('applications', 'applications.user_id', 'users.id')
            ->select('users.*', 'applications.message')
            ->get();
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        try {
            
            $app = $this->service->createModel($request->all());
           
            
           Event::dispatch(new EmployeeEvent($app->firstname));
            
        } catch (\Throwable $th) {
            $th->getMessage();
        }
        return redirect('/');
    }

    public function show($id)
    {
        $application = Application::find($id);
        return view('blog.show', ['post' => $application]);
    }

    public function edit($id)
    {
        $application = Application::find($id);

        return view('blog.edit', ['application' => $application]);
    }

    public function update(Request $request, $id)
    {
        $data = $this->service->update($id,$request->all());
        return redirect('/')->with('success', 'Project aangepast');
    }

    public function delete($id)
    {
        try {
            $data = $this->service->delete($id);
            return redirect('/');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }


    public function excel(Request $request){
        $model = Application::get();
        
        $excelHeader = [];
        $n = 1;
        $excelHeader[] = [
        'N', 
        'firstname',
        'lastname',
        'position',
        'city',
        'email',
        'address',
        'phone',
        'created_at',
        'updated_at'
        ];

        foreach ($model as $value) {
            $excelHeader[] = $this->assignData($n++,$value);
        }
        return Excel::download(new UsersExport($excelHeader), 'users.xlsx');
    }
    protected function assignData($n, $value){
        return [
            'N'=>$n,
            'firstname'=>$value->firstname,
            'lastname'=>$value->lastname,
            'position'=>$value->position,
            'city'=>$value->city,
            'email'=>$value->email,
            'address'=>$value->address,
            'phone'=>$value->phone,
            'created_at'=>$value->created_at->format('Y-m-d H:i'),
            'updated_at'=>$value->updated_at->format('Y-m-d H:i')
        ];
    }

    
}
