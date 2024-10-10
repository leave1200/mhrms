<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Paths extends BaseConfig
{
    /*
     *---------------------------------------------------------------
     * SYSTEM FOLDER NAME
     *---------------------------------------------------------------
     *
     * This must contain the name of your "system" folder. Include
     * the path if the folder is not in the same directory as this file.
     */
    public string $systemDirectory = __DIR__ . '/../../system';

    /*
     *---------------------------------------------------------------
     * APPLICATION FOLDER NAME
     *---------------------------------------------------------------
     *
     * If you want this front controller to use a different "app"
     * folder than the default one you can set its name here. The folder
     * can also be renamed or relocated anywhere on your getServer. If
     * you do, use a full getServer path.
     *
     * @see http://codeigniter.com/user_guide/general/managing_apps.html
     */
    public string $appDirectory = __DIR__ . '/../';

    /*
     *---------------------------------------------------------------
     * WRITABLE DIRECTORY NAME
     *---------------------------------------------------------------
     *
     * This variable must contain the name of your "writable" directory.
     * The writable directory allows the framework to write files to this
     * directory. The "writable" directory must be writable.
     */
    public string $writableDirectory = __DIR__ . '/../../writable';

    /*
     *---------------------------------------------------------------
     * TESTS DIRECTORY NAME
     *---------------------------------------------------------------
     *
     * This variable must contain the name of your "tests" directory.
     */
    public string $testsDirectory = __DIR__ . '/../../tests';

    /*
     * ---------------------------------------------------------------
     * VIEW DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of the directory that
     * contains the view files used by your application. By
     * default this is in `app/Views`. This value
     * is used when no value is provided to `Services::renderer()`.
     */
    public string $viewDirectory = __DIR__ . '/../Views';
}
