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

    
    function preorderTraversalRecursive($root) {
        
        if ($root != null) {
            if (isset($root->Value) && $root->Value != null && !empty($root->Value)) {
                echo $root->Value." ";
                
                if (isset($root->Left) && !empty($root->Left)) {
                    preorderTraversalRecursive($root->Left);
                }
                
                if (isset($root->Right) && !empty($root->Right)) {
                    preorderTraversalRecursive($root->Right);
                }
            }
        }
        
    }

    preorderTraversalRecursive($root);
    // 1 5 7 6 3 2 4
    