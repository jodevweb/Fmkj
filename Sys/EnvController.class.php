<?php
/**
 * Fmkj Framework
 *
 * EnvController
 *
 */
namespace Sys\Controllers;

class Env
{
    public function __construct()
    {
        if (__ENV_MODE__ == "dev") {
            ini_set('display_errors', 1);
            ini_set('log_errors', 1);
            ini_set('error_log', 'App/Logs/errors.txt');
            error_reporting(E_ALL);
            set_error_handler(function ($type, $message, $fichier, $ligne)
            {
                switch ($type)
                {
                    case E_ERROR:
                    case E_PARSE:
                    case E_CORE_ERROR:
                    case E_CORE_WARNING:
                    case E_COMPILE_ERROR:
                    case E_COMPILE_WARNING:
                    case E_USER_ERROR:
                        $type_erreur = "Erreur fatale";
                        break;

                    case E_WARNING:
                    case E_USER_WARNING:
                        $type_erreur = "Avertissement";
                        break;

                    case E_NOTICE:
                    case E_USER_NOTICE:
                        $type_erreur = "Remarque";
                        break;

                    case E_STRICT:
                        $type_erreur = "Syntaxe Obsolète";
                        break;

                    default:
                        $type_erreur = "Erreur inconnue";
                        break;
                }
                echo '<div style="background-color: #761c19;color: #FFFFFF;padding: 10px;border: 1px dashed #843534;">
                        <strong>' . $type_erreur . ' :</strong> <code>' . $message . '</code><br/>
	                    <strong>Fichier</strong> "' . $fichier . '" <strong>[ ligne ' . $ligne . '. ]</strong>
	                  </div>';
            }
            );

        }

        if (__ENV_MODE__ == "prod") {
            ini_set('display_errors', 0);
            error_reporting(0);
        }
    }
    public function debugbar($param, $exec)
    {
        if (__ENV_MODE__ == "dev") {
            $HTMLdebug = '<div style="position:absolute;bottom: 0;width: 100%;padding: 10px;background-color: #843534;color: #FFFFFF;">
                            <div style="float: left;border-right: solid 1px #FFFFFF;width: 100px;">DEBUBBAR</div>
                                <span style="margin-left: 50px;">'.$param.'</span>
                                <span style="float:right;">Execution : '.round($exec, 6).' sec</span>
                          </div>';

            return $HTMLdebug;
        }
    }
}