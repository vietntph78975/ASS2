<?php 
namespace Ductong\XuongOop\Controllers\Admin;

use Ductong\XuongOop\Commons\Controller;
use Ductong\XuongOop\Models\Category;

class CategoryController extends Controller{
        private $category;

        public function __construct(){
            $this->category = new Category();
        }

        public function index(){
            $categories = $this->category->all();
            $this -> renderViewAdmin('categories.index',[
                'categories'=> $categories
            ]);
        }

        public function create(){
            $this->renderViewAdmin('categories.create');
        }

        public function store(){

            $data = [
                'name'     => $_POST['name'],
            ];

            $this->category->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url('admin/categories'));
            exit;
        }
        

        public function show($id){
            $category = $this->category->findByID($id);

            $this->renderViewAdmin('categories.show',[
                'category' => $category
            ]);
        }
        public function edit($id){
            $category = $this->category->findByID($id);

            $this->renderViewAdmin('categories.edit',[
                'category' => $category
            ]);
        }

        public function update($id){
            $category = $this->category->findByID($id);

            $data = [
                'name'     => $_POST['name'],
            ];

            $this->category->update($id, $data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url("admin/categories/$id/edit"));
            exit;

        }
}