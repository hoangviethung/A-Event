<?php

if (! function_exists('ddd')) {
    function ddd()
    {
        $args = func_get_args();
<<<<<<< HEAD
=======

        if (count($args) === 0)
        {
            throw new Exception("You should pass at least 1 argument to `ddd`");
        }

>>>>>>> 67f1e3165dd1a748e8288b061d312588d9bf3045
        call_user_func_array('dump', $args);

        $handler = app(\Facade\Ignition\ErrorPage\ErrorPageHandler::class);

        $client = app()->make('flare.client');

        $report = $client->createReportFromMessage('Dump, Die, Debug', 'info');

        $handler->handleReport($report, 'DebugTab', [
            'dump' => true,
            'glow' => false,
            'log' => false,
            'query' => false,
        ]);

        die();
    }
}
