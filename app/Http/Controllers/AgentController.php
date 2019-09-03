<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;
use Image;

class AgentController extends Controller
{
    public function addAgent(){

        return view('admin.agent.add-agent');
    }

    protected function AgentImageUpload($request){
        $agentImage=$request->file('agent_image');
        $imageName=$agentImage->getClientOriginalName();
        $directory='admin/agent-images/';
        $imageUrl=$directory.$imageName;
        Image::make($agentImage)->resize(300,300)->save($imageUrl);
        return $imageUrl;
    }
    public function saveAgent(Request $request){
        $this->validate($request,[
            'agent_name'=>'required',
            'agent_designation' =>'required',
            'agent_description'=>'required',
            'agent_image'=>'required',
            'publication_status'=>'required'
        ]);
       $imageUrl=$this->AgentImageUpload($request);

        $agent =new Agent();
        $agent->agent_name=$request->agent_name;
        $agent->agent_designation=$request->agent_designation;
        $agent->agent_description=$request->agent_description;
        $agent->agent_image=$imageUrl;
        $agent->publication_status=$request->publication_status;
        $agent->save();
        return redirect('/add/agent')->with('message','Agent info save Successfully');
    }

    public function manageAgent(){
        $agents= Agent::all();
        return view('admin.agent.manage-agent',
            ['agents'=>$agents]);

    }

    public function unpublishedAgent($id){
        $agent = Agent::find($id);
        $agent->publication_status=0;
        $agent->save();
        return redirect('/manage/agent');


    }

    public function publishedAgent($id){
        $agent = Agent::find($id);
        $agent->publication_status=1;
        $agent->save();
        return redirect('/manage/agent');
    }
    public function editAgent($id){
        $agent=Agent::find($id);
        return view('admin.agent.edit-agent',[
            'agent'=>$agent
        ]);

    }
    public function updateAgent(Request $request){
        $agent=Agent::find($request->id);
        $agentImage=$request->file('agent_image');
        if($agentImage)
        {
            unlink($agent->agent_image);
            $imageUrl=$this->AgentImageUpload($request);
            $this->validate($request,[
                'agent_name'=>'required',
                'agent_designation' =>'required',
                'agent_description'=>'required',
                'publication_status'=>'required'
            ]);
            $agent->agent_name=$request->agent_name;
            $agent->agent_designation=$request->agent_designation;
            $agent->agent_description=$request->agent_description;
            $agent->agent_image=$imageUrl;
            $agent->publication_status=$request->publication_status;
            $agent->save();
        }
        else{
            $agent->agent_name=$request->agent_name;
            $agent->agent_designation=$request->agent_designation;
            $agent->agent_description=$request->agent_description;
            $agent->publication_status=$request->publication_status;
            $agent->save();
        }

        return redirect('/manage/agent')->with('message','Agent updated Successfully');

    }
    public function deleteAgent($id){
        $agent=Agent::find($id);
        $agent->delete();
        return redirect('/manage/agent')->with('message','Agent  Deleted Successfully');
    }
}
