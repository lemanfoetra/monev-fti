<?php

namespace Modules\User\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\User\Http\Requests\CreateUserRequest;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.role:' . accessThisMenu());
    }


    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view(
            'user::index',
            [
                'title' => 'User Management',
                'datas' => User::paginate(20),
                'breadcrumb' => [
                    ['title' => 'Home', 'link' => ''],
                    ['title' => 'Setting', 'link' => ''],
                    ['title' => 'User Managment', 'link' => route('user.index')]
                ]
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view(
            'user::form',
            [
                'title'         => "User Management",
                'title_form'    => 'Tambah User',
                'roles'         => Role::all(),
                'fakultas'      => Fakultas::all(),
                'breadcrumb' => [
                    ['title' => 'Home', 'link' => ''],
                    ['title' => 'Setting', 'link' => ''],
                    [
                        'title' => 'User Managment', 'link' => route('user.index'),
                    ],
                    [
                        'title' => 'Tambah User', 'link' => '',
                    ]
                ]
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateUserRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = [
                'role_code'     => $request->role_code,
                'name'          => $request->name,
                'email'         => $request->email,
                'id_fakultas'   => $request->id_fakultas,
                'id_prodi'      => $request->id_prodi,
                'id_kelas'      => $request->id_kelas,
                'kode'          => $request->kode,
                'nidn'          => $request->nidn,
                'npm'           => $request->npm,
            ];
            if ($request->password != null) {
                $data['password'] = Hash::make($request->password);
            }

            if ($request->id != null) {
                User::where('id', $request->id)->update($data);
            } else {
                User::create($data);
            }
            DB::commit();
            return redirect()->to("user")->with('message', 'User berhasil disimpan.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->to("user")->with('message', 'Error server.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(User $user)
    {
        return view(
            'user::form',
            [
                'title'         => "User Management",
                'title_form'    => 'Edit User',
                'roles'         => Role::all(),
                'data'          => $user,
                'fakultas'      => Fakultas::all(),
                'breadcrumb' => [
                    ['title' => 'Home', 'link' => ''],
                    ['title' => 'Setting', 'link' => ''],
                    [
                        'title' => 'User Managment', 'link' => route('user.index'),
                    ],
                    [
                        'title' => 'Edit User', 'link' => '',
                    ]
                ]
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function remove($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back();
    }


    public function list(Request $request)
    {
        $offset         = $request->start;
        $list           = User::getList($request);
        $totalData      = User::getCountList($request);
        $totalFiltered  = $totalData;

        $data = [];
        foreach ($list as $index => $row) {
            $nestedData = [];

            $btn_hapus = "";
            if (permissionDelete()) {
                $btn_hapus = "<a onclick='return confirm(`Yakin hapus?`)' href='" . url('user/hapus/' . $row->id) . "' class='btn btn-danger btn-sm'>Hapus</a>";
            }

            $btn_edit = "";
            if (permissionUpdate()) {
                $btn_edit = "<a href='" . url('user/edit/' . $row->id) . "' class='btn btn-primary btn-sm'>Edit</a>";
            }

            $nestedData[] = "<center>" . (($offset) + ($index + 1)) . "</center>";
            $nestedData[] = $row->name;
            $nestedData[] = $row->email;
            $nestedData[] = $row->role ?? '-';
            $nestedData[] = "<center>$btn_edit $btn_hapus</center>";

            $data[] = $nestedData;
        }

        $json_data = array(
            "draw"            => intval($request->draw),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data
        );
        return json_encode($json_data);
    }
}
