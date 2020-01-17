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

    
    function inorderTraversalRecursive($root) {
        
        if ($root != null) {
            if (isset($root->Value) && $root->Value != null && !empty($root->Value)) {
                
                if (isset($root->Left) && !empty($root->Left)) {
                    inorderTraversalRecursive($root->Left);
                }
                
                echo $root->Value." ";

                if (isset($root->Right) && !empty($root->Right)) {
                    inorderTraversalRecursive($root->Right);
                }
            }
        }
        
    }

    inorderTraversalRecursive($root);
    // 7 5 6 1 2 3 4