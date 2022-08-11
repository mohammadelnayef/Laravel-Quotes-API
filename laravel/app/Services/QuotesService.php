<?php
namespace App\Services;

class QuotesService{

    private array $quotes;

    private function fetchQuotes(): array {
        $this->quotes = json_decode(file_get_contents(base_path() . "/app/Services/quotes.json"), true);
        return $this->quotes;
    }

    public function findQuotesByAuthor(string $urlAuthorName, int $limit = null): string {
       
        $this->fetchQuotes();
        $quotesByAuthor = [];
        $formattedName = $this->formatURLAuthorName($urlAuthorName); 
        $quotesCount = 0;

        foreach($this->quotes['quotes'] as $quote){
            if($quote["author"] == $formattedName && $quotesCount < $limit ){
                $quotesByAuthor[] = $this->formatQuote($quote["quote"]);
                $quotesCount++;
            }
        }

        if(empty($quotesByAuthor)){
            return json_encode(['message' => 'No quotes found!']);
        }
        else{
            return str_replace("\u2019", "'",json_encode($quotesByAuthor));
        }
    }

    private function formatURLAuthorName(string $urlName): string {
        if(str_contains($urlName,'-')){
            $formattedName =  str_replace("-"," ",$urlName);
            return ucwords($formattedName);
        }
        else{
            return ucwords($urlName);
        }
    }

    private function formatQuote(string $quote): string {
        $removedSymbolQuote = substr($quote, 0, -1);
        return strtoupper($removedSymbolQuote). '!';
    }

}