<?php
/**
 * Created by PhpStorm.
 * User: lexxyungcarter
 * Date: 20/01/2020
 * Time: 14:36
 */

namespace AceLords\Generators\Console\Generators;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

class SeederMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'acelords:make-seeder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new AceLords project seeder class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Seeder';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/seeder.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Database\Seeders';
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        $name = str_replace('\\', '/', $name);

        // append suffix to name
        $name = $this->getSeederName($name);

        $module = Str::studly(strtolower($this->argument('module')));

        $modulePath = base_path($this->projectPath . '/' . $module);

        return $modulePath . $name . '.php';
    }

    /**
     * Get seeder name.
     *
     * @return string
     */
    protected function getSeederName($name)
    {
        $suffix = $this->option('master') ? 'DatabaseSeeder' : 'TableSeeder';

        return $name . $suffix;
    }

    /**
     * Get seeder name.
     *
     * @return string
     */
    protected function getSeederNameFromClassName()
    {
        $suffix = $this->option('master') ? 'DatabaseSeeder' : 'TableSeeder';

        return $this->className . $suffix;
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['master', null, InputOption::VALUE_NONE, 'Indicates the seeder will created is a master database seeder.'],
        ];
    }

}
