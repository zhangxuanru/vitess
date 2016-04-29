<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: tabletmanagerdata.proto

namespace Vitess\Proto\Tabletmanagerdata {

  class InitSlaveRequest extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Topodata\TabletAlias */
    public $parent = null;
    
    /**  @var string */
    public $replication_position = null;
    
    /**  @var int */
    public $time_created_ns = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'tabletmanagerdata.InitSlaveRequest');

      // OPTIONAL MESSAGE parent = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "parent";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Topodata\TabletAlias';
      $descriptor->addField($f);

      // OPTIONAL STRING replication_position = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "replication_position";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT64 time_created_ns = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "time_created_ns";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <parent> has a value
     *
     * @return boolean
     */
    public function hasParent(){
      return $this->_has(1);
    }
    
    /**
     * Clear <parent> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\InitSlaveRequest
     */
    public function clearParent(){
      return $this->_clear(1);
    }
    
    /**
     * Get <parent> value
     *
     * @return \Vitess\Proto\Topodata\TabletAlias
     */
    public function getParent(){
      return $this->_get(1);
    }
    
    /**
     * Set <parent> value
     *
     * @param \Vitess\Proto\Topodata\TabletAlias $value
     * @return \Vitess\Proto\Tabletmanagerdata\InitSlaveRequest
     */
    public function setParent(\Vitess\Proto\Topodata\TabletAlias $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <replication_position> has a value
     *
     * @return boolean
     */
    public function hasReplicationPosition(){
      return $this->_has(2);
    }
    
    /**
     * Clear <replication_position> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\InitSlaveRequest
     */
    public function clearReplicationPosition(){
      return $this->_clear(2);
    }
    
    /**
     * Get <replication_position> value
     *
     * @return string
     */
    public function getReplicationPosition(){
      return $this->_get(2);
    }
    
    /**
     * Set <replication_position> value
     *
     * @param string $value
     * @return \Vitess\Proto\Tabletmanagerdata\InitSlaveRequest
     */
    public function setReplicationPosition( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <time_created_ns> has a value
     *
     * @return boolean
     */
    public function hasTimeCreatedNs(){
      return $this->_has(3);
    }
    
    /**
     * Clear <time_created_ns> value
     *
     * @return \Vitess\Proto\Tabletmanagerdata\InitSlaveRequest
     */
    public function clearTimeCreatedNs(){
      return $this->_clear(3);
    }
    
    /**
     * Get <time_created_ns> value
     *
     * @return int
     */
    public function getTimeCreatedNs(){
      return $this->_get(3);
    }
    
    /**
     * Set <time_created_ns> value
     *
     * @param int $value
     * @return \Vitess\Proto\Tabletmanagerdata\InitSlaveRequest
     */
    public function setTimeCreatedNs( $value){
      return $this->_set(3, $value);
    }
  }
}

