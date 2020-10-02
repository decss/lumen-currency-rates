<?php


namespace App\Services;


use DOMDocument;
use Illuminate\Support\Str;

class CurrencyService
{
    protected $data = [];
    protected $url = 'http://www.cbr.ru/scripts/XML_daily.asp';
    //?date_req=02/10/2020

    public function load($date = null)
    {
        $url = $this->url;
        if ($date) {
            $url .= '?date_req=' . date('d/m/Y', strtotime($date));
        }

        $xml = new DOMDocument();
        if ($xml->load($url)) {
            $root = $xml->documentElement;
            $items = $root->getElementsByTagName('Valute');
            foreach ($items as $item) {
                $numCode = $item->getElementsByTagName('NumCode')->item(0)->nodeValue;
                $charCode = $item->getElementsByTagName('CharCode')->item(0)->nodeValue;
                $name = $item->getElementsByTagName('Name')->item(0)->nodeValue;
                $value = $item->getElementsByTagName('Value')->item(0)->nodeValue;
                $value = str_replace(',', '.', $value);

                $this->data[$numCode] = [
                    'name' => $name,
                    'english_name' => Str::slug($name),
                    'alphabetic_code' => $charCode,
                    'digit_code' => $numCode,
                    'rate' => floatval($value),
                ];
            }

            return true;
        }

        return false;
    }

    public function getAllCurrencies()
    {
        return $this->data;
    }

    public function getCurrency($num)
    {
        if (isset($this->data[$num])) {
            return $this->data[$num];
        }

        return [];
    }
}
// <NumCode>036</NumCode>
// <CharCode>AUD</CharCode>
// <Nominal>1</Nominal>
// <Name>Австралийский доллар</Name>
// <Value>55,5393</Value>
