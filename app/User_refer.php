<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User_refer as Authenticatable;

class User_refer extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table="User_refers_refer";
    protected $fillable = [
        'school_year','first_name','last_name', 'email', 'password','image','User_refername','phone','package_id','address','city','country','zip_code','feature'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static function getUser_refermatchdb($condition)
        {
         return User_refer::where($condition)->pluck('fb_id');
        }
     public static function insertUser_refer($condition='')
        {
         return User_refer::insert($condition);
        }
         public static function getdetailsUser_referret2($conditiion='',$field='')
			{
			    $data= User_refer::where($conditiion)->orderBy('id', 'desc')->first();
			    return $data->$field;
			}
        public static function getbycondition($conditiion = '')
        {
         return User_refer::where($conditiion)->get();
        }
    public static function getnamewithid($id)
    {
        
        $get=User_refer::where('id',$id)->first();
        if($get->status=='1')
        {
            $st=' (Active)';
        }else
        {
             $st=' (Inactive)';
        }
        
        return $get->User_refername.$st;
    }
    public static function getrecent()
    {
         return $get=User_refer::take(5)->orderby('id','desc')->get();
    }
    public static function getall()
    {
      return $get=User_refer::orderby('id','desc')->get(); 
        
    }
    
    public static function updateUser_refer($condition='',$id='')
    {
        $updateoptions = User_refer::findOrFail($id);
        $updateoptions->update($condition);
        return back();
    }
    
     public static function updateoption2($condition='',$query='')
   {
            $updateoptions = User_refer::where($query);
            $updateoptions->update($condition);
            return back();
   }
   public static function deleterecord($query)
   {
    $updateoptions = User_refer::where($query);
    $updateoptions->delete();
    return back();
       
   }
    public static function insertoption($data)
    {
        return User_refer::create($data)->id;
    }
    public static function getdatawithid($id)
    {
      return $get=User_refer::where('id',$id)->first(); 
    }
      public static function getdatawithpackid($id)
    {
      return $get=User_refer::where('package_id',$id)->where('status','1')->get(); 
    }
    
        public static function getUser_refermatch($condition)
        {
        return User_refer::where($condition)->pluck('email');
        }
        public static function getUser_refermatch2($condition)
        {
        return User_refer::where($condition)->pluck('User_refername');
        }
}
