<?php
/**
 * Fmkj Framework
 *
 * DatadonController
 *
 */
namespace Sys\Controllers;

class Datadon
{
    private $requetes;

    public function findOne($table, $args = false)
    {
        $db = Base::db();

        if (TRUE == $args) {
            $selected = '';
            foreach ($args as $arg) {

                // Argument : Champs; champs sélectionnés
                if (TRUE == $arg['champs'] AND is_array($arg['champs'])) {
                    foreach ($arg['champs'] as $selects) {
                        $selected .= $selects . ',';
                    }
                    $selected = substr($selected, 0, -1);
                } else {
                    $selected = '*';
                }

                // Argument : Where; clause de la requête SQL
                if (TRUE == $arg['where']) {
                    $where = ' WHERE ' . $arg['where'];
                } else {
                    $where = false;
                }

                // Argument : Distinct; distinct un champ de la requête SQL
                if (!empty($args['distinct'])) {
                    $selected = false;
                    $distinct = ' DISTINCT ' . $args['distinct'];
                } else {
                    $distinct = false;
                }

                // Argument : Join; jointure requête SQL
                if (!empty($args['join']) AND is_array($args['join'])) {
                    $jointure = '';
                    if (!empty($args['join'][0]) AND !empty($args['join'][1]) AND !empty($args['join'][2])) {
                        if (in_array('left', $args['join'])
                            OR in_array('right', $args['join'])
                            OR in_array('inner', $args['join'])
                            OR in_array('cross', $args['join'])
                            OR in_array('full', $args['join'])
                            OR in_array('self', $args['join'])
                            OR in_array('natural', $args['join'])) {
                            $jointure .= ' ' . $args['join'][1] . ' JOIN ' . $args['join'][0] . ' ON ' . $args['join'][2];
                        } else {
                            $jointure = false;
                        }
                    } else {
                        $jointure = false;
                    }
                }
            }
        }

        $reponse = $db->prepare('SELECT ' . $distinct . $selected . ' FROM ' . $table . $where);
        $reponse->execute();

        $this->requetes = 'SELECT ' . $distinct . $selected . ' FROM ' . $table . $where;

        return $reponse->fetch();
    }
    public function findAll($table, $args = false)
    {
        $db = Base::db();

        if (TRUE == $args) {
            $selected = '';

            // Argument : Champs; champs sélectionnés
            if (!empty($args['champs']) AND is_array($args['champs'])) {
                foreach ($args['champs'] as $selects) {
                    $selected .= $selects . ',';
                }
                $selected = substr($selected, 0, -1);
            } else {
                $selected = '*';
            }

            // Argument : Where; clause de la requête SQL
            if (!empty($args['where'])) {
                $where = ' WHERE ' . $args['where'];
            } else {
                $where = false;
            }

            // Argument : Distinct; distinct un champ de la requête SQL
            if (!empty($args['distinct'])) {
                $selected = false;
                $distinct = ' DISTINCT ' . $args['distinct'];
            } else {
                $distinct = false;
            }

            // Argument : Join; jointure requête SQL
            if (!empty($args['join']) AND is_array($args['join'])) {
                $jointure = '';
                if (!empty($args['join'][0]) AND !empty($args['join'][1]) AND !empty($args['join'][2])) {
                    if (in_array('left', $args['join'])
                        OR in_array('right', $args['join'])
                        OR in_array('inner', $args['join'])
                        OR in_array('cross', $args['join'])
                        OR in_array('full', $args['join'])
                        OR in_array('self', $args['join'])
                        OR in_array('natural', $args['join'])) {
                        $jointure .= ' ' . $args['join'][1] . ' JOIN ' . $args['join'][0] . ' ON ' . $args['join'][2];
                    } else {
                        $jointure = false;
                    }
                } else {
                    $jointure = false;
                }
            }
        }

        $reponse = $db->prepare('SELECT ' . $distinct . $selected . ' FROM ' . $table . $jointure . $where);
        $this->requetes = 'SELECT ' . $distinct . $selected . ' FROM ' . $table . $jointure . $where;
        $reponse->execute();

        return $reponse->fetchAll();
    }

    public function getRequetes() {
        return $this->requetes;
    }
}