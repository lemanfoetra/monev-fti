<?php

// For Helper

use App\Models\Menu;
use App\Models\Role;
use App\Models\RoleAccess;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


function menuBuilder()
{
   $module_name   = Request::segment(1);
   $listMenu      = '';

   $menus = Menu::select(['menus.*'])
      ->where('menus.parrent_menu_id', '0')
      ->join('role_accesses', 'role_accesses.menu_id', 'menus.id')
      ->where('role_accesses.role_code', Auth::user()->role_code)
      ->orderBy('menus.urutan', 'asc')->get();

   foreach ($menus as $menu) {

      $active = "";
      $listModule = __link_same_with_menu($menu->id);
      if (in_array($module_name, $listModule)) {
         $active = "active";
      }

      $icon = "";
      if ($menu->icon != '') {
         $icon = '   <span class="nav-link-icon d-md-none d-lg-inline-block">
                        ' . $menu->icon . '
                     </span>';
      }

      if (Menu::isHaveChild($menu->id)) {

         $listMenu .= '<li class="nav-item dropdown ' . $active . '">';
         $listMenu .= '<a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">';
         $listMenu .=  $icon;
         $listMenu .= '<span class="nav-link-title">' . $menu->name . '</span>';
         $listMenu .= '</a>';
         $listMenu .= __getMenu($menu->id);
         $listMenu .= '</li>';
      } else {


         $listMenu .= '<li class="nav-item ' . $active . '">';
         $listMenu .= '<a class="nav-link" href="' . url($menu->link ?? '#') . '">';
         $listMenu .=  $icon;
         $listMenu .= '<span class="nav-link-title">' . $menu->name . '</span>';
         $listMenu .= '</a>';
         $listMenu .= '</li>';
      }
   }
   return $listMenu;
}


function __getMenu($id)
{
   $listMenu = '<div class="dropdown-menu">';

   $menus = Menu::select(['menus.*'])
      ->where('menus.parrent_menu_id', $id)
      ->join('role_accesses', 'role_accesses.menu_id', 'menus.id')
      ->where('role_accesses.role_code', Auth::user()->role_code)
      ->orderBy('menus.urutan', 'asc')->get();

   foreach ($menus as $menu) {
      if (Menu::isHaveChild($menu->id)) {

         $listMenu .= '<div class="dropend">';
         $listMenu .= '<a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">';
         $listMenu .= '<span class="nav-link-title">' . $menu->name . '</span>';
         $listMenu .= '</a>';
         $listMenu .= __getMenu($menu->id,);
         $listMenu .= '</div>';
      } else {
         $listMenu .= '<a class="dropdown-item" href="' . url($menu->link ?? '#') . '">';
         $listMenu .= '<span class="nav-link-title">' . $menu->name . '</span>';
         $listMenu .= '</a>';
      }
   }
   $listMenu .= '</div>';
   return $listMenu;
}


function __link_same_with_menu($id_menu, $data = [])
{
   $menus = DB::table('menus')
      ->select(['id', 'parrent_menu_id', 'link'])
      ->where('id', $id_menu)
      ->get();
   foreach ($menus as $key => $menu) {
      array_push($data, $menu->link);
      $data = __link_same_with_menu2($menu->id, $data);
   }
   return $data;
}

function __link_same_with_menu2($id_menu, $data = [])
{
   $menus = DB::table('menus')
      ->select(['id', 'parrent_menu_id', 'link'])
      ->where('parrent_menu_id', $id_menu)
      ->get();
   foreach ($menus as $key => $menu) {
      array_push($data, $menu->link);
      $data = __link_same_with_menu2($menu->id, $data);
   }
   return $data;
}


function accessThisMenu($menuUrl = 1, $url = null)
{
   $uri = Request::segment($menuUrl);
   if ($menuUrl === true) {
      $uri = $url;
   }
   $listRole   = "";
   $menu       = Menu::where('link', $uri)->first();
   $roles      = RoleAccess::where('menu_id', ($menu->id ?? ''))->get();
   foreach ($roles ?? [] as $key => $value) {
      if (($key + 1) < count($roles)) {
         $listRole .= $value->role->role_code . ',';
      } else {
         $listRole .= $value->role->role_code;
      }
   }
   return $listRole;
}

function __access($access, $uri)
{
   return RoleAccess::select(['role_accesses.*'])
      ->join('menus', 'menus.id', 'role_accesses.menu_id')
      ->join('roles', 'roles.role_code', 'role_accesses.role_code')
      ->where('menus.link', $uri)
      ->where($access, 'Y')
      ->where('roles.role_code', Auth::user()->role_code)
      ->first();
}


function permissionCreate($segment = 1)
{
   $uri  = Request::segment($segment);
   return (__access('create', $uri) !== null) ? true : false;
}


function permissionUpdate($segment = 1)
{
   $uri  = Request::segment($segment);
   return (__access('update', $uri) !== null) ? true : false;
}


function permissionDelete($segment = 1)
{
   $uri  = Request::segment($segment);
   return (__access('delete', $uri) !== null) ? true : false;
}
