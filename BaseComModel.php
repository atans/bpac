<?php

namespace atans\bpac;

/**
 * Class BaseComObject
 *
 * @author Atans Chiu
 */
class BaseComModel
{
    protected $model;

    /**
     * BaseObject.
     *
     * @param $name
     * @throws \Exception
     */
    public function __construct($name)
    {
        if (! class_exists('Com')) {
            throw new \Exception('COM and .Net (php_com_dotnet) extension is Required, see http://php.net/manual/en/book.com.php');
        }

        $this->model = new \Com($name);
    }

    /**
     * Get model
     *
     * @return object
     */
    public function getModel()
    {
        return $this->model;
    }


    /**
     * Returns the value of property
     *
     * @param mixed $name
     * @return mixed
     * @throws \Exception
     */
    public function __get($name)
    {
        $getter = 'get' . $name;
        if (method_exists($this, $getter)) {
            return $this->$getter();
        }

        return $this->model->$name;
    }

    /**
     * Sets the value of property
     *
     * @param mixed $name
     * @param mixed $value
     * @throws \Exception
     */
    public function __set($name, $value)
    {
        $setter = 'set' . $name;
        if (method_exists($this, $setter)) {
            $this->$setter($value);

            return;
        }

        $this->model->$name = $value;
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            return call_user_func_array([$this, $name], $arguments);
        }

        return call_user_func_array([$this->model, $name], $arguments);
    }
}