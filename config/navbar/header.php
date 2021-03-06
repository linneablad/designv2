<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
                    ],
                    [
                        "text" => "Kmom10",
                        "url" => "redovisning/kmom10",
                        "title" => "Redovisning för kmom10.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapporter",
            "url" => "rapport",
            "title" => "Rapporter",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Färgval för webbplatser inom smyckesbranschen",
                        "url" => "rapport/fargschema",
                        "title" => "Färgval för webbplatser inom smyckesbranschen",
                    ],
                    [
                        "text" => "Utvärdering av webbplatsers laddningstid och användbarhet",
                        "url" => "rapport/laddningstid",
                        "title" => "Utvärdering av webbplatsers laddningstid och användbarhet",
                    ],
                    [
                        "text" => "Utvärdering av designprinciper som webbplatser använder",
                        "url" => "rapport/designprincip",
                        "title" => "Utvärdering av designprinciper som webbplatser använder",
                    ],
                    [
                        "text" => "Skapa tema med designelement",
                        "url" => "rapport/designelement",
                        "title" => "Skapa tema med designelement",
                    ],
                    [
                        "text" => "Skapa tema enligt designprinciper",
                        "url" => "rapport/designprinciper",
                        "title" => "Skapa tema enligt designprinciper",
                    ],
                    [
                        "text" => "Analys aktuell webbplatsdesign",
                        "url" => "rapport/webbplatsdesign",
                        "title" => "Analys aktuell webbplatsdesign",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Blogg",
        ],
        [
            "text" => "Lek",
            "url" => "test",
            "title" => "Lek runt i Markdown.",
        ],
    ],
];
