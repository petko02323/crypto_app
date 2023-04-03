<?php

/*
 * SK
 */
return [

'accepted'             => ':attribute musí byť akceptovaná.',
    'active_url'           => ' :attribute neplatná URL.',
    'after'                => ' :attribute musí byť po dnešnom dátume.',
    'alpha'                => ' :attribute môže obsahovať len písmená.',
    'alpha_dash'           => ' :attribute môže obsahovať len písmená, čísla a limítka.',
    'alpha_num'            => ' :attribute môže obsahovať len písmená a  čísla.',
    'array'                => ' :attribute musí byť pole.',
    'before'               => ' :attribute musí byť najneskôr :date.',
    'between'              => [
        'numeric' => ' :attribute musí byť medzi :min a :max.',
        'file'    => ' :attribute musí byť medzi :min a :max kilobytes.',
        'string'  => 'dĺžka :attribute musí byť medzi :min a :max characters.',
        'array'   => 'pole :attribute musí mať medzi :min a :max položkami.',
    ],
    'boolean'              => ':attribute musí byť áno alebo nie.',
    'confirmed'            => ':attribute potvrdenie sa nezhoduje.',
    'date'                 => ':attribute nieje platným dátumom.',
    'date_format'          => ':attribute nemá formát :format.',
    'different'            => ':attribute a :other sa musia odlišovať.',
    'digits'               => ':attribute musí mať :digits čísel.',
    'digits_between'       => ':attribute musí mať medzi :min and :max číslami.',
    'distinct'             => ':attribute položka má duplicitnú hodnotu.',
    'email'                => ':attribute musí byť platný email.',
    'exists'               => 'označený :attribute je neplatný.',
    'filled'               => ':attribute musí byť vyplnené cez nášho sprievodcu.',
    'image'                => ':attribute musí byť obrázok.',
    'in'                   => 'označený :attribute je neplatný.',
    'in_array'             => ':attribute sa nenachádza v :other.',
    'integer'              => ':attribute musí byť celé číslo.',
    'ip'                   => ':attribute musí byť platná IP adresa.',
    'json'                 => ':attribute musí byť platný JSON string.',
    'max'                  => [
        'numeric' => ':attribute nesmie byť viac ako :max.',
        'file'    => ':attribute nesmie mať viac ako :max kilobytes.',
        'string'  => ':attribute nesmie mať viac ako :max písmen.',
        'array'   => ':attribute nesmie mať viac ako :max položiek.',
    ],
    'mimes'                => ':attribute musí byť súbor typu: :values.',
    'min'                  => [
        'numeric' => ':attribute musí mať minimálne :min.',
        'file'    => ':attribute musí mať minimálne :min kilobytes.',
        'string'  => ':attribute musí mať minimálne :min písmen.',
        'array'   => ':attribute musí mať minimálne :min položiek.',
    ],
    'not_in'               => 'označený :attribute je neplatný.',
    'numeric'              => ':attribute musí byť číslo.',
    'present'              => ':attribute musíte potvrdiť',
    'regex'                => ':attribute format je neplatný.',
    'required'             => ':attribute musíte zadať',
    'required_if'          => ':attribute musíte zadať ak :other je :value.',
    'required_unless'      => ':attribute musíte zadať pokým :other je v :values.',
    'required_with'        => ':attribute musíte zadať ak :values je zadaná tiež.',
    'required_with_all'    => ':attribute musíte zadať ak :values je zadaná tiež.',
    'required_without'     => ':attribute musíte zadať ak :values nieje zadaná.',
    'required_without_all' => ':attribute musíte zadať ak žiadna z :values nieje zadaná.',
    'same'                 => ':attribute a :other sa musia zhodovať.',
    'size'                 => [
        'numeric' => ':attribute musí byť :size.',
        'file'    => ':attribute musí mať :size kilobytes.',
        'string'  => ':attribute musí mať :size písmen.',
        'array'   => ':attribute musí mať :size položiek.',
    ],
    'string'               => ':attribute musí byť string.',
    'timezone'             => ':attribute musí byť platná časová zóna.',
    'unique'               => ':attribute už bol predtým použitý.',
    'url'                  => 'formát :attribute je neplatný.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'first_name' => 'Meno',
          'last_name' => 'Priezvisko',
          'company' => 'Spoločnosť',
          'address' => 'Adresa',
          'zip' => 'Psč',
          'city' => 'Mesto',
          'idn' => 'Ičo',
          'vat' => 'Dph',
          'title' => 'Názov',
          'description' => 'Popis',
          'price' => 'Cena',
          'count' => 'Počet',
          'item' => 'Položka',
          'title1' => 'Názov',          
          'zollName' => 'Položka podľa CS',          
          'nomenklatur' => 'Zaradenie položky',
          'grossWeight' => 'Hrubá hmotnosť',
          'insurance' => 'Poistenie tovaru',
          'manifest' => 'Letecký manifest',
          'invoiceNo' => 'Faktúra č.',
          'proforma' => 'Proforma faktúra č.',
          'freight' => 'Doprava cena',
          'packaging' => 'Balenie',
          'creditNoteNo' => 'Dodací list č.',
          'agreeConditions' => 'Súhlas s obchodnými podmienkami',
          'body' => 'Telo textu',
          'author' => 'Autor',
          'day' => 'Deň', 
          'poradie' => 'Poradie', 
          'interval' => 'Interval',
          'start' => 'Začiatok',
          'end' => 'Koniec',
          'name' => 'Meno',
          'email' => 'E-mail',
          'phone' => 'Tel. číslo',
          'now' => 'dnes',
          'review' => 'Hodnotenia',
          'text' => 'Text',
          'priceText' => 'Text s cenou',
          'endDate' => 'Termín ukončenia',
          'img' => 'Obrázok',
          'action' => 'Akcie',
          'startDate' => 'Termín štartu',
          'willTake' => 'Potrvá',
          'desc' => 'Popis',
          'type' => 'Typ',
          'tag' => 'Tagy',
          'short_description' => 'Stručný popis',
          'rating' => 'Hodnotenie',
          'netto_price' => 'Netto cenu',
          'discount' => 'Zľavu',
          'product_code' => 'Kód produktu',
          'parameter_id' => 'Parameter',
          'status' => 'Stav',
          'textHaix' => 'Haix text',
          'youtube' => 'Youtube url',
          'youtubeTitle' => 'Nadpis videa',
          'youtubeText' => 'Text k videu',
          'meta_description' => 'Meta popis',
          'keywords' => 'Kľúčové slová',
          'textTop' => 'Text vrchná sekcia',
          'textMiddle' => 'Text stredná sekcia',
          'textBottom' => 'Text spodná sekcia',
          'textNote' => 'Malý text',
          'stnumber' => 'Čislo ulice',
          'compstnumber' => 'Čislo ulice spoločnosti'
          
    ],

];