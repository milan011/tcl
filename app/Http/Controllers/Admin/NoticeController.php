<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Notice\UpdateNoticeRequest;
use App\Http\Requests\Notice\StoreNoticeRequest;
use App\Repositories\Notice\NoticeRepositoryContract;

class NoticeController extends Controller
{
    protected $notice;

    public function __construct(
        NoticeRepositoryContract $notice
    ) {
    
        $this->notice = $notice;
        // $this->middleware('notice.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     * 公告列表
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = $this->notice->allNotices();

        // dd($notices->count());
        return view('admin.notice.index', compact(

            'notices'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
