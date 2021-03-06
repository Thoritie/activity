<?php

class Student extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=8, nullable=false)
     */
    public $idStudent;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $Title;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $FirstName;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $LastName;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=false)
     */
    public $Password;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=false)
     */
    public $year;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("activityswe_db");
        $this->hasMany('idStudent', 'ActivityHasStudent', 'Student_idStudent', ['alias' => 'ActivityHasStudent']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'student';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Student[]|Student
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Student
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
