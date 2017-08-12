<?php

Route::resource('cards', 'CardController', ['except' => ['create', 'edit']]);
