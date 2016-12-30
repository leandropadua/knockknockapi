<?php

Route::get('/Fibonacci', ['uses' => 'FibonacciController@getFibonacciSequenceNumber']);

Route::get('/ReverseWords', ['uses' => 'ReverseWordsController@reverseWordsInSentence']);

Route::get('/Token', ['uses' => 'TokenController@getToken']);

Route::get('/TriangleType', ['uses' => 'TriangleTypeController@getTriangleType']);