<?php

/* hello.twig */
class __TwigTemplate_335167187a661c2b0a58d0de730a82c372c7d34bced61f622b7b0424d5edb757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "hello.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["app_name"]) ? $context["app_name"] : null), "html", null, true);
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    Salut ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pseudo"]) ? $context["pseudo"] : null), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pseudo"]) ? $context["pseudo"] : null), "nom", array()), "html", null, true);
        echo " La route actuelle est : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : null), "only", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : null), "url", array()), "html", null, true);
        echo "
    ";
        // line 11
        echo (isset($context["form"]) ? $context["form"] : null);
        echo "
";
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "hello.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  67 => 14,  61 => 11,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* {% block title %}{{ app_name }}{% endblock %}*/
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     Salut {{ pseudo.prenom }} {{ pseudo.nom }} La route actuelle est : {{ route.only }} {{ route.url }}*/
/*     {{ form|raw }}*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
