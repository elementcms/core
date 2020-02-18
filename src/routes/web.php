<?php

Route::prefix('element')->group(function () {
    Route::get('/', 'Element\Core\Ui@Dashboard');
});
