<?php
namespace App\Http\Controllers;
use App\Services\QuotesService;
use Illuminate\Http\Request;


class QuotesController extends Controller{

    public function getQuotes(Request $req): string {

        $urlAuthorName = $req->segment(3);
        $limit = isset($_GET['limit']) ? $_GET['limit'] : null;

        $quotesServiceObject = new QuotesService();
        $result = $quotesServiceObject->findQuotesByAuthor($urlAuthorName,$limit);
        return $result;
    }

}
