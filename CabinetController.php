<?php

class CabinetController extends Controller {
 
    private $pageTpl = "/views/cabinet.tpl.php";


    public function __construct() {
        $this->model = new CabinetModel ();
        $this->view = new View();

    }

    public function index() {
        $this->pageData['title'] = "Кабинет";

        $collectionsCount = $this->model->getCollectionsCount();
        $this->pageData['collectionsCount'] = $collectionsCount;

        $nftCount = $this->model->getNftCount();
        $this->pageData['nftCount'] = $nftCount;

        $usersCount = $this->model->getUsersCount();
        $this->pageData['usersCount'] = $usersCount;



        $this->view->render($this->pageTpl, $this->pageData);
    }

}