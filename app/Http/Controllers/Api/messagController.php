<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\sendMessage;
use Illuminate\Support\Facades\Auth;
use App\Models\message;
use App\Http\Resources\messageRecource;
use App\Http\Resources\chatCompanyRecource;
use App\Models\company;
use App\Models\User;
use App\Http\Resources\chatUserRecource;
use App\Models\mychat;

class messagController extends Controller
{
public function message(Request $request,$id){
        if($request->file){
            $file = $request->file('file');
                $ext = $file->getClientOriginalName();
                $filename = "chat-" . uniqid() . ".$ext";
                $file->move(public_path('chat_image'), $filename);
               
               // dd($request->file);
            //event(new sendMessage ($request->input('file'),));
            $message=asset('chat_image/').'/'.$filename;
        }
      
        else{
            //event(new sendMessage ($request->input('message')));
            
        $message= $request->input('message');
        }
        
        $receiver=$id;
        $user=Auth::guard('api')->user();
        $company=Auth::guard('company_api')->user();
        if($user){
            $sender=$user->id;
            $company_id=$id;
            $user_id=$sender;
            $Sender=$user;
             $image=asset('user_image/').'/'.$Sender->image;
        }
        elseif($company){
                $sender=$company->id;
                $user_id=$id;
                $company_id=$sender;
                $Sender=$company;
            $image=asset('company_image/').'/'.$Sender->logo;
        }
                else $message='token invaild';
                
                
        if($message!='token invaild'){
            event(new sendMessage ($message,$sender,$Sender->name,$image));
    // dd($receiver);
    $us=User::find($user_id);
    $com=company::find($company_id);

    $message=message::create([
        "message"=>$message,
        'sender'=>$sender,
        'receiver'=>$receiver,
        'is_company'=>($company)? 1:0,
        'company_id'=>$company_id,
        'user_id'=>$user_id,
    ]);

    }

        return response()->json([
            'status' => '200',
            'message' =>$message,
        ]);
}
public function allmessage($id){
        $user=Auth::guard('api')->user();
        $company=Auth::guard('company_api')->user();
        if($user){
            $mess= message::where('company_id',$id)->where('user_id',$user->id) ->get()->all();
            if(!$mess)
            return response()->json([
                'status' => 'success',
                'message' =>'No messages yet' ,
            ]);
            foreach($mess as $message){
            $messages[]=new messageRecource($message);
        }
        return response()->json([
            'status' => 'success',
            'message' =>$messages ,
        ]);
        }
        elseif($company){
            $mess= message::where('user_id',$id)->where('company_id',$company->id) ->get()->all();
            if(!$mess)
            return response()->json([
                'status' => 'success',
                'message' =>'No messages yet' ,
            ]);
            foreach($mess as $message){
            $messages[]=new messageRecource($message);
        }
    return response()->json([
        'status' => 'success',
        'message' =>$messages ,
    ]);
        }
    else{
        return response()->json([
            'status' => 'success',
            'message' =>' Token invaild!' ,
        ]);
    }

    }

public function get_all_chat(){
    $user=Auth::guard('api')->user();
    $company=Auth::guard('company_api')->user();
    if($user){
        $company_chats=message::where("user_id",$user->id)->get();
    //   dd($company_chats);
        if($company_chats){
            foreach($company_chats as $chat){
                $conversations[]=company::find($chat->company_id);
                    }
                    $conversations= array_unique($conversations);
                    foreach($conversations as $conversation){
                        $Myconversations[]=new chatcompanyRecource($conversation);
                            }

                        return response()->json([
                            'status' => 'success',
                            'message' =>$Myconversations,
                        ]);
    }
        else return response()->json([
            'status' => 'success',
            'message' =>' no conversations yet!' ,
        ]);
    }
    elseif($company){
        $chats=message::where("company_id",$company->id)->get();
       //dd($chats);
        if(!$chats)
                return response()->json([
                    'status' => 'success',
                    'message' =>' no conversations yet!' ,
                ]);
        else{
        foreach($chats as $chat){
            $conversations[]=User::find($chat->user_id);
                }
                $conversations= array_unique($conversations);
                foreach($conversations as $conversation){
                    $Myconversations[]=new chatUserRecource($conversation);
                        }

                    return response()->json([
                        'status' => 'success',
                        'message' =>$Myconversations,
                    ]);
        }

        }

    else{
    return response()->json([
        'status' => 'success',
        'message' =>' Token invaild!' ,
    ]);
    }

}
}
