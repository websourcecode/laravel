<?php
namespace App\Http\Controllers\user;

use View, Validator, Session, Redirect, Input, Response, DB, Mail;
use App\Http\Controllers\Controller;
use App\Models\User as UserModel;
use App\Models\Master as MasterModel;
use App\Models\Clients as ClientsModel;
use App\Models\Triwest_login as Triwest_loginModel;

class UserController extends Controller
{

    /*
     * |--------------------------------------------------------------------------
     * | Welcome Controller
     * |--------------------------------------------------------------------------
     * |
     * | This controller renders the "marketing page" for the application and
     * | is configured to only allow guests. Like most of the other sample
     * | controllers, you are free to modify or remove it as you desire.
     * |
     */
    public function doLogin()
    {
        $uid = \Input::get('uid');
        $password = addslashes(\Input::get('password'));
        
        if ($uid == "admin" && $password == "OSL20CIDM11") {
            
            \Session::set('user_id', $uid);
            
            return Redirect::route('admin.backend');
        } else {
            
            $user = UserModel::where('uid', $uid)->where('pwd', $password)->get();
            
            if (count($user) > 0) {
                
                \Session::set('user_id', $user[0]->ID);
                
                return Redirect::route('admin');
            } else {
                
                $tuser = Triwest_loginModel::where('uid', $uid)->where('pwd', $password)->get();
                
                if (count($tuser) > 0) {
                    
                    \Session::set('user_id', $tuser[0]->ID);
                    
                    return Redirect::route('admin');
                } else {
                    $alert['msg'] = 'userID and Password is incorrect!';
                    $alert['type'] = 'danger';
                    return Redirect::route('home')->with('alert', $alert);
                }
            }
        }
    }

    public function index()
    {
        if (Session::has('user_id')) {
            $id = Session('user_id');
            $masters = MasterModel::where('ID', $id)->get();
            
            return View::make('dataview.admin', [
                'masters' => $masters
            ]);
        }
        return Redirect::route('home');
    }

    public function dips()
    {
        if (Session::has('user_id')) {
            
            $id = Session('user_id');
            $masters = MasterModel::where('ID', $id)->get();
            
            $year = Input::has('year') ? Input::get('year') : date("Y");
            $month = Input::has('month') ? Input::get('month') : date("m");
            
            if (strlen($month) == 1)
                $month = '0' . $month;
            
            $table_name = "DIPS_" . $year . "_" . $month;
            
            $results = DB::table($table_name)->where('ID', $id)->get();
            
            $total = DB::table($table_name)->select(DB::raw("sum(TOTAL) as total, sum(D01) as d01, sum(D02) as d02, sum(D03) as d03, sum(D04) as d04, sum(D05) as d05,
                 sum(D06) as d06,
                sum(D07) as d07, sum(D08) as d08, sum(D09) as d09, sum(D10) as d10, sum(D11) as d11, sum(D12) as d12, sum(D13) as d13, sum(D14) as d14,
                sum(D15) as d15, sum(D16) as d16, sum(D17) as d17, sum(D18) as d18, sum(D19) as d19, sum(D20) as d20, sum(D21) as d21,
                sum(D22) as d22, sum(D23) as d23, sum(D24) as d24, sum(D25) as d25, sum(D26) as d26, sum(D27) as d27, sum(D28) as d28, sum(D29) as d29,
                sum(D30) as d30, sum(D31) as d31"))
                ->where('ID', $id)
                ->get();
            
            return View::make('dataview.dips', [
                'results' => $results,
                'total' => $total[0],
                'year1' => $year,
                'month1' => $month,
                'master' => $masters[0]
            ]);
        }
        return Redirect::route('home');
    }

    public function cnam()
    {
        if (Session::has('user_id')) {
            $id = Session('user_id');
            $masters = MasterModel::where('ID', $id)->get();
            ;
            return View::make('dataview.cnam', [
                'masters' => $masters
            ]);
        }
        return Redirect::route('home');
    }

    public function didupdate()
    {
        $ani = trim(Input::get('ani'));
        
        if (strlen($ani) > 15) {
            
            $response = array(
                'status' => 'failed',
                'msg' => 'Invalid ANI'
            );
        } else {
            
            $c_nam = Input::get('c_nam');
            $rtn = Input::get('rtn');
            
            $id = Session('user_id');
            $master = MasterModel::where('ANI', $ani)->first();
            $cnam_ori = $master->CNAM;
            $rtn_ori = $master->RTN;
            $plat = $master->PLATFORM;
            $company = $master->COMPANY;
            
            $data = [
                'ani' => $ani,
                'cnam_ori' => $cnam_ori,
                'cnam' => $c_nam,
                'plat' => $plat,
                'rtn_ori' => $rtn_ori,
                'rtn' => $rtn,
                'company' => $company
            ];
            
            $info = [
                'reply_name' => '',
                'reply_email' => 'noreply@gmail.com',
                'email' => 'omegaservices@gmail.com',
                'name' => 'Test Mail Name',
                'subject' => 'calleridmanagement gmail'
            ];
            
            Mail::send('emails.test', $data, function ($message) use($info) {
                $message->from($info['reply_email'], $info['reply_name']);
                $message->to($info['email'], $info['name'])->subject($info['subject']);
            });
            
            $result = MasterModel::where('ANI', $ani)->update(array(
                'CNAM' => $c_nam,
                'RTN' => $rtn
            ));
            
            if ($result)
                $status = 'success';
            else
                $status = 'failed';
            
            $response = array(
                'status' => $status,
                'msg' => 'Setting changed successfully'
            );
        }
        
        return Response::json($response);
    }

    public function dipreload()
    {
        $id = Session('user_id');
        $month = Input::get('month');
        $year = Input::get('year');
        
        if (strlen((string) $month) == 1) {
            $table_name = "dips_" . $year . "_0" . $month;
        } else {
            $table_name = "dips_" . $year . "_" . $month;
        }
        
        $results = DB::table($table_name)->where('ID', $id)->get();
        $response = array(
            'results' => $results,
            'year1' => $year,
            'month1' => $month
        );
        return Response::json($response);
    }

    public function cnamverify()
    {
        $str_url = Input::get('url');
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $str_url);
        curl_setopt($ch, CURLOPT_REFERER, $str_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $str_output = curl_exec($ch);
        curl_close($ch);
        $response = array(
            'status' => $str_output
        );
        return Response::json($response);
    }

    public function admin_backend()
    {
        $customerId = Input::has('customer_id') ? trim(Input::get('customer_id')) : '';
        $company = Input::has('company') ? trim(Input::get('company')) : '';
        
        if ($customerId != '' || $company != '') {
            
            $users = '';
            $infos = '';
            
            if ($company != '' && $customerId != '') {
                $users = DB::table('clients')->where(function ($query) use($customerId, $company) {
                    $query->where('ID', $customerId)
                        ->orWhere('Company', 'like', $company . '%');
                })
                    ->get();
                $infos = DB::table('login2')->where('ID', $customerId)->get();
                $masters = MasterModel::where('ID', $customerId)->get();
            } elseif ($company != '') {
                $users = DB::table('clients')->where('Company', 'like', $company . '%')->get();
                
                $customerIds = [];
                $customerIds[] = 0;
                foreach ($users as $item) {
                    $customerIds[] = $item->ID;
                }
                $infos = DB::table('login2')->whereIn('ID', $customerIds)->get();
                $masters = MasterModel::where('ID', $customerId)->get();
            } else {
                $users = DB::table('clients')->where('ID', $customerId)->get();
                $infos = DB::table('login2')->where('ID', $customerId)->get();
                $masters = MasterModel::where('ID', $customerId)->get();
            }
            
            $param['users'] = $users;
            $param['infos'] = $infos;
            $param['masters'] = $masters;
            
            if (count($users) > 0) {
                
                return View::make('admin.index')->with($param);
            } else {
                $alert['msg'] = 'there is no data!';
                $alert['type'] = 'danger';
                
                return View::make('admin.index')->with('alert', $alert);
            }
        } else {
            if (Session::has('user_id')) {
                $id = Session('user_id');
                return View::make('admin.index');
            }
            return Redirect::route('home');
        }
    }

    public function add_customer()
    {
        if (Session::has('user_id')) {
            $id = Session('user_id');
            $param = [];
            if (Session::has('alert')) {
                $param['alert'] = Session::get('alert');
            }
            return View::make('admin.add')->with($param);
        }
        
        return Redirect::route('home');
    }

    public function newcustomer()
    {
        $id = \Input::get('id');
        
        $company = trim(\Input::get('company'));
        $address = trim(\Input::get('address'));
        $city = trim(\Input::get('city'));
        $state = trim(\Input::get('state'));
        $zip = trim(\Input::get('zip'));
        $admin = trim(\Input::get('admin'));
        $phone = trim(\Input::get('phone'));
        $fax = trim(\Input::get('fax'));
        $email = trim(\Input::get('email'));
        $ssn_ein = trim(\Input::get('ssn_ein'));
        $itname = trim(\Input::get('itname'));
        $itphone = trim(\Input::get('itphone'));
        $itfax = trim(\Input::get('itfax'));
        $itemail = trim(\Input::get('itemail'));
        $agent = trim(\Input::get('agent'));
        $rate = trim(\Input::get('rate'));
        $uid = trim(\Input::get('uid'));
        $pwd = trim(\Input::get('password'));
        $ani = trim(\Input::get('ani'));
        
        $result = ClientsModel::where('ID', $id)->get();
        if (count($result) > 0) {
            
            $alert['msg'] = 'ID already exist. please insert other ID!';
            $alert['type'] = 'danger';
            
            return Redirect::route('add.customer')->with('alert', $alert);
        } else {
            
            $clients = new ClientsModel();
            $clients->ID = $id;
            $clients->COMPANY = $company;
            $clients->ADDRESS = $address;
            $clients->CITY = $city;
            $clients->STATE = $state;
            $clients->ZIP = $zip;
            $clients->ADMIN = $admin;
            $clients->PHONE = $phone;
            $clients->FAX = $fax;
            $clients->EMAIL = $email;
            $clients->SSN_EIN = $ssn_ein;
            $clients->ITNAME = $itname;
            $clients->ITPHONE = $itphone;
            $clients->ITFAX = $itfax;
            $clients->ITEMAIL = $itemail;
            $clients->AGENT = $agent;
            $clients->RATE = $rate;
            $clients->UID = $uid;
            $clients->PWD = $pwd;
            $clients->ANI = $ani;
            
            $clients->save();
            
            $login2 = new Login2Model();
            $login2->ID = $id;
            $login2->uid = $uid;
            $login2->pwd = $pwd;
            
            $login2->save();
            
            $master = new MasterModel();
            $master->ID = $id;
            $master->UID = $uid;
            $master->PWD = $pwd;
            $master->AGENT = $agent;
            $master->COMPANY = $company;
            
            $master->save();
            
            $alert['msg'] = 'Added new customer!!!';
            $alert['type'] = 'danger';
            
            return Redirect::route('add.customer')->with('alert', $alert);
        }
    }

    public function cusupdate()
    {
        $id = trim(Input::get('id'));
        
        $address = trim(Input::get('address'));
        $company = trim(Input::get('company'));
        $city = trim(Input::get('city'));
        $state = trim(Input::get('state'));
        $zip = trim(Input::get('zip'));
        $admin = trim(Input::get('admin'));
        $phone = trim(Input::get('phone'));
        $fax = trim(Input::get('fax'));
        $email = trim(Input::get('email'));
        $ssn_ein = trim(Input::get('ssn_ein'));
        $itname = trim(Input::get('itname'));
        $itphone = trim(Input::get('itphone'));
        $itfax = trim(Input::get('itfax'));
        $itemail = trim(Input::get('itemail'));
        $agent = trim(Input::get('agent'));
        $rate = trim(Input::get('rate'));
        $uid = trim(Input::get('uid'));
        $pwd = trim(Input::get('password'));
        $ani = trim(Input::get('ani'));
        
        $result = ClientsModel::where('ID', $id)->update(array(
            'ADDRESS' => $address,
            'COMPANY' => $company,
            'CITY' => $city,
            'STATE' => $state,
            'ZIP' => $zip,
            'ADMIN' => $admin,
            'PHONE' => $phone,
            'FAX' => $fax,
            'EMAIL' => $email,
            'SSN_EIN' => $ssn_ein,
            'ITNAME' => $itname,
            'ITPHONE' => $itphone,
            'ITFAX' => $itfax,
            'ITEMAIL' => $itemail,
            'RATE' => $rate,
            'ANI' => $ani
        ));
        if ($result)
            $status = 'success';
        else
            $status = 'failed';
        
        $response = array(
            'status' => $status,
            'msg' => 'Customer info changed successfully'
        );
        
        return Response::json($response);
    }

    public function modify_cus()
    {
        $customerId = Input::has('customer_id') ? trim(Input::get('customer_id')) : '';
        $company = Input::has('company') ? trim(Input::get('company')) : '';
        
        if ($customerId != '' || $company != '') {
            
            $users = '';
            $infos = '';
            
            if ($company != '' && $customerId != '') {
                $users = DB::table('clients')->where(function ($query) use($customerId, $company) {
                    $query->where('ID', $customerId)
                        ->orWhere('Company', 'like', $company . '%');
                })
                    ->get();
                $infos = DB::table('login2')->where('ID', $customerId)->get();
            } elseif ($company != '') {
                $users = DB::table('clients')->where('Company', 'like', $company . '%')->get();
                
                $customerIds = [];
                $customerIds[] = 0;
                foreach ($users as $item) {
                    $customerIds[] = $item->ID;
                }
                $infos = DB::table('login2')->whereIn('ID', $customerIds)->get();
            } else {
                $users = DB::table('clients')->where('ID', $customerId)->get();
                $infos = DB::table('login2')->where('ID', $customerId)->get();
            }
            
            $param['users'] = $users;
            $param['infos'] = $infos;
            
            if (count($users) > 0) {
                
                return View::make('admin.modify')->with($param);
            } else {
                $alert['msg'] = 'there is no data!';
                $alert['type'] = 'danger';
                
                return View::make('admin.modify')->with('alert', $alert);
            }
        } else {
            if (Session::has('user_id')) {
                $id = Session('user_id');
                return View::make('admin.modify');
            }
            return Redirect::route('home');
        }
    }
}
