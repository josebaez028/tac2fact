<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Registros
    Route::apiResource('registros', 'RegistrosApiController');

    // Contactos
    Route::apiResource('contactos', 'ContactosApiController');

    // Taskstatuses
    Route::apiResource('task-statuses', 'TaskStatusApiController');

    // Tasktags
    Route::apiResource('task-tags', 'TaskTagApiController');

    // Tasks
    Route::post('tasks/media', 'TaskApiController@storeMedia')->name('tasks.storeMedia');
    Route::apiResource('tasks', 'TaskApiController');

    // Taskscalendars
    Route::apiResource('tasks-calendars', 'TasksCalendarApiController', ['except' => ['store', 'show', 'update', 'destroy']]);
});
