<?php

namespace Ductong\XuongOop\Controllers\Admin;

use Ductong\XuongOop\Commons\Controller;
use Ductong\XuongOop\Commons\Helper;
use Ductong\XuongOop\Models\Dashboard;

class DashboardController extends Controller
{
    private $dashboard;
    public function __construct(){
        $this->dashboard = new Dashboard();
    }
    public function dashboard() {        
        $dashboards = $this->dashboard->analysis();

        $dashboards = array_map(function ($item) {
            return [
                $item['name'],
                $item['analys_post']
            ];
        }, $dashboards);


        array_unshift( $dashboards, ['Tên Danh Mục','Số Sản Phẩm']);

        //Helper::debug($dashboards);
        $this->renderViewAdmin('dashboard', [
            'dashboards' => $dashboards
        ]);

    }
}