<?php
/**
 * Created by PhpStorm.
 * User: lexxyungcarter
 * Date: 2019-08-24
 * Time: 05:31
 */

namespace AceLords\Generators\Console\Generators;

class RepositoryMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'acelords:make-repo';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new AceLords project event class';
    
    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Repository';
    
    /**
     * Determine if the class already exists.
     *
     * @param  string  $rawName
     * @return bool
     */
    protected function alreadyExists($rawName)
    {
        return class_exists($rawName);
    }
    
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/repository.stub';
    }
    
    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Repositories';
    }
}