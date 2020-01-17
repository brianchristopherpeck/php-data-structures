<?php

	/*
			 1
			/ \
		  5	   3
		 /\	  / \
		7 6	 2   4

    */
    $root =  (object)[
        "Value" => '1',
        "Right" => (object)[],
        "Left" => (object)[]
    ];

    $root->Right =  (object)[
        "Value" => '3',
        "Right" => (object)[],
        "Left" => (object)[]
    ];

    $root->Left =  (object)[
        "Value" => '5',
        "Right" => (object)[],
        "Left" => (object)[]
    ];

    $root->Left->Right =  (object)[
        "Value" => '6',
        "Right" => (object)[],
        "Left" => (object)[]
    ];

    $root->Left->Left =  (object)[
        "Value" => '7',
        "Right" => (object)[],
        "Left" => (object)[]
    ];


    $root->Right->Right =  (object)[
        "Value" => '4',
        "Right" => (object)[],
        "Left" => (object)[]
    ];

    $root->Right->Left =  (object)[
        "Value" => '2',
        "Right" => (object)[],
        "Left" => (object)[]
    ];

    
    function postTraversalRecursive($root) {
        
        if ($root != null) {
            if (isset($root->Value) && $root->Value != null && !empty($root->Value)) {
                
                if (isset($root->Left) && !empty($root->Left)) {
                    postTraversalRecursive($root->Left);
                }
                
                if (isset($root->Right) && !empty($root->Right)) {
                    postTraversalRecursive($root->Right);
                }

                echo $root->Value." ";
            }
        }
        
    }

    postTraversalRecursive($root);
    // 7 6 5 2 4 3 1