<?php

/* bootstrap/layout.bootstrap.twig */
class __TwigTemplate_358e5f5f50ba565837558c0c2456a5df840e1b522495b97f73cb8906061ae681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "
<body>
";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "</body>
</html>";
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "views", array()), "html", null, true);
        echo "/favicon.ico\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "bootstrap", array()), "html", null, true);
        echo "/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "bootstrap", array()), "html", null, true);
        echo "/assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "views", array()), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "bootstrap", array()), "html", null, true);
        echo "/assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "bootstrap", array()), "html", null, true);
        echo "/assets/js/ie-emulation-modes-warning.js\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        // line 41
        echo "    <footer>
        <p>&copy; 2015 Company, Inc.</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "bootstrap", array()), "html", null, true);
        echo "/assets/js/vendor/jquery.min.js\"><\\/script>')</script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "bootstrap", array()), "html", null, true);
        echo "/dist/js/bootstrap.min.js\"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "url", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["path"]) ? $context["path"] : null), "bootstrap", array()), "html", null, true);
        echo "/assets/js/ie10-viewport-bug-workaround.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/layout.bootstrap.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 54,  135 => 52,  130 => 51,  118 => 41,  115 => 40,  110 => 37,  105 => 13,  91 => 26,  87 => 25,  80 => 22,  73 => 19,  66 => 16,  60 => 13,  55 => 11,  44 => 2,  41 => 1,  36 => 56,  34 => 40,  31 => 39,  29 => 37,  25 => 35,  23 => 1,);
    }
}
/* {% block head %}*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="{{ path.views }}/favicon.ico">*/
/* */
/*     <title>{% block title %}{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ path.url }}{{ path.bootstrap }}/dist/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <link href="{{ path.url }}{{ path.bootstrap }}/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{ path.url }}{{ path.views }}/css/style.css" rel="stylesheet">*/
/* */
/*     <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->*/
/*     <!--[if lt IE 9]><script src="{{ path.bootstrap }}/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->*/
/*     <script src="{{ path.url }}{{ path.bootstrap }}/assets/js/ie-emulation-modes-warning.js"></script>*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* {% endblock %}*/
/* */
/* <body>*/
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <footer>*/
/*         <p>&copy; 2015 Company, Inc.</p>*/
/*     </footer>*/
/* </div> <!-- /container -->*/
/* */
/* */
/* <!-- Bootstrap core JavaScript*/
/* ================================================== -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="{{ path.url }}{{ path.bootstrap }}/assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/* <script src="{{ path.url }}{{ path.bootstrap }}/dist/js/bootstrap.min.js"></script>*/
/* <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/* <script src="{{ path.url }}{{ path.bootstrap }}/assets/js/ie10-viewport-bug-workaround.js"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
