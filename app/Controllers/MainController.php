<?php

namespace App\Controllers;

use Oframework\Controllers\CoreController;
use App\Models\ExampleModel;

class MainController extends CoreController {
    /**
     * Method for the home page
     */
    public function home() {
        // If I need data from database (Models)
        $examples = ExampleModel::findAll();

        // For now, this page only needs the view
        $this->show('main/home');
        // Instead, if this page needs data, we can put all data
        // in an array as 2nd argument :
        // $this->show('main/home', [
        //     'examples' => $examples
        // ]);
    }
}