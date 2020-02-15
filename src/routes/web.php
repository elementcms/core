<?php

Route::prefix('element')->group(function () {
    Route::get('/', 'Genericmilk\Element\Core\Ui@Dashboard');
});
