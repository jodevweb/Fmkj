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
    private $requetes = "";
    private $error_query = "";
    private $success_query = "";
    public $nbQuery = 0;

    public function __destruct()
    {
        $HTMLoutput = '
            <div class="modal fade" id="Query" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Query</h4>
                  </div>
                  <div class="modal-body">
                    '.$this->getRequetes().'
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>';
        echo $HTMLoutput;
    }

    public function findOne($table, $args = false)
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
            } else {
                $jointure = false;
            }

            // Argument : Limit; Limit les résultats de la requête
            if (!empty($args['limit']) AND is_array($args['limit'])) {
                if (!empty($args['limit'][0]) AND !empty($args['limit'][1])) {
                    $limit = ' LIMIT ' . $args['limit'][0] . ', ' . $args[1];
                } else {
                    $limit = false;
                }
            } else {
                $limit = false;
            }
        }

        $reponse = $db->prepare('SELECT ' . $distinct . $selected . ' FROM ' . $table . $jointure . $where . $limit);
        $reponse->execute();

        if ($reponse): $this->error_query = false; else: $this->error_query = 'Error'; endif;
        if ($reponse): $this->success_query = false; else: $this->success_query = 'Success'; endif;

        $this->requetes .= '<kbd>SELECT ' . $distinct . $selected . ' FROM ' . $table . $jointure . $where . $limit.'</kbd> '. $this->error_query .'  '. $this->success_query .'<br />';
        $this->nbQuery++;
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
              foreach ($args['join'] as $key => $value) {
                if (!empty($value[0]) AND !empty($value[1])) {
                  if (in_array('left', $value)
                      OR in_array('right', $value)
                      OR in_array('inner', $value)
                      OR in_array('cross', $value)
                      OR in_array('full', $value)
                      OR in_array('self', $value)
                      OR in_array('natural', $value)) {
                        $jointure .= ' ' . $value[0] . ' JOIN ' . $key . ' ON ' . $value[1];
                      } else {
                        $jointure = false;
                      }
                } else {
                  $jointure = false;
                }
              }
            } else {
              $jointure = false;
            }


            // Argument : Limit; Limit les résultats de la requête
            if (!empty($args['limit']) AND is_array($args['limit'])) {
                if (!empty($args['limit'][0]) AND !empty($args['limit'][1])) {
                    $limit = ' LIMIT ' . $args['limit'][0] . ', ' . $args[1];
                } else {
                    $limit = false;
                }
            } else {
                $limit = false;
            }
        }

        $reponse = $db->prepare('SELECT ' . $distinct . $selected . ' FROM ' . $table . $jointure . $where . $limit);
        $reponse->execute();

        if ($reponse): $this->success_query = 'Success'; else: $this->error_query = 'Error'; endif;

        $this->requetes .= '<kbd>SELECT ' . $distinct . $selected . ' FROM ' . $table . $jointure . $where . $limit.'</kbd> '. $this->error_query .'  '. $this->success_query .'<br />';
        $this->nbQuery++;
        return $reponse->fetchAll();
    }

    public function getRequetes() {
        return $this->requetes;
    }

    public function getNbRequetes() {
        return $this->nbQuery;
    }
}
