<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_73c905bd3979348e2f49b4bc08293439e7a9a7fce9b9e95cbcc0f61b38720bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de4ed3bf7a0c745beed83797bf82aa4a85d3d77704a6978a074854ff6173743c = $this->env->getExtension("native_profiler");
        $__internal_de4ed3bf7a0c745beed83797bf82aa4a85d3d77704a6978a074854ff6173743c->enter($__internal_de4ed3bf7a0c745beed83797bf82aa4a85d3d77704a6978a074854ff6173743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:history_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "history"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-archive\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_de4ed3bf7a0c745beed83797bf82aa4a85d3d77704a6978a074854ff6173743c->leave($__internal_de4ed3bf7a0c745beed83797bf82aa4a85d3d77704a6978a074854ff6173743c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% if admin.hasroute('history') and admin.id(object) and admin.isGranted('EDIT', object) %}*/
/*     <a class="sonata-action-element" href="{{ admin.generateObjectUrl('history', object) }}">*/
/*         <i class="fa fa-archive"></i>*/
/*         {{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
